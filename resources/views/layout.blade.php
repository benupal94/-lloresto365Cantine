<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@lloresto365Cantine-Amin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="wrapper">
          @include('layouts.navbars.sidebar')
          <div class="main-panel">
          @include('layouts.navbars.navs.auth')
            @yield('content')
          @include('layouts.footers.auth')
        </div>
      </div>
    </div>
  </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>