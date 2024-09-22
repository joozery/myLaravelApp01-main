<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->string('item'); // ฟิลด์สำหรับชื่อสินค้า
            $table->integer('quantity'); // ฟิลด์สำหรับจำนวนการเบิก
            $table->timestamps(); // ฟิลด์สำหรับบันทึกเวลาการสร้างและแก้ไขข้อมูล
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraws');
    }
}
