<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Iniciar sesion</title>
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
    <main>
        <div class="d-flex flex-column justify-content-center align-items-center" style="height:100vh">

            <div class="d-flex justify-content-center align-items-center mb-2 ">
                <img src="./assets/img/log.png" width="100px" height="100px" />
            </div>
            <form id="form">
                <div style="display:flex; flex-direction:column; justify-content:center; align-items:center">
                    <div style="margin:5px auto; display:flex; justify-content:center; align-items:center; flex-direction:column">
                        <label for="usuario">Usuario</label>
                        <input class="form-control" type="text" name="usuario" id="usuario" />
                    </div>
                    <div style="margin:5px auto; display:flex; justify-content:center; align-items:center; flex-direction:column">
                        <label for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password" />
                    </div>
                    <button type="submit" id="btn" class="btn btn-primary mt-2" style="width:220px">Iniciar</button>
                </div>
            </form>
        </div>
    </main>
    <script src="./assets/js/index.js"></script>
</body>

</html>