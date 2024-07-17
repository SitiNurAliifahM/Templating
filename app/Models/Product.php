<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'desc', 'price', 'stock', 'image', 'category_id'];
    public $timestamp = true;



    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    // menghapus image
    public function deleteImage(){
        if($this->image && file_exists(public_path('images/product' . $this->image))){
            return unlink(public_path('images/product' . $this->image));
        }
    }
}
