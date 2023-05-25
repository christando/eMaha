<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body>
      <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 bg-dark py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> USER
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">
                        <div class="media">
                            <img class="align-self-center mr-2" src="data:image/png;base64,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" alt="Generic placeholder image">
                            <div class="media-body">
                              <h5 class="mt-3">Valentino Raviendra Christando</h5>
                              <small>
                                <i class="bi bi-brightness-high-fill"></i> selamat siang...
                              </small>
                            </div>
                          </div>
                      </a>
                      <a class="dropdown-item border-top" href="#"><i class="bi bi-gear"></i> setting</a>
                      <a class="dropdown-item border-top" href="#"><i class="bi bi-box-arrow-right"></i></i> Logout</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row vh-100">
            <div class="col-md-2 border">
                <!-- NAVIGASI -->
                @include('layouts.navigasi')
            </div>
            <div class="col-md-10">
                
                        <!-- KONTEN DINAMIS-->
                        @yield('content')

            </div>
        </div>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>