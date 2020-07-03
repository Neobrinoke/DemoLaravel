<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ma todo list</title>
    </head>
    <body>
        <form action="{{ route('create-task') }}" method="POST">
            @csrf

            <input type="text" name="name" id="name" placeholder="Nom de la tâche">
            @error('name')
            <span>{{ $message }}</span>
            @enderror

            <select name="status" id="status">
                <option value="1">En cours</option>
                <option value="2">Terminé</option>
                <option value="56">Erreur</option>
            </select>
            @error('status')
            <span>{{ $message }}</span>
            @enderror

            <button type="submit">Envoyer</button>
        </form>
    </body>
</html>
