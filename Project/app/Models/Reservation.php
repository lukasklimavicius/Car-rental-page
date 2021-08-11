<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $owner_id
 * @property int $customer_id
 * @property int $cars_id
 * @property date $start_date
 * @property date $finish_date
 * @property int $total_sum
 * @property enum $status
 *
 */
class Reservation extends Model
{

    use HasFactory;
    protected $table = 'reservations';

    public $guarded = [];

    public const STATE_NEW = 'new';
    public const STATE_CONFIRMED = 'confirmed';
    public const STATE_CANCELLED = 'cancelled';

    public const STATES = [
        self::STATE_NEW,
        self::STATE_CONFIRMED,
        self::STATE_CANCELLED
    ];
}
