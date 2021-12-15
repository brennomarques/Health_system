<?php

use App\Models\Donor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('phone', 20);
            $table->string('email', 40);
            $table->string('Weight', 40);
            $table->float('height', 8, 2);
            $table->boolean('smoker');
            $table->boolean('disease');
            $table->text('note',255);
            $table->timestamps();
        });

        $this->newDonor('Ronaldo lima santos', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, true, false, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Felipe santo morais', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, false, false, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Eduardo Hugo Erick Fogaça', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, true, true, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Elaine Raquel Milena Freitas', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, true, false, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Sebastiana Laís da Costa', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, false, false, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Nina Ayla Sophia Pereira', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, true, true, 'Doador não contém o minimo de massa muscular' );
        $this->newDonor('Liz Daiane Moura', '6299037483748', 'maria@maria.com.br', '85kg', 1.70, true, false, 'Doador não contém o minimo de massa muscular' );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }

    public function newDonor($name, $phone, $email, $Weight, $height, $smoker, $disease, $note)
    {
        $cad = new Donor();
        $cad->name = $name;
        $cad->phone = $phone;
        $cad->email = $email;
        $cad->Weight = $Weight;
        $cad->height = $height;
        $cad->smoker = $smoker;
        $cad->disease = $disease;
        $cad->note = $note;
        $cad->save();
    }
}
