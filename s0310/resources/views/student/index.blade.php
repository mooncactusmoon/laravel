<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
   <h2>index blade</h2>
   <div><a href="{{route('students.create')}}">單筆新增</a></div>
   <table class="table table-bordered">
      <thead>
         <tr>
            <td>id</td>
            <td>name</td>
            <td>chinese</td>  
            <td>english</td>  
            <td>math</td>  
            <td>edit/del</td>  
         </tr>
      </thead>
      
      <tbody>
         @foreach($data as $oneData)
         <tr>
            <td>{{$oneData->id}}</td>
            <td>{{$oneData->name}}</td>
            <td>{{$oneData->chinese}}</td>
            <td>{{$oneData->english}}</td>
            <td>{{$oneData->math}}</td>
            <td>
               <a href="{{route('students.edit',['student'=>$oneData->id])}}">Edit</a>
            </td>
            
         </tr>
         @endforeach
      </tbody>
   </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>