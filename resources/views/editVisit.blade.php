<!DOCTYPE html>
<html lang="en">
<head>


                 <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
    <script src=" {{ url('js/bootstrap.bundle.min.js')}}" ></script>
                  <!-- END Bootstrap -->

                  <!-- additional  CSS  -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
      <!-- Inclure Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Inclure Bootstrap JS (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
           <!-- END additional CSS -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une visite</title>
</head>
<body>

            <!--  Header -->
<div class="container-fluid p-0">

    {{-- <img src = "img/fond2.jfif" style="auto;" > --}}
    {{-- <img src = "img/logo tech.png" style="width: auto;" > --}}
</div>
             <!-- End Header -->

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

    <div class="col-8" style="text-align: center;">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;">
                Ajouter une visite
              </div>
              <div class="card-body">


                <div class="container mt-7">
                    {{-- <h1 class="text-center">Ajouter un Client</h1> --}}
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action="{{ route('visit.update',['id' => $visit->id]) }}" method="POST">
                                @csrf
                                <div>
                                    <label for="client"><strong> Séléctionner un Client</strong> <span style="color: red;">*</span></label>

                                    {{-- <select name="client_id" id="client_id" class="form-control">
                                        <option value="null" disabled>Séléctionner un client</option>
                                        @foreach($clients as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select> --}}
                                    <select name="client_id" id="client_id" class="form-control">
                                        <option value="null" disabled>Sélectionner un client</option>
                                        @foreach($clients as $id => $name)
                                            <option value="{{ $id }}" {{ $id == $visit->client_id ? 'selected' : '' }}>{{ $name }}</option>
                                        @endforeach
                                    </select>



                                </div>
                                <div class="form-group">
                                    <label for="datev">La date et l'heure de la visite <span style="color: red;">*</span> </label>
                                    <input type="datetime-local" class="form-control" id="datev" name="datev" required value="{{$visit->date_visite}}">
                                </div>
                                <div class="form-group">
                                  <label for="objet">Objet de la visite <span style="color: red;">*</span></label>
                                  <input type="text" class="form-control" id="objet" name="objet" required value="{{$visit->objet}}">
                              </div>
                                <div class="form-group">
                                    <label for="comment">Notes ou commentaires sur la visite</label>
                                    <textarea class="form-control" name="commentaires" rows="3">{{$visit->commentaire}}</textarea>
                                    {{-- <input type="text" class="form-control" id="comment" name="commentaires" value="{{$visit->commentaire}}"> --}}
                                </div>

                          {{-- <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <input type="text" class="form-control" id="commentaire" name="commentaire" required>
                        </div> --}}
                                <!-- Ajoutez d'autres champs ici si nécessaire -->
                                <br>
                                <button type="submit" class="btn btn-primary">Modifier</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>
                            </form>
                        </div>
                    </div>
                </div>
              <br>



                {{-- <a href="#" class="btn btn-primary">Read More !</a> --}}
                {{-- <br> <br> <br> --}}
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


