@extends('layouts.template')

@section('content')
@php

$backgrounds = [
    'Yoga' => 'https://image.brigitte.de/11722268/t/TL/v3/w1440/r1.5/-/hatha-yoga-krieger.jpg',
    'Pilates' => 'https://images.squarespace-cdn.com/content/v1/62b7e6d4cef97862d623a8ff/44f29c0d-2eb5-4520-acda-c320133989ac/Escapepilates-49.jpg',
    'Aerobics' => 'https://cms.manadr.com/wp-content/uploads/2022/05/smiley-people-having-fun-zumba-class-scaled.jpg',
    'CrossFit' => 'https://df-sportspecialist.it/cdn/shop/articles/differenza_crosstraining_crossfit.jpg?v=1703759738',
    'Functional Training' => 'https://quifit.com/files/Corsi/foto/01-metodo-functional-training.jpg',
    'Tai Chi' => 'https://www.health.com/thmb/ySEnVKqTiHX3usiPE1jAqOYgdcA=/2121x0/filters:no_upscale():max_bytes(150000):strip_icc()/TaiChi-3679a25118e64ab28ba27ce7f10427c5.jpg',
    'Calisthenics' => 'https://www.projectinvictus.it/wp-content/uploads/2019/12/Esercizi-calistenic.001.jpeg',
    'Parkour Conditioning' => 'https://images.squarespace-cdn.com/content/v1/569f0518a2bab8156eb0df9e/1541730139718-KE2NG9ZGQKF1TWPG0P7R/Gym+photo+for+newsletter+2.jpg?format=1500w'
];

$backgroundUrl = $backgrounds[$course->name] ?? 'https://img.freepik.com/free-psd/fitness-items-background_23-2150154416.jpg?w=1800&t=st=1710860265~exp=1710860865~hmac=33026a9ef564884ee8a3a373a77fc5f5a1e736f774dfa8e56339cb89ce232f6c';
@endphp

<div class="p-5 text-center bg-image" style="
      background-image: url('{{ $backgroundUrl }}');
      height: 500px;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3" style="font-size: 5rem;">{{$course->name}}</h1>
        </div>
      </div>
    </div>
  </div>
        @if($activities->count() > 0)
        <div class="container" style="margin-top: 500px;">
    <section class="text-center">
      <h4 class="mb-4 text-light"><strong>Activities</strong></h4>
      <div class="alert alert-success mb-4" role="alert">
    <strong>Hurry up and reserve, spots are limited!</strong>
    </div>
    @if(auth()->check() && (auth()->user()->role == 'Admin' || auth()->user()->role == 'Instructor'))
        <div class="text-start mb-4">
            <a href="/activities/create" class="btn btn btn-light fw-bold">Add Activity</a>
        </div>
        @endif
      <div class="row">
        @foreach($activities as $activity)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-header bg-white py-3">
              <p class="text-uppercase small mb-2"><h5 class="fw-bold">{{$activity->name}}</h5></p>
              <p class="mb-0">{{$activity->description}}</p>
              <hr class="text-muted" />
              <p class="mt-3" style="font-size: 18px;">Goal:</p>
              <p class="mb-0">{{$activity->goal}}</p>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="badge badge-primary" style="font-size: 14px;">Time: {{$activity->time}}h</span></li>
                <li class="list-group-item"><span class="badge badge-secondary" style="font-size: 14px;">Day: {{$activity->day}}</span></li>
                <li class="list-group-item"><span class="badge badge-<?php echo ($activity->difficulty == 'Beginner') ? 'success' : (($activity->difficulty == 'Intermediate') ? 'warning' : 'danger'); ?>" style="font-size: 14px;">{{$activity->difficulty}}</span></li>
              </ul>
            </div>
            <div class="card-footer bg-white py-3">
              <button type="button" class="btn btn-success btn-sm" data-mdb-ripple-init>Book</button>
              <br/>
            @if(auth()->check() && (auth()->user()->role == 'Admin' || auth()->user()->role == 'Instructor'))
                <a href="/activities/{{$activity->id}}/edit" class="btn btn-sm btn btn-warning fw-bold mt-4"><i class="fa-solid fa-pen-to-square"></i></a>
                <form method="post" action="/activities/{{$activity->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger my-4"><i class="fa-solid fa-trash"></i></button>
                </form>
            @endif
            </div>
          </div>
        </div>
        @endforeach
        @else
        <div class="container" style="margin-top: 500px;">
            <section class="text-center">
            <h4 class="mb-4 text-light"><strong>Activities</strong></h4>
            <div class="alert alert-danger mb-4" role="alert">
            <strong>The activities are not available yet!</strong>
        </div>
        @if(auth()->check() && (auth()->user()->role == 'Admin' || auth()->user()->role == 'Instructor'))
        <div class="text-center mb-4">
            <a href="/activities/create" class="btn btn btn-light fw-bold">Add Activity</a>
        </div>
        @endif
            </section>
        </div>
        @endif
      </div>
    </section>
  </div>

@endsection