<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-sm">
    <div class="max-w-sm">

        @foreach ($tasks as $task )
            <x-tasks-card :task="$task"></x-tasks-card>
        @endforeach
    </div>
</body>
</html>
