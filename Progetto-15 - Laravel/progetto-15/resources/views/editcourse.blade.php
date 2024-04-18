@extends('layouts.form')

@section('content')

<section class="intro">
  <div class="bg-image-vertical h-100" style="background-color: #C05A3C;
          background-image: url(https://wallpapercave.com/wp/wp8834026.jpg);
        ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-body p-5">
                <a href="/courses"><i class="fa-solid fa-arrow-left fs-4 text-dark"></i></a>
                <h1 class="mb-5 text-center">Edit Course</h1>
                <form method="post" action="/courses/{{$course->id}}">
                    @csrf
                    @method('PATCH')
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example1">Name</label>
                        <input name="name" type="text" id="form6Example1" class="form-control" value="{{$course->name}}" />
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example2">Room</label>
                        <input name="room" type="number" id="form6Example2" class="form-control"  min="1" max="10" value="{{$course->room}}" />
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                  <select name="instructor_id" class="form-select" id="exampleFormControlSelect1">
                    @foreach($instructors as $instructor)
                        <option value="{{ $instructor->id }}" {{ $course->instructor_id == $instructor->id ? 'selected' : '' }}>{{ $instructor->name }}</option>
                    @endforeach
                </select>

                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example3">Start Date</label>
                  <input name="start_date" type="date" id="form6Example3" class="form-control" value="{{ date('Y-m-d', strtotime($course->start_date)) }}" />
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example4">End Date</label>
                  <input name="end_date" type="date" id="form6Example4" class="form-control" value="{{ date('Y-m-d', strtotime($course->end_date)) }}" />                   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example7">Description</label>
                    <textarea name="description" class="form-control" id="form6Example7" rows="4">{{$course->description}}</textarea>   
                  </div>

                  <button type="submit" class="btn btn-dark rounded-5 btn-block" style="width: 100%;">Add</button>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

