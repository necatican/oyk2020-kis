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

        <input type="text" name="todo">
        <button type="submit">Ekle</button>

    </form>
</ul>