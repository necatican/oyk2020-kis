@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-body">
            <ul>
                @foreach ($todos as $todo)
                <li>
                    <a href="{{ route('todos.toggle', $todo->id) }}">
                        @if(!is_null($todo->completed_at)) ✔️ <del> @endif
                            {{ $todo->text }}
                            @if(!is_null($todo->completed_at)) </del> @endif
                    </a>
                </li>
                @endforeach

                <form action="{{ route('todos.store') }}" method="post">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-sm">
                            <input type="text" class="form-control" name="todo">
                        </div>
                        <div class="col-sm">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </div>
</div>
@endsection