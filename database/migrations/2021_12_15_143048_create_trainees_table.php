<?php

use App\Models\Trainee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('school_education',100);
            $table->string('phone', 20);
            $table->string('email', 40);
            $table->timestamps();
        });

        $this->newTreinee('Ronaldo lima santos', 'Comércio Exterior', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Felipe santo morais', 'Comunicação Assistiva', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Eduardo Hugo Erick Fogaça', 'Comunicação Institucional', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Elaine Raquel Milena Freitas', 'Conservação e Restauro', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Sebastiana Laís da Costa', 'Design de Interiores', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Nina Ayla Sophia Pereira', 'Design de Moda', '6299037483748', 'maria@maria.com.br');
        $this->newTreinee('Liz Daiane Moura', 'Design de Produto', '6299037483748', 'maria@maria.com.br');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainees');
    }

    public function newTreinee($name, $school_education, $phone, $email)
    {
        $cad = new Trainee();
        $cad->name = $name;
        $cad->school_education = $school_education;
        $cad->phone = $phone;
        $cad->email = $email;
        $cad->save();
    }
}
