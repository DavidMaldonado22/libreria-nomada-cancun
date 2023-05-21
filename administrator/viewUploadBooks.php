<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar libros a sistema</title>
</head>
<body>
    <form method="POST" action="uploadBooks.php" >
        <label for="title">Título</label>
        <input type="text" name="title">

        <label for="author">Autor</label>
        <input type="text" name="author">

        <label for="price">Precio</label>
        <input type="text" name="price">

        <label for="price">URL Image</label>
        <input type="text" name="urlImage">

        <label for="available">Available</label>
        <input type="checkbox" name="available">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>