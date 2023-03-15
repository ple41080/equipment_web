<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateGenerateIDrepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER id_store BEFORE INSERT ON repairs FOR EACH ROW
            BEGIN
                INSERT INTO repair_table_ids VALUES (NULL);
                SET NEW.repair_id = CONCAT("RE_", LPAD(LAST_INSERT_ID(), 5, "0"));
            END    
        ');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER "id_store"');
    }   
}
