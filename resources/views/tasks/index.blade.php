<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <ul>
        @foreach($tasks as $task)
            <li>
            	<a href="/tasks/{{ $task->id }}">
            		{{ $task->body }}
            	</a>
            </li>
        @endforeach
    </ul>
</body>
</html>