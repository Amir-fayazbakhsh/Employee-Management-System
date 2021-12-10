<!DOCTYPE html>
<html lang="en">
  {{View::make('layout.head')}}

  <body>

    {{-- ///navbar top --}}
    {{View::make('layout.navbar')}}
    {{-- ///navbar top --}}
    {{-- ///navbar top --}}
    {{View::make('layout.sidebar')}}
    {{-- ///navbar top --}}

    {{-- ///content --}}
    @yield('content')
    {{-- ///content --}}




    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
<footer>
  <p class="text-center">footer is here</p>
</footer>
</html>