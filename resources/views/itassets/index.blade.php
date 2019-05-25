@extends('itassets.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>IT Assets Directory Application</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('itassets.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($itassets as $itasset)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $itasset->name }}</td>
            <td>{{ $itasset->detail }}</td>
            <td>
                <form action="{{ route('itassets.destroy',$itasset->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('itassets.show',$itasset->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('itassets.edit',$itasset->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $itassets->links() !!}
      
@endsection