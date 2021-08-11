<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $manufacturer
 * @property string $model
 * @property string $image
 * @property int $transmission
 * @property int $price
 * @property string $description
 * @property int $user_id
 *
 */

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';

    public $guarded = [];

}
