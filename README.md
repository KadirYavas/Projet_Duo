
Table name: Entreprises  Migration File: 2020_03_12_000000_create_Entreprises_table.php

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Entreprises';

    /**
     * Run the migrations.
     * @table Entreprises
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom', 45);
            $table->string('Nb_employe', 45)->nullable();
            $table->string('logo', 45)->nullable();
            $table->integer('Roles_id');

            $table->index(["Roles_id"], 'fk_Entreprises_Roles1_idx');


            $table->foreign('Roles_id', 'fk_Entreprises_Roles1_idx')
                ->references('id')->on('Roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}



