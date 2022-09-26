<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImcModel extends Model
{
    use HasFactory;

    public function getImc(){
        $peso = $_GET["peso"];
        $altura = $_GET["altura"] / 100.0;

        return round($peso / ($altura * $altura),2);
    }

    public function getImcTag(){
        $imc = $this->getImc();

        if ($imc < 16)
            return "Magreza grave";
        elseif ($imc < 17)
            return "Magreza moderada";
        elseif ($imc < 18.5)
            return "Magreza leve";
        elseif ($imc < 25)
            return "Saudável";
        elseif ($imc < 30)
            return "Sobrepeso";
        elseif ($imc < 35)
            return "Obesidade Grau I";
        elseif ($imc < 40)
            return "Obesidade Grau II";
        else
            return "Obesidade Grau III";
    }

    public function getTagColor(){
        $imc = $this->getImc();

        if ($imc < 16)
            return "orange";
        elseif ($imc < 17)
            return "lightsalmon";
        elseif ($imc < 18.5)
            return "lightseagreen";
        elseif ($imc < 25)
            return "limegreen";
        elseif ($imc < 30)
            return "coral";
        elseif ($imc < 35)
            return "orange";
        elseif ($imc < 40)
            return "orangered";
        else
            return "red";
        
    }

}
