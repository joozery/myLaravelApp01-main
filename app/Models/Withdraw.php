<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;

    // กำหนดตารางที่ใช้ในฐานข้อมูล
    protected $table = 'withdraws';

    // ระบุฟิลด์ที่สามารถถูกกรอกได้
    protected $fillable = [
        'item',
        'quantity',
    ];
}
