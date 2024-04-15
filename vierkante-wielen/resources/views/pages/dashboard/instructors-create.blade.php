    <!-- resources/views/instructors/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Instructor</title>
</head>
<body>
    <h1>Create New Instructor</h1>
    <form method="POST" action="{{ route('instructors.store') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>

        <laber for="adres">Adres:</laber><br>
        <input type="text" id="adres" name="adres"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>

