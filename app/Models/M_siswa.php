<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_siswa extends Model{
    protected $table = 'siswa';
    protected $allowedFields = ['nisn','nis','nama','id_kelas','alamat','no_telp', 'id_spp'];
}