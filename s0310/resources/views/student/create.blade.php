<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>單筆新增</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <h3>單筆新增</h3>
     <form action="{{route('students.store')}}" method="post">
     {{-- <form action="http://localhost/abcs_get_form" method="get"> --}}
      @csrf
      {{-- <input type="hidden" name="_token" value="123"> --}}
      {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
      <table class="table table-striped">
         <thead>
            <tr>
               <th>姓名</th>
               <th>國文</th>
               <th>數學</th>
               <th>英文</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td><input type="text" name="name" id="name"></td>
               <td><input type="text" name="chinese" id="chinese"></td>
               <td><input type="text" name="math" id="math"></td>
               <td><input type="text" name="english" id="english"></td>
            </tr>
         </tbody>
         
      </table>
      <input type="submit" value="送出">
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>