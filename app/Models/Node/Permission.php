<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15-5-10
 * Time: 上午12:49
 */

namespace App\Models\Node;


use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $connection = 'node';

    protected $visible = ['id', 'display_name', 'description'];

    public function category()
    {
        return $this->hasOne('App\Models\Node\Category');
    }
}