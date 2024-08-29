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
</head>
<body>

            <!--  Header -->
<div class="container-fluid p-0">

</div>

@include("navbar")

@include('sidebar')



                                <!-- End Sidenav-->


                         <!-- BODY avec 8 colonnes-->
    <div class="col-9" style="text-align: center;">
        <div class="card">
            <div class="card-header bg-primary" style="color:white; font-size: 18px; font-weight:bold;text-align: center;">
                Les visites de nos clients
              </div>

              <div class="card-body">
                {{-- <p style="text-align: right;">
                  <button class="btn btn-success"> Ajouter un client </button>
                </p> --}}
                <br>
                <div style="width: 50%; float: right;text-align: center;">
                  <form class="d-flex" action="{{ route('visits.recherche') }}" method="GET">
                      <input class="form-control me-2" type="search" name="recherche" placeholder="Rechercher une visite" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Rechercher</button>
                  </form>
               </div>
               <br> <br>
           <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Client</th>
                        <th style="white-space: nowrap;">Date et Heure de la visite </th>
                        <th style="white-space: nowrap;">Objet de la visite</th>
                        <th style="white-space: nowrap;">Notes ou commentaires sur la visite</th>
                        <th colspan="2" style="white-space: nowrap;">Action </th>
                        {{-- <th colspan="2">Action </th> --}}

                    </tr>
                </thead>
                <tbody>
                    @foreach ($visits as $visit)
                        <tr>
                            <td>{{ $visit->client->nom }} {{$visit->client->prenom}}</td>
                            <td>{{ $visit->date_visite }}</td>
                            <td>{{ $visit->objet}}</td>
                            <td>{{ $visit->commentaire ? $visit->commentaire : '/' }}</td>

                         <td><form action="{{ route('visits.destroy', ['id' => $visit->id]) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" style="border: none;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg>
                          </button>
                      </form>
                      </td>



                            <td>
                              <a href="/visits/showVisits/{{ $visit->id }}">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="orange" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                              </a>
                            </td>

                            <!-- Ajoutez d'autres cellules ici -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
              <div class="pagination" style="float: right;">
                {{ $visits->links('vendor.pagination.bootstrap-5') }}
            </div>


              {{-- {{ $clients->onEachSide(1)->links('vendor.pagination.bootstrap-4') }} --}}

              {{-- <div class="d-flex justify-content-center">
                {{ $clients->links() }}
            </div> --}}
              <br>
                <br>
              </div>
    </div>
    </div>
    </div>
    </div>
    <br />
    <br>


    <br><br><br>

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
