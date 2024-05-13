@extends ('products.layout')

@section('content')

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                <button><a href="{{route('products.create')}}">Add New</a></button>
            </div>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $prd )
    
   
    <tr>
      <th scope="row">1</th>
      <td>
        <img src="images/{{$prd->image}}" alt="">
      </td>
      <td>{{$prd->name}}</td>
      <td>{{$prd->detail}}</td>
      <td>
        <form action="{{route('products.destroy',$prd->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button><a href="{{route('products.show',$prd->id)}}">View</a></button>
        <button><a href="{{route('products.edit',$prd->id)}}">Edit</a></button>
        <button><a href="">Delete</a></button>
        </form>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
        </div>
    </div>
</div>

@endsection
