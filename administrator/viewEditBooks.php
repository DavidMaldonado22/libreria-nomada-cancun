<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libros</title>
</head>

<body>
    <h1>Lista de Libros</h1>
    <table id="lista">
        <tr>
            <th>Numero Libro</th>
            <th>ISBN</th>
            <th>Título</Th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Disponible</th>
            <th>Editar</th>
        </tr>
        <script>
            function getBooks() {

                const XHR = new XMLHttpRequest();
                XHR.open('POST', 'returnAllbooks.php', true);
                XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                //XHR.send('value=' + 1);
                XHR.send();
                XHR.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        let serverResponse = JSON.parse(this.responseText);
                        for (let row of serverResponse) {
                            document.getElementById('lista').innerHTML +=
                               `
                                    <tr>
                                        <td>${row.id}</td>
                                        <td>${row.isbn}</td>
                                        <td>${row.title}</td>
                                        <td>${row.author}</td>
                                        <td>${row.price}</td>
                                        <td>foto</td>
                                        <td>${row.available}</td>
                                        <td>
                                            <a href="#" onclick="availableUnAvailable(1,'${row.isbn}')">Activar</a>
                                            <a href="#" onclick="availableUnAvailable(0,'${row.isbn}')">Desactivar</a>
                                        </td>
                                    </tr>
                     
                                `
                        }
                    }

                }
            }
            new getBooks();
            function availableUnAvailable(state, isbn){
                const XHR = new XMLHttpRequest();
                XHR.open('POST', 'updateBooks.php', true);
                XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                XHR.send('state=' + state + "&isbn=" + isbn);
                XHR.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                    }

                }
                
            };
            
        </script>

    </table>
</body>

</html>