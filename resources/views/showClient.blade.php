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
                 <!-- Inclure Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Inclure Bootstrap JS (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un client</title>
</head>
<body>

            <!--  Header -->
<div class="container-fluid p-0">

    {{-- <img src = "img/fond2.jfif" style="auto;" > --}}
    {{-- <img src = "img/logo tech.png" style="width: auto;" > --}}
</div>
             <!-- End Header -->

            <!--   Navbar -->
            @include("navbar")
            <!--  End Navbar-->
            @if(session('success'))
            <div class="alert alert-success" style="text-align: center;">
                {{ session('success') }}
            </div>
        @endif
<!-- Sidenav & Body & Sidbar  -->
@include('sidebar')



                                <!-- End Sidenav-->


                         <!-- BODY avec 8 colonnes-->

    <div class="col-8">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                Modifier un client
              </div>
              <div class="card-body">


                <div class="container mt-5">
                    {{-- <h1 class="text-center">Ajouter un Client</h1> --}}
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('clients.update', ['id' => $clients->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $clients->id }}">
                                <div class="form-group">
                                    <label for="nom">Nom du Client</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required value="{{$clients->nom}}">
                                </div>
                                <div class="form-group">
                                  <label for="prenom">Prénom du Client</label>
                                  <input type="text" class="form-control" id="prenom" name="prenom" required value="{{$clients->prenom}}">
                              </div>
                                <div class="form-group">
                                    <label for="email">Adresse Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required value="{{$clients->email}}">
                                </div>
                                <div class="form-group">
                                  <label for="tel">Téléphone</label>
                                  <input type="tel" class="form-control" id="tel" name="tel" required value="{{$clients->tel}}">
                              </div>
                              <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" required value="{{$clients->adresse}}">
                            </div>
                            <div class="form-group">
                              <label for="profession">Profession</label>
                              <input type="text" class="form-control" id="profession" name="profession" required value="{{$clients->profession}}">
                          </div>
                          <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <input type="text" class="form-control" id="commentaire" name="commentaire" required value="{{$clients->nom}}">
                        </div>
                                <!-- Ajoutez d'autres champs ici si nécessaire -->
                                <br>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
              <br>



                {{-- <a href="#" class="btn btn-primary">Read More !</a> --}}
                <br> <br> <br>
              </div>
    </div>
    </div>
    </div>
    </div>
    <br />
    <br><br>
                                         <!-- End Body-->


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

