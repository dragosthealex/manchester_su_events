<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Admin @show</title>

    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{ asset('js/site.js') }}"></script>
    <script>
    //Global vars
      var urls = {
        home : "{{ url('/') }}"
      };
    </script>
    @yield('styles')
</head>
<body>
<div id="wrapper">
    @include('admin.partials.nav')
    <div id="page-wrapper">
        @yield('main')
    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('lib/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
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
<script src="{{ asset('js/global.js') }}"></script>
@yield('scripts')
</body>
</html>