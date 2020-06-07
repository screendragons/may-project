{{-- @extends('partials.header')
@extends('layouts.default') --}}
@include('layouts.app')

@if($errors->any())
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div class="container">
  <h2>Create a task</h2>

  {!! Form::open(['route' => 'task.store', 'method' => 'POST', 'files' => true]) !!}
    <label for="name">Task name</label>
    <div class="input-group mb-3">
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>
      'Task name','autocomplete' => 'off']); !!}
    </div>

    <label for="kvk"></label>
    <div class="input-group mb-3">
      {!! Form::text('KVK', null, ['class' => 'form-control', 'placeholder' =>
      '12345678','autocomplete' => 'off']); !!}
    </div>

    <button type="submit" class="btn btn-success">Create</button>
  {!! Form::close() !!}
</div>