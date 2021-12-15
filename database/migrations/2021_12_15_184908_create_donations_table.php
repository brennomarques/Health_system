<?php

use App\Models\Donation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("phoneNumber");
            $table->string("email");
            $table->integer("liters");
        });

        $this->newDonations("Guilherme ","0000-00000","guilherme@gmail.com",20);
        $this->newDonations("Breno","1111-11111","breno@gmail.com",5);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }

    public function newDonations($name, $phoneNumber,$email,$liters)
    {
        $donation = new Donation();
        $donation->name = $name;
        $donation->phoneNumber = $phoneNumber;
        $donation->email = $email;
        $donation->liters = $liters;
        $donation->save();
    }
}
