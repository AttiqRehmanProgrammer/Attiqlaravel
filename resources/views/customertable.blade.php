<!doctype html>
<html lang="en">
  <head>
    <title>viewpage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <br>
      <br>
  <form action="" >

  <div class="div">
  <div class="col-sm-10">
      <input type="search" class="form-control" id="inputEmail3"  name="search" placeholder="search"  value="search">
    <button>search</button>
    <button>rest</button>
    </div>
</div>
  </form>
    <div class="container">
<table class="table" >

    <thead>
        <tr>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($show as $Customer)
            <th>{{$Customer->username}}</th>
            <th>{{$Customer->email}}</th>
            <th>{{$Customer->password}}</th>
            <th>
                @if($Customer->status =="1")
                
                 <a herf="">
            <span class="badge badge-success">Active</span>

                   </a>
                @else
                
                <a herf="">
            <span class="badge badge-danger">inactive</span>

                   </a>
                
                @endif
            </th>
            <th>
            </div>
    <a href="{{url('/customer/delete')}}/{{$Customer->id}}">

<button class="btn btn-danger">delete</button>

</a>


<!-- <a href="{{route('customer.edit',['id'=> $Customer->id])}}"> -->
    <a href="{{url('/customer/edit')}}/{{$Customer->id}}">

<button class="btn btn-success">Edit</button>

</a>
            
            </th>
        </tr>
        
        @endforeach    
</table>

    </div>
    <a href="{{url('/customer')}}">
<button>Add</button>

</a>
 <div class="">
{{$show->links()}}
 </div>
</body>
</html>