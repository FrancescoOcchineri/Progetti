@extends('layouts.form')

@section('content')

<section class="intro">
  <div class="bg-image-vertical h-100" style="background-color: #DCAF76;
          background-image: url(https://e1.pxfuel.com/desktop-wallpaper/934/506/desktop-wallpaper-the-63-best-of-the-week-weight-room.jpg);
        ">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="card-body p-5">
              <a href="javascript:void(0);" onclick="history.back();"><i class="fa-solid fa-arrow-left fs-4 text-dark"></i></a>
                <h1 class="mb-5 text-center">Add Activity</h1>

                <form method="post" action="/activities">
                    @csrf
                  <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example1">Name</label>
                        <input name="name" type="text" id="form6Example1" class="form-control" />
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                      <div class="form-outline">
                      <label class="form-label" for="form6Example2">Time</label>
                        <input name="time" type="number" id="form6Example2" class="form-control"  min="1" max="4" />
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example7">Description</label>
                    <textarea name="description" class="form-control" id="form6Example7" rows="4"></textarea>   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form6Example7">Goal</label>
                    <textarea name="goal" class="form-control" id="form6Example7" rows="4"></textarea>   
                  </div>

                  <div class="form-outline mb-4">
                  <select name="day" class="form-select" id="exampleFormControlSelect1">
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                </select>
                  </div>

                  <div class="form-outline mb-4">
                  <select name="difficulty" class="form-select" id="exampleFormControlSelect1">
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                </select>
                  </div>

                  <div class="form-outline mb-4">
                  <select name="status" class="form-select" id="exampleFormControlSelect1">
                    <option value="Active">Active</option>
                </select>
                  </div>

                  <div class="form-outline mb-4">
                  <select name="course_id" class="form-select" id="exampleFormControlSelect1">
                    <option value="" disabled selected>Select Course</option>
                    @foreach($courses as $id => $courseName)
                        <option value="{{ $id }}">{{ $courseName }}</option>
                    @endforeach
                </select>
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

