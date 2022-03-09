<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailPesanModel extends Model{
    protected $table      = 'detailpesan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_pesan','id_menu', 'jumlah', 'harga'];
    
}