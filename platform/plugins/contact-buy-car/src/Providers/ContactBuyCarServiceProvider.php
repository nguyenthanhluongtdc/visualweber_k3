<?php

namespace Platform\ContactBuyCar\Providers;

use Platform\ContactBuyCar\Models\ContactBuyCar;
use Illuminate\Support\ServiceProvider;
use Platform\ContactBuyCar\Repositories\Caches\ContactBuyCarCacheDecorator;
use Platform\ContactBuyCar\Repositories\Eloquent\ContactBuyCarRepository;
use Platform\ContactBuyCar\Repositories\Interfaces\ContactBuyCarInterface;
use Platform\Base\Supports\Helper;
use Illuminate\Support\Facades\Event;
use Platform\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ContactBuyCarServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ContactBuyCarInterface::class, function () {
            return new ContactBuyCarCacheDecorator(new ContactBuyCarRepository(new ContactBuyCar));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/contact-buy-car')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            // if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
            //    \Language::registerModule([ContactBuyCar::class]);
            // }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-contact-buy-car',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/contact-buy-car::contact-buy-car.name',
                'icon'        => 'fa fa-list',
                'url'         => route('contact-buy-car.index'),
                'permissions' => ['contact-buy-car.index'],
            ]);
        });
    }
}
