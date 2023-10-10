<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'quantity', 'price', 'description'];
 // Kolom yang dapat diisi secara massal

    // Contoh relasi jika ada, misalnya dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Contoh atribut tanggal jika ada
    protected $dates = ['created_at', 'updated_at'];
}
