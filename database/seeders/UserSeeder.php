<?php

namespace Database\Seeders;

use Platform\ACL\Models\User;
use Platform\ACL\Repositories\Interfaces\ActivationInterface;
use Platform\Base\Supports\BaseSeeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();

        $user = new User;
        $user->first_name = 'System';
        $user->last_name = 'Admin';
        $user->email = 'sysadmin@gistensal.com';
        $user->username = 'sysadmin';
        $user->password = bcrypt('Viweb@@1234');
        $user->super_user = 1;
        $user->manage_supers = 1;
        $user->save();

        event('acl.activating', $user);

        $activationRepository = app(ActivationInterface::class);

        $activation = $activationRepository->createUser($user);

        event('acl.activated', [$user, $activation]);

        return $activationRepository->complete($user, $activation->code);
    }
}
