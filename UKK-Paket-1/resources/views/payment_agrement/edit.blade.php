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
    <form action="/payment-agrement/update/{{ $payment_agrement->id }}" method="post">
        {{ csrf_field() }}

        <label for="year">Year</label>
        <input type="text" name="year" value="{{ $payment_agrement->year }}">
        <br>
        <label for="nominal">Nominal</label>
        <input type="text" name="nominal" value="{{ $payment_agrement->nominal }}">
        <br>
        <input type="submit" value="Save">
    </form>
</body>
</html>