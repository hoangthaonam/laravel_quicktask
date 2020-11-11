@extends('layouts.app')

@section('content')
<div class="col-sm-10 col-sm-offset-1">
    <table class="table table-borderless table-hover table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">{{ trans('name') }}</th>
                <th scope="col">{{ trans('create_at') }}</th>
                <th scope="col">{{ trans('action') }}</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$task->name}}</td>
                    <td>{{$task->created_at}}</td>
                    <td>
                        <a href="" data-toggle="modal"><button type="button" class="btn btn-primary"><i class="fas fa-cog"></i></button></a>
                        <form action="{{route('task.destroy',[$task->id])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>               
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
