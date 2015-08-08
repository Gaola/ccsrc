<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingtopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingtopic', function(Blueprint $table)
        {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('topicname');
            $table->string('sthd');
            $table->string('stbd');
            $table->string('stpicurl');
            $table->string('sdhd');
            $table->string('sdbd');
            $table->string('sdpicurl');
            $table->string('tdhd');
            $table->string('tdbd');
            $table->string('tdpicurl');
            $table->integer('page_id');
            $table->integer('user_id');
            $table->timestamps();
            $table->softDeletes();

        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
