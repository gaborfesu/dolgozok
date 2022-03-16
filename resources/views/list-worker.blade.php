<!DOCTYPE html>
<html lang="hu">
 
<head>
  <title>Dolgozok</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 
<body>
<div class="container">
  <h2>Dolgozok lista</h2>
 
  <table class="table">
    <thead>
      <tr>
        <th>Név</th>
        <th>Város</th>
        <th>Születés</th>
        <th>Fizetés</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $workers as $worker )
            <tr>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->city }}</td>
                <td>{{ $worker->born }}</td>
                <td>{{ $worker->salary }}</td>
                <td>
                    <a class="btn btn-primary" href="/delete/{{ $worker->id }}">Törlés</a>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
</div>
 
</body>
</html>