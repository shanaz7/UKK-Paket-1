<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h3>Class data list</h3>
    <br>
    <a href="/class/create">Add new class</a>
   <br>
    <table class="table">
        <thead>
            <tr>
                <th>Class Name</th>
                <th>Expertise Competence</th>
            </tr>
        </thead>
        <tbody>
            @foreach($class as $c)
            <tr>
                <td>{{ $c->class_name }}</td>
                <td>{{ $c->expertise_competence }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>