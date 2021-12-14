<?php

use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('last_name',100);
            $table->integer('age');
            $table->string('address', 200);
            $table->string('phone', 20);
            $table->string('email', 40);
            $table->boolean('is_donor');
            $table->timestamps();
        });

        $this->newPatient('Ronaldo', 'ramos net', 24, 'Rua santo lima qd 34 lt 03', '62999099090', 'maria@maria.com.br', 1);
        $this->newPatient('Felipe', 'soare lima', 12, 'Rua santo lima qd 34 lt 03', '62999099090', 'felipe@maria.com.br', 0);
        $this->newPatient('João', 'oliveira', 15, 'Rua santo lima qd 34 lt 03', '62999099090', 'romari@maria.com.br', 1);
        $this->newPatient('Matheus', 'santo', 24, 'Rua santo lima qd 34 lt 03', '62999099090', 'brenn@maria.com.br', 1);
        $this->newPatient('Vinicios', 'lima', 30, 'Rua santo lima qd 34 lt 03', '62999099090', 'maria4444@maria.com.br', 0);
        $this->newPatient('Maria', 'lima santo', 50, 'Rua santo lima qd 34 lt 03', '62999099090', 'mariacida@maria.com.br', 1);
        $this->newPatient('Guilherme', 'oliveira santo', 38, 'Rua santo lima qd 34 lt 03', '62999099090', 'jovenal@maria.com.br', 0);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }

    public function newPatient($name, $last_name, $age, $address, $phone, $email, $is_donor)
    {
        $cad = new patient();
        $cad->name = $name;
        $cad->last_name = $last_name;
        $cad->age = $age;
        $cad->address = $address;
        $cad->phone = $phone;
        $cad->email = $email;
        $cad->is_donor = $is_donor;
        $cad->save();
    }
}
