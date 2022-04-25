<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'arial'
        }

        .input {
            padding: 10px;
            border-radius: 100em;
            border: 2px solid rgba(0, 0, 0, 0.2);
            outline: none;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Inicio
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="d-flex justify-content-center align-items-center mt-2" style="width:80%; margin:auto">

            <form id="form">
                <div class="mt-3">
                    <label for="numero" class="form-label">Numero de telefono</label>
                    <input type="text" id="numero" class="form-control" placeholder="..." />
                </div>
                <div class="mt-3">
                    <label for="formFile" class="form-label">Registro de llamadas</label>
                    <input class="form-control" type="file" id="formFile" accept="xlsx">
                </div>
                <button type="submit" class="btn btn-dark mt-2">Enviar</button>
            </form>
        </div>
    </main>
    <script src="./assets/js/dashboard.js"></script>
</body>

</html>