
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agregamos el archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Crear curso</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center my-5">Crear curso</h1>
                <form>
                    <div class="form-group">
                        <label for="curso">Nombre del curso</label>
                        <input type="text" class="form-control" id="curso" placeholder="Ingresa el nombre del curso">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del curso</label>
                        <textarea class="form-control" id="descripcion" rows="3" placeholder="Ingresa una descripción breve del curso"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="instructor">Nombre del instructor</label>
                        <input type="text" class="form-control" id="instructor" placeholder="Ingresa el nombre del instructor">
                    </div>
                    <div class="form-group">
                        <label for="imagen">URL de la imagen del curso</label>
                        <input type="text" class="form-control" id="imagen" placeholder="Ingresa la URL de la imagen del curso">
                    </div>
                    <div class="form-group">
                        <label for="video">URL del video de presentación</label>
                        <input type="text" class="form-control" id="video" placeholder="Ingresa la URL del video de presentación">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear curso</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Agregamos los archivos JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>