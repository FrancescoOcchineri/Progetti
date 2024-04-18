@extends('layouts.template')

@section('content')

<div class="p-5 text-center bg-image" style="
      background-image: url('https://img.freepik.com/free-psd/fitness-items-background_23-2150154416.jpg?w=1800&t=st=1710860265~exp=1710860865~hmac=33026a9ef564884ee8a3a373a77fc5f5a1e736f774dfa8e56339cb89ce232f6c');
      height: 500px;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3" style="font-size: 5rem;">Discover our courses</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 550px;">
    <section class="text-center">
    @if(auth()->check() && (auth()->user()->role == 'Admin' || auth()->user()->role == 'Instructor'))
        <div class="text-start mb-4">
            <a href="/courses/create" class="btn btn btn-light fw-bold">Add Course</a>
        </div>
        @endif
        <div class="row g-5 justify-content-center"> 
            @if($courses->isNotEmpty())
                @foreach($courses as $course) 
                <div class="col-lg-3 col-md-5 mb-4"> 
                    <div class="card h-100" style="width: 20rem;"> 
                        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <img src="https://img.freepik.com/free-photo/dumbbells-floor-gym-ai-generative_123827-23744.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-header"><span class="badge badge-primary">{{$course->instructors->name}}</span></div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="mb-5">
                                <h5 class="card-title fw-bold">{{$course->name}}</h5>
                                <p class="card-text">{{$course->description}}</p>
                                <span class="badge badge-success fs-6">Room: {{$course->room}}</span>
                            </div>
                                <a href="{{ route('courses.show', ['course' => $course->id]) }}" class="btn btn-primary mt-auto" data-mdb-ripple-init>Discover Activities</a>
                                @if(auth()->check() && (auth()->user()->role == 'Admin' || auth()->user()->role == 'Instructor'))
                                <a href="/courses/{{$course->id}}/edit" class="btn btn-sm btn btn-warning fw-bold mt-4"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form method="post" action="/courses/{{$course->id}}">
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-sm btn-danger my-4"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                @endif
                            </div>
                        <div class="card-footer">Start at: {{ date('Y-m-d', strtotime($course->start_date)) }} <br/><br/> End at: {{ date('Y-m-d', strtotime($course->end_date)) }}</div>
                    </div>
                    </div>
                @endforeach
                </div>
            @else
                <div class="col-md-12">
                    <h1 class="text-center mt-5 text-danger">No courses available at the moment.</h1>
                </div>
            @endif
        </div>
    </section>
</div>


@endsection
