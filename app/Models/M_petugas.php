<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_petugas extends Model{
    protected $table = 'petugas';
    protected $allowedFields = ['username','password','nama_petugas','level'];
}