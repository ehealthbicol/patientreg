<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    @if ($patients->isEmpty())
        <p>No users found.</p>
    @else
        <ul>
            @foreach ($patients as $patient)
                <li>{{ $patient->lname }} - {{ $patient->fname }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
