<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Rdv</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('rdvs.index') }}>CRUDRdvs</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('rdvs.create') }}>Add Rdv</a>
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Rdv</h3>
                <form action="{{ route('rdvs.update', $rdv->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="dateRdv">Date du Rendez-vous</label>
                        <input type="date" class="form-control" id="dateRdv" name="dateRdv"
                            value="{{ $rdv->dateRdv }}" required>
                    </div>
                    <div class="form-group">
                        <label for="idEmploye">ID de l'Employé</label>
                        <input type="number" class="form-control" id="idEmploye" name="idEmploye"
                            value="{{ $rdv->idEmploye }}" required>
                    </div>
                    <div class="form-group">
                        <label for="idClient">ID du Client</label>
                        <input type="number" class="form-control" id="idClient" name="idClient"
                            value="{{ $rdv->idClient }}" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update Rdv</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
