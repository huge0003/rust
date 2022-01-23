<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Rusthoeve Database</title>
    <!-- bootstrap: https://getbootstrap.com/docs/5.0/forms/form-control/
                    https://getbootstrap.com/docs/4.0/components/navbar/?#forms
    -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">{{ $plants->name }}</h1>
        <p>hoi</p>

        <!-- Grid -->
        <div class="row"> <!-- Row: breadcrumbs and search -->
            <div class=col-8 style="background-color: ">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ URL::to('/') }}">BioBased Producten</a></li>
{{--                        <li class="breadcrumb-item active" aria-current="page">{{ $plants->name }}</li>--}}
                    </ol>
                </nav>
            </div>

            <div class=col style="background-color: ">
                <!-- Search -->
                <form class="row g-3" method="GET">
                    <div class="col-auto">
                        <input type="text" name="search" class="form-control mr-sm-2" required/>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Zoeken</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="row"> <!-- Row: Filter, Pagination and -->
            <div class="col-3" style="background-color: #F3F3F3;">
                <!-- Image  -->
            </div>
            <div class="col">

                <!-- Table with DB content -->
                <table class="table table-light">
                    <tbody>
                        <tr>
                            <th>Naam</th>
{{--                            <td>{{ $plants->name }}</td>--}}
                        </tr>
                        <tr>
                            <th>Type</th>
{{--                            <td>{{ $plants->type }}</td>--}}
                        </tr>
                        <tr>
                            <th>Ingrediënten</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Opmerkingen</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
</html>
