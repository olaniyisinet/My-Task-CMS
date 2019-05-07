@extends('layouts.master')

@section('content')
<div class="container">
<div class="row align-items-center">
  <div class="col-md-8 mx-auto">
    <h1 class="my-4 text-center">Single Task List </h1>

    @foreach ($tasks as $task)
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title text-center">{{ $task->title }}</h2>
{{--        <p class="card-text"> {{ str_limit($task->is_complete, $limit = 280, $end = '...') }} </p>--}}
{{--        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>--}}

      </div>
      <div class="card-footer text-muted">
        Owned by
        <a href="#">{{ $task->user->name }} </a>
{{--        @if (! $task->is_complete)--}}
{{--            @csrf--}}
{{--            <button  type="button" class="btn btn-primary" disabled >Not Completed</button>--}}
{{--        @else--}}
{{--          <button type="Button" class="btn btn-success" disabled >Task Completed</button>--}}
{{--        @endif--}}

        <div v-hide="userId==1">
        @if (! $task->is_complete)
          <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-primary">Complete Task</button>
          </form>
        @else
          <button type="button" disabled class="btn btn-success">Task Completed</button>
        @endif
        </div>
      </div>
    </div>
    @endforeach

  </div>
  </div>
</div>
</div>

@endsection
