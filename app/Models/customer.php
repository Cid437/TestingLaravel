<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;

    protected $fillable = [
    'user_id',
    'fname',
    'lname',
    'addressline',
    'zipcode',
    'phone',
    'image_path'
    ];
    //

   public function user(){
    return $this->belongsTo(User::class);
   }
}
