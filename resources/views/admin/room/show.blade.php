@extends('admin.admin_master')
@section('admin-content')
   
   <!-- DataTales Example -->
   <div class="row">
       <div class="col-lg-12 ">
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">View Room </h6>
        <a href="{{route('room.index')}}" class="btn btn-success float-right">View All</a>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
               <table class="table table-bordered">
                       <tr>
                        <th>Title</th>
                        <td>{{ $room->title}}</td>
                    </tr>
                    <tr>
                        <th>Room Type</th>
                        <td>{{ $room->roomType->title}}</td>
                    </tr>
                       
                   
               </table>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
