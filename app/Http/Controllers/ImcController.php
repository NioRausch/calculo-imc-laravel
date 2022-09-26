<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImcModel;

class ImcController extends Controller
{
    function index(){
        return view("index");
    }

    function resultado(){
        $ImcModel = new ImcModel();
        $imc = $ImcModel->getImc();
        $imc_tag = $ImcModel->getImcTag();
        $imc_tag_color = $ImcModel->getTagColor();

        return view("resultado", ["imc" => $imc, "imc_tag" => $imc_tag, "imc_tag_color" => $imc_tag_color]);
    }
}
