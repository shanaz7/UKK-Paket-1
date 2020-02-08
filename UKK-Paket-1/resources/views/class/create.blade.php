<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add new class</h3>
    <br>
    <form action="/class/store" method="post">
        {{ csrf_field() }}

        <label for="class_name">Class Name</label>
        <input type="text" name="class_name" placeholder="Insert Class Name">
        <br>
        <label for="expertise_competence">Expertise Competence</label>
        <input type="text" name="expertise_competence" placeholder="Insert Expertise Competence">
        <br>
        <input type="submit" value="Add">
    </form>
</body>
</html>