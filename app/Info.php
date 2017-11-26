<?php
/**
 * Created by PhpStorm.
 * User: jmz11
 * Date: 2017/11/12
 * Time: 23:53
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table='info';

    protected $primaryKey='name';
}