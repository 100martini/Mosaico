<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const PRICE_PER_TILE = 4.50;

    protected $fillable = [
        'user_id', 'design_id',
        'room_width', 'room_height', 'tile_quantity',
        'customer_name', 'customer_email', 'customer_phone',
        'delivery_address', 'notes', 'status',
    ];

    protected $casts = [
        'room_width'  => 'decimal:2',
        'room_height' => 'decimal:2',
    ];

    const STATUS_KEYS = [
        'pending'   => 'status_pending',
        'confirmed' => 'status_confirmed',
        'shipped'   => 'status_shipped',
        'cancelled' => 'status_cancelled',
    ];

    const STATUS_COLORS = [
        'pending'   => '#f59e0b',
        'confirmed' => '#3b82f6',
        'shipped'   => '#10b981',
        'cancelled' => '#6b7280',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function design()
    {
        return $this->belongsTo(Design::class, 'design_id');
    }

    public function statusLabel(): string
    {
        $key = self::STATUS_KEYS[$this->status] ?? null;
        return $key ? __('lang.' . $key) : $this->status;
    }

    public function statusColor(): string
    {
        return self::STATUS_COLORS[$this->status] ?? '#6b7280';
    }

    public function totalPrice(): float
    {
        return round($this->tile_quantity * self::PRICE_PER_TILE, 2);
    }

    public static function calcTiles(float $width, float $height): int
    {
        return (int) ceil($width * $height * 25 * 1.10);
    }
}
