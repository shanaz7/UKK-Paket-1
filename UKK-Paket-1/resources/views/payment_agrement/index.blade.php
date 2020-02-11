<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Agrement page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h3>Payment agrament data list</h3>
    <br>
    <a href="/payment-agrement/create">Add new payment agrement</a>
   <br>
    <table class="table">
        <thead>
            <tr>
                <th>Year</th>
                <th>Nominal</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payment_agrement as $pa)
            <tr>
                <td>{{ $pa->year }}</td>
                <td>{{ $pa->nominal }}</td>
                <td>
                    <a href="/payment-agrement/edit/{{ $pa->id }}" class="btn btn-warning">Edit</a>
                    <a href="/payment-agrement/delete/{{ $pa->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>