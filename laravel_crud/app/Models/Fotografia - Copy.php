<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Fotografia extends Model
{
    protected $table = 'fotografit';
    protected $primaryKey = 'id';
    protected $fillable = ['Fotografia_umfa', 'Fotografi_umfa', 'Kategoria_eFotografise_umfa'];
}
