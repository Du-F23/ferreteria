<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Boostrap v5.0
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <!-- FoontAwesome v6 .0 -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{{url('assets/css/nucleo-icons.css')}}}" rel="stylesheet" />
    <link href="{{{url('assets/css/nucleo-svg.css')}}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{{url('assets/css/material-dashboard.css')}}}?v=3.0.0" rel="stylesheet" />

    <link rel="stylesheet" href="{!! asset('css/richtext.min.css') !!}">
    <script src="{!! asset('js/jquery-3.6.0.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.richtext.min.js') !!}"></script>
    <title>Laravel</title>
</head>
<body class="g-sidenav-show  bg-gray-200">



    @yield('content')

    @include('layouts/footer')



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

     <!--   Core JS Files   -->
  <script src={{{url('assets/js/core/popper.min.js')}}}></script>
  <script src={{{url('assets/js/core/bootstrap.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/perfect-scrollbar.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/smooth-scrollbar.min.js')}}}></script>
  <script src={{{url('assets/js/plugins/chartjs.min.js')}}}></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{{url('assets/js/material-dashboard.min.js?v=3.0.0')}}}"></script>
       {{-- Modal De Categorias --}}
       <script>
         /*SCRIP TOLTIP*/
         var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
         var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
         /*SCRIP Modal*/
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', function () {
          myInput.focus()
      })

</body>
</html>
