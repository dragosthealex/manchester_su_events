<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Manchester Students' Union Events @show</title>
    @section('meta_keywords')
        <meta name="keywords" content=""/>
    @show @section('meta_author')
        <meta name="author" content=""/>
    @show @section('meta_description')
        <meta name="description"
              content=""/>
    @show

        <link href="{{ asset('lib/jquery-mobile/css/jquery.mobile.custom.structure.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/site.css') }}" rel="stylesheet">
        <link href="{{ asset('css/grayscale.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/vegas/vegas.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">

        <script src="{{ asset('js/site.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6Rs-_7jPF_N0N3c18VocHuhNNY2fvqN4"
            async defer></script>
        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '147310399038490',
              cookie     : true,
              oauth      : true,
              xfbml      : true,
              version    : 'v2.7'
            });

            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
        <script src="{{ asset('js/fb-login.js') }}"></script>
    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
@include('partials.nav')

@yield('content')
@include('partials.footer')

<!-- Scripts -->
<script src="{{ asset('lib/jquery-mobile/js/jquery.mobile.custom.min.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('lib/section-scroll/jquery.section-scroll.js') }}"></script>
<script src="{{ asset('js/grayscale.min.js') }}"></script>
<script src="{{ asset('lib/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('js/mixitup.min.js') }}"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script>
  $(document).ready(function() {
    @if(count(Notification::all()->all()))
      @foreach (Notification::all()->all() as $key => $notification)
        $.notify({
        message: "<?=$notification->getMessage()?>"
      }, {
        type: '{{$notification->getType()}}'
      });
    @endforeach
  @endif
  });
</script>
@yield('scripts')
<script src="{{ asset('js/global.js') }}"></script>
</body>
</html>
