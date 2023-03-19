<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->integer('patient_id')->unsigned();
            $table->double('bp')->nullable();
            $table->enum('sg', [1.005, 1.010, 1.015, 1.020, 1.025])->nullable();
            $table->enum('al', [0, 1, 2, 3, 4, 5])->nullable();
            $table->enum('su', [0, 1, 2, 3, 4, 5])->nullable();
            $table->enum('rbc', ['normal', 'abnormal'])->nullable();
            $table->enum('pc', ['normal', 'abnormal'])->nullable();
            $table->enum('pcc', ['present', 'not_present'])->nullable();
            $table->enum('ba', ['present', 'not_present'])->nullable();
            $table->double('bgr')->nullable();
            $table->double('bu')->nullable();
            $table->double('sc')->nullable();
            $table->double('sod')->nullable();
            $table->double('pot')->nullable();
            $table->double('hemo')->nullable();
            $table->double('packed_cell_volumne')->nullable();
            $table->double('wc')->nullable();
            $table->double('rc')->nullable();
            $table->enum('htn', ['yes', 'no'])->nullable();
            $table->enum('dm', ['yes', 'no'])->nullable();
            $table->enum('cad', ['yes', 'no'])->nullable();
            $table->enum('appet', ['good', 'poor'])->nullable();
            $table->enum('pe', ['yes', 'no'])->nullable();
            $table->enum('ane', ['yes', 'no'])->nullable();
            $table->enum('class', ['ckd', 'not_ckd'])->nullable();
            $table->foreign('patient_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analyses');
    }
};
