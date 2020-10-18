<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>

    <style>
        table{
            border-collapse: collapse;
        }
        td{
            padding-left:1em ;
            padding-right:1em ;

        }
    </style>
</head>
<body>
    <h2>U okviru ove web aplikacije možete pristupiti sledećim endpoint-ima:</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Tip</th>
                <th>Adresa</th>
                <th>Opis</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>GET</td>
            <td><a href="localhost:8080/rest/api/novosti" target="_blank">localhost:8080/rest/novosti</a></td>
            <td>Prikazuje sve novosti u json formatu <br></td>
        </tr>
        <tr>
            <td>GET</td>
            <td><a href="localhost:8080/rest/api/novosti/@id" target="_blank">localhost:8080/rest/novosti/@id</a></td>
            <td>prikazuje jednu novost za unesen @id</td>
        </tr>
        <tr>
            <td>GET</td>
            <td><a href="localhost:8080/rest/api/kategorije" target="_blank">localhost:8080/rest/kategorije</a></td>
            <td>Prikazuje sve kategorije u json formatu</td>
        </tr>
        <tr>
            <td>GET</td>
            <td><a href="localhost:8080/rest/kategorije/@id" target="_blank">localhost:8080/rest/kategorije/@id</a></td>
            <td>prikazuje jednu kategoriju za unesen @id</td>
        </tr>
        <tr>
            <td>POST</td>
            <td>localhost:8080/rest/novosti</td>
            <td>Unosi jednu novost sa prosleđenim parametrima u json formatu u telu HTTP zahteva</td>
        </tr>
        <tr>
            <td>POST</td>
            <td>localhost:8080/rest/kategorije</td>
            <td>Unosi jednu kategoriju sa prosleđenim parametrima u json formatu u telu HTTP zahteva</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td>localhost:8080/rest/novosti/@id</td>
            <td>Ažurira novost sa prosleđenim parametrima u json formatu u telu HTTP zahteva, čiji je id @id</td>
        </tr>
        <tr>
            <td>PUT</td>
            <td>localhost:8080/rest/kategorije/@id</td>
            <td>Ažurira kategoriju sa prosleđenim parametrima u json formatu u telu HTTP zahteva, čiji je id @id</td>
        </tr>
        <tr>
            <td>DELETE</td>
            <td>localhost:8080/rest/novosti/@id</td>
            <td>Briše jednu novost čiji je id @id</td>
        </tr>
        <tr>
            <td>DELETE</td>
            <td>localhost:8080/rest/kategorije/@id</td>
            <td>Briše jednu kategoriju čiji je id @id</td>
        </tr>
        </tbody>
    </table>
</body>
</html>