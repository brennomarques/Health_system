<?php

use App\Models\BloodBank;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_banks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("type");
            $table->string("compatibility");
        });

        $this->newBloodBank('O+','O+|A+|B+');
        $this->newBloodBank('O-','O-|O+|A|A+|B|B+');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_banks');
    }

    public function newBloodBank($type, $compatibility)
    {
        $blood = new BloodBank();
        $blood->type = $type;
        $blood->compatibility = $compatibility;
        $blood->save();
    }
}
