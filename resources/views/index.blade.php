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
        width: 400px;
        background-color: aliceblue;
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
    <form method="get" action="{{url('/resultado')}}"class="border formulario shadow rounded needs-validation" id="formulario" novalidate>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            Por favor insira o seu nome.
          </div>
        </div>
        <div class="mb-3">
          <label for="salario" class="form-label">Data de nascimento:</label>
          <input type="date"  class="form-control" id="salario" name="salario" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            Por favor insira o sua data de nascimento
          </div>
        </div>
        <div class="mb-3">
          <label type="number" min="0" step="0.1"  for="peso" class="form-label">Peso (KG):</label>
          <input class="form-control" id="peso" name="peso" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            Por favor insira o seu peso
          </div>
        </div>
        <div class="mb-3">
          <label for="altura" class="form-label">Altura (CM):</label>
          <input type="number" min="0" max="300" step="1" class="form-control" id="altura" name="altura" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            Por favor insira a sua altura
          </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Calcular">


    </form>
      
      <script>
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
      </script>
</body>
</html>