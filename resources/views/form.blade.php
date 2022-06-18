<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @if(session::has('reg'))
    {{session::  get('reg')}}
    @endif
  
      <Form action="{{url ('/')}}/login" method="post" enctype="multipart/form-data">
        @csrf
      <!-- @php
      print_r($errors->all());
      @endphp -->
      <div class="container">
        <h1 class="text-center text-danger ">Registraion and Validation Form </h1>
      <div class="form-group">
        <label for="">username</label>
        <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
       <span class="text-danger">
         @error('username')
         {{$message}}

         @enderror
       </span>
      </div>
      <div class="form-group">
        <label for="">email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span  class="text-danger">
          <!-- validation  -->
         @error('email')   
         {{$message}}

         @enderror
       </span>
      </div>
      <div class="form-group">
        <label for="">password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
        <span  class="text-danger">
         @error('password')
         {{$message}}

         @enderror
       </span>
       <br>

       <div class="form-group">
        <label >Upload File </label>
        <input type="file" name="image" >
       
      </div>
      <input type="submit" value="submit">
      </div>
      </Form>
</body>
</html>