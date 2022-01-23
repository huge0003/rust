<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Rusthoeve Database</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript" class="js-code-example-basic-single">
        $(document).ready(function () {
            $('.select2-search-controller').select2({
                width: 'resolve'
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".js-example-basic-multiple-limit").select2({
                maximumSelectionLength: 1
            });
        });
    </script>
    <!-- bootstrap: https://getbootstrap.com/docs/5.0/forms/form-control/
                    https://getbootstrap.com/docs/4.0/components/navbar/?#forms
    -->
</head>
<body>
<div class="container">
    <h1 class="text-center">BioBased Producten</h1>
    <!-- Grid -->
    <div class="row"> <!-- Row: breadcrumbs and search -->
        <div class=col-8 style="background-color: ">
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">BioBased Producten</li>
                </ol>
            </nav> -->
        </div>

        <div class="col" style="background-color: ">
            <!-- Search -->
            <form class="row g-3" method="GET">
                <div class="col">
                    <select class="js-example-basic-multiple-limit" style="width: 100%" name="search"
                            multiple="multiple">

                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Zoeken</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row"> <!-- Row: Filter, Pagination and -->
        <div class="col-3" style="background-color: #F3F3F3;">

            <!-- Filter type -->
            <div class="Filter">
                <h3>Filter</h3>
                <br>
                <h5>Type</h5>
                <form>
                    <select name="type" class="form-select select2-search-controller custom-select"> <!-- hardcoded -->
                        <option value="" selected disabled hidden></option>
                        <option value="Vezelgewassen"
{{--                                @if(isset($data['type']) && $data['type'] == 'Vezelgewassen') selected @endif>--}}
                            Vezelgewassen
                        </option>
                        <option value="Oliehoudend"
{{--                                @if(isset($data['type']) && $data['type'] == 'Oliehoudend') selected @endif>Oliehoudend--}}
                        </option>
                        <option value="Knolgewassen"
{{--                                @if(isset($data['type']) && $data['type'] == 'Knolgewassen') selected @endif>--}}
                            Knolgewassen
                        </option>
                        <option value="Veevoer"
{{--                                @if(isset($data['type']) && $data['type'] == 'Veevoer') selected @endif>Veevoer--}}
                        </option>
                        <option value="Biociden"
{{--                                @if(isset($data['type']) && $data['type'] == 'Biociden') selected @endif>Biociden--}}
                        </option>
                        <option value="Newfood"
{{--                                @if(isset($data['type']) && $data['type'] == 'Newfood') selected @endif>Newfood--}}
                        </option>
                        <option value="Kleurstoffen"
{{--                                @if(isset($data['type']) && $data['type'] == 'Kleurstoffen') selected @endif>--}}
                            Kleurstoffen
                        </option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Filter</button>
                    <button type="reset" class="btn btn-secondary mt-2" onclick="location.href='/'">Reset filters</button>
                </form>

            </div>


        </div>
        <div class="col-9">
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Table with DB content -->
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Type</th>
                </tr>
                </thead>
                <tbody>
{{--                @foreach($filter_plants as $plant)--}}
                    <tr>
{{--                    <!-- <td>{{ $plant->name }}</td> -->--}}
{{--                        <td><a href="{{URL::to("/show/".$plant->id)}}">{{ $plant->name }}</a></td>--}}
{{--                        <td>{{ $plant->type }}</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
</body>
</html>
