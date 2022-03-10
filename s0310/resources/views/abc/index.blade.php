<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABC</title>
</head>
<body>
   {{-- @isset($data['message'])
      <h3>message</h3>
   @endif

   @empty(!$data['message'])
      <h3>message :>>></h3>
   @endif


   @switch($data['name'])
    @case('Moon')
         hello {{$date['name']}}
        @break
 
    @default
         hello,朋友
   @endswitch --}}

   <hr>


   {{-- hello ABC :> <br> 
   hello {{$data['name']}} <br>
   id :{{$data['id']}} <br>
   chinese :{{$data['chinese']}} <br>
   math :{{$data['math']}} <br>
   english :{{$data['english']}} <br>
   sum : {{$data['sum']}} <br>
   avg : {{$data['avg']}} <br> --}}
  
   <a href="{{route('abcs.create')}}">單筆新增</a>
</body>
</html>