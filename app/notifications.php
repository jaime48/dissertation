<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notifications extends Model
{
    protected $table = 'notifications';

    /**
     * @param $userId
     * @param $title
     * @param $content
     * add notification
     */
    public static function addNotification($userId, $title, $content) {
        $noti = new notifications();
        $noti->user_id = $userId;
        $noti->title   = $title;
        $noti->content = $content;
        $noti->save();
    }
}
