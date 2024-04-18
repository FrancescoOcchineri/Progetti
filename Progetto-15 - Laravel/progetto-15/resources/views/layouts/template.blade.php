<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fitness Forge</title>
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"/>
<style>
    @media (min-width: 992px) {
    #introCarousel {
        margin-top: -58.59px;
    }
    }

    .navbar .nav-link {
    color: #fff !important;
    }

    body {
      background-color: #101010;
    }

 </style>   
    </head>
    <html>
    <body class="antialiased">
   @component('components.nav-bar')
   @endcomponent

   @yield('content')

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
</body>
</html>