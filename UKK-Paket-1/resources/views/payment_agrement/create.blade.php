<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Add new data</h3>
    <br>
    <form action="/payment-agrement/store" method="post">
    {{ csrf_field() }}

        <label for="year">year</label>
        <input type="text" name="year" placeholder="Insert Current Year">
        <br>
        <label for="nominal">Nominal</label>
        <input type="text" name="nominal" placeholder="Insert Current Nominal">
        <br>
        <input type="submit" value="Add">
    </form>
</body>
</html>