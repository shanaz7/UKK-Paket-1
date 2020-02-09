<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit Page</h3>
    <br>
    <form action="/class/update/{{ $class->id }}" method="post">
        {{ csrf_field() }}

        <label for="class_name">Class Name</label>
        <input type="text" name="class_name" value="{{ $class->class_name }}">
        <br>
        <label for="expertise_competence">Expertise Competence</label>
        <input type="text" name="expertise_competence" value="{{ $class->expertise_competence }}">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>