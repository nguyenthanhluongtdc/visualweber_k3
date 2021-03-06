<?php

namespace Platform\Comment;

use Schema;
use Platform\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('bb_comments');
        Schema::dropIfExists('bb_comment_users');
        Schema::dropIfExists('bb_comment_likes');
        Schema::dropIfExists('bb_comment_recommends');
        Schema::dropIfExists('bb_comment_ratings');
    }
}
