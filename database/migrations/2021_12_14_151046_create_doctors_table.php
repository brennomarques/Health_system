<?php

use App\Models\Doctor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('crm');
            $table->string('specialist');
            $table->integer('age');
            $table->string('phone');
            $table->string('email', 40);
            $table->timestamps();
        });

        $this->newPatient('Ronaldo lima santos', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Felipe santo morais', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Eduardo Hugo Erick Fogaça', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Elaine Raquel Milena Freitas', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Sebastiana Laís da Costa', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Nina Ayla Sophia Pereira', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');
        $this->newPatient('Liz Daiane Moura', 24967, 'Clinico geral', 49, '6299037483748', 'maria@maria.com.br');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }

    public function newPatient($name, $crm, $specialist, $age, $phone, $email)
    {
        $cad = new Doctor();
        $cad->name = $name;
        $cad->crm = $crm;
        $cad->specialist = $specialist;
        $cad->age = $age;
        $cad->phone = $phone;
        $cad->email = $email;
        $cad->save();
    }
}
