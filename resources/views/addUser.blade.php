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
    <title>Ajouter un client</title>
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
                Ajouter un utilisateur
              </div>
              <div class="card-body">


                <div class="container mt-7">
                    {{-- <h1 class="text-center">Ajouter un Client</h1> --}}
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form method="POST" action="{{ route('regester.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nom complet <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" id="nom" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email<span style="color: red;">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe<span style="color: red;">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirmation de mot de passe<span style="color: red;">*</span></label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                <input type="submit" name="regester" value="Enregistrer" class="btn btn-success">
                                <input type="reset" name="annuler" value="Annuler" class="btn btn-danger">
                                <!-- Name -->
                                {{-- <div>
                                    <x-input-label for="" :value="__('')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div> --}}

                                <!-- Email Address -->
                                {{-- <div class="mt-4">
                                    <x-input-label for="" :value="__('')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div> --}}



                                <!-- Confirm Password -->
                                {{-- <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div> --}}

                                {{-- <div class="flex items-center justify-end mt-4">


                                    <x-primary-button class="ml-4">
                                        {{ __('Enregistrer') }}
                                    </x-primary-button>
                                </div> --}}
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


