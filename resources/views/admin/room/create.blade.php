@extends('admin.admin_master')
@section('admin-content')
   
   <!-- DataTales Example -->
   <div class="row">
       <div class="col-lg-12 ">
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Room </h6>
    </div>
    <div class="card-body">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <form action="{{route('room.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="" class="form-control" placeholder="Title" >
                     @error('title')
                       <p class="text-danger mt-2">{{$message}}</p>  
                     @enderror
                    </div>
                    <div class="form-group">
                        <label for="roomType_id">Select  Room Type</label>
                          <select name="roomType_id" id="roomType_id" class="form-control">
                              <option value="0">------- Select -------</option>
                              @foreach ( $roomTypes as $room)
                                  <option value="{{$room->id}}">{{$room->title}}</option>
                              @endforeach
                          </select>
                    
                      </div>
                    
                      <button type="submit" class="btn btn-success">Create_Room</button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
@endsection
