@extends('admin.admin_master')
@section('admin-content')
   
   <!-- DataTales Example -->
   <div class="row">
       <div class="col-lg-12 ">
        @if (Session('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{Session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">RoomType</h6>
        <a href="{{route('roomtype.create')}}" class="btn btn-success float-right">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($roomType as $roomT)
                        <td>{{$roomT->id}}</td>
                        <td>{{$roomT->title}}</td>
                        <td>
                            <a href="{{route('roomtype.show',$roomT->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{route('roomtype.edit',$roomT->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <form class="d-inline" action="{{route('roomtype.destroy',$roomT->id)}}" method="POST">
                                @csrf
                                @method('delete')
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                        </td>
                        
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
