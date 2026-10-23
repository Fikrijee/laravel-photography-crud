<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Fotografia extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_fotografite';
    protected $primaryKey = 'id';
    protected $fillable = ['Fotografia_umfa', 'Fotografi_umfa', 'Kategoria_eFotografise_umfa'];
	
}
