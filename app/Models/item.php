<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = 'item';
    protected $primaryKey = 'item_id';
    public $timestamps = false;
    protected $fillable = ['description', 'cost_price', 'sell_price', 'image'];
   
    public function stock()
    {
        return $this->hasOne(stock::class, 'item_id');
    }
}
