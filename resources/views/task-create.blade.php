@extends('layouts.app')
@section('content')
<div class="col-sm-10 col-sm-offset-1">
    <form action="{{route('task.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="Name">{{ trans('name') }}: </label>
          <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-default">{{ trans('create_button') }}</button>
      </form>
</div>
@endsection
