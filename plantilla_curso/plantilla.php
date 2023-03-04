<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

</body>
</html>