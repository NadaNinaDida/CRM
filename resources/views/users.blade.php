<!DOCTYPE html>
<html lang="en">
<head>


                 <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <script src=" {{ url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
                 <!-- END additional CSS -->
                 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Inclure Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Inclure Bootstrap JS (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-client</title>
    @notifyCss
</head>
<body>

            <!--  Header -->
<div class="container-fluid p-0">
    {{-- <h6>ici c'est une notification</h6> --}}
    {{-- <x-notify::notify />
    @notifyJs --}}
</div>

         @include("navbar")
              @include('sidebar')



                                <!-- End Sidenav-->



                         <!-- BODY avec 8 colonnes-->
    <div class="col-9" style="text-align: center;">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                Les utilisateurs
              </div>


              <div class="card-body">

                {{-- <p style="text-align: right;">
                  <button class="btn btn-success"> Ajouter un client </button>
                </p> --}}
                <br>
             {{-- <div style="width: 50%; float: right;text-align: center;">
                <form class="d-flex" action="{{ route('recherche') }}" method="GET">
                    <input class="form-control me-2" type="search" name="recherche" placeholder="Rechercher un client" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
             </div> --}}
                <br> <br>
          <div class="table-responsive">

            <table class="table">
                <thead>
                    <tr>
                        <th style="white-space: nowrap;">Nom complet</th>
                        <th style="white-space: nowrap;">Email</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                      </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

              <br>
                <br>
              </div>
    </div>
    </div>
    </div>
    </div>
    <br />




 <div class = "container-fluid p-0" >
 <div class ="row" style = "margin-top: 20px;">
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            {{-- <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p> --}}
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">

            <!-- Email input -->
            {{-- <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div> --}}
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            {{-- <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button> --}}
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->
  </div>

  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Copyright:
    <a class="text-white" href="https://techsysmedia-dz.com//">techsysmedia-dz.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>



</body>
</html>
