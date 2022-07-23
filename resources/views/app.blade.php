
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- <title>{{ $title }}</title> -->
    <link rel="icon" href="./img/favicon.ico" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead

    <style>
      @import url('https://fonts.maateen.me/bangla/font.css');

      .bangla {
          font-family: 'Bangla', Arial, sans-serif !important;
      }
    </style>
  </head>
  <body>
    @inertia
  </body>
</html>