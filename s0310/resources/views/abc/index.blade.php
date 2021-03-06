<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABC</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

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
  
<div class="container">
   <h2>index blade</h2>
   <div><a href="{{route('abcs.create')}}">單筆新增</a></div>
   <table class="table table-bordered">
      <thead>
         <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>  
         </tr>
      </thead>
      
      <tbody>
         @foreach($data as $oneData)
         <tr>
            <td>{{$oneData->id}}</td>
            <td>{{$oneData->name}}</td>
            <td>{{$oneData->email}}</td>
            
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
   {{-- @php
   dd($data);    
   @endphp --}}


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>