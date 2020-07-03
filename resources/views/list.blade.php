<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ma todo list</title>
    </head>
    <body>
        <a href="{{ route('show-create-form') }}">Créer une nouvelle tâche</a>
        <ul>
            @foreach($tasks as $task)
                <li>
                    {{ $task->name }} - {{ $task->status_label }}
                    <form action="{{ route('delete-task', [$task->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit">Supprimer la tâche</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </body>
</html>
