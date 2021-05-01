<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <table class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPAÑIA</th>
                        <th>NIT</th>
                        <th>DIRECCION</th>
                        <th>LOGO</th>
                    </tr>
                </thead>

                <tboddy>
                @foreach($companies as $companie)
                    <tr>
                        <td>{{ $companie->id }}</td>
                        <td>{{ $companie->name }}</td>
                        <td>{{ $companie->nit }}</td>
                        <td>{{ $companie->addres }}</td>
                        <td>{{ $companie->logo }}</td>
                    </tr>
                    @endforeach
                </tboddy>

            </table>
            {{ $companies->links() }}
        </div>
    </div>
</div>
</body>
</html>
