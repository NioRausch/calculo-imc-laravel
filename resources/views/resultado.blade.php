<!DOCTYPE html>
<html lang="
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
      body,html{
        height: 100%;
      }

      body {
        font-family: 'Nunito', sans-serif;
        display: flex;
        background-color: #0093E9;
background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);

      }

      .formulario {
        margin: auto;
        padding: 15px;
        width: 500px;
        background-color: aliceblue;
        text-align: center;
      }

      #alert {
        margin-top: 15px;
      }

      #alertP {
        margin-top: 15px;
        margin-bottom: 15px;
      }
    </style>

  </head>
<body>
    <div class="border formulario shadow rounded needs-validation"> 
        <h1>Seu <b>IMC</b> é de <b style="color:{{$imc_tag_color}};">{{$imc}}</b></h1>
        <br>
        <h2>Você está <b style="color:{{$imc_tag_color}};">{{$imc_tag}}</b></h2>
    </div>
</body>
</html>