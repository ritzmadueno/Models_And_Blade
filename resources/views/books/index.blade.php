<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book List</title>
        @vite('resources/css/app.css')
    </head>
<body class="*:bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <h1 class="text-xl">Book List</h1>
    </header>

    <main class="p-4">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="p-2 border-b">ISBN</th>
                    <th class="p-2 border-b">Title</th>
                    <th class="p-2 border-b">Author</th>
                    <th class="p-2 border-b">Description</th>
                    <th class="p-2 border-b">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td class="p-2 border-b">{{$book->isbn }} </td>
                    <td class="p-2 border-b">{{$book->title }} </td>
                    <td class="p-2 border-b">{{$book->author }} </td>
                    <td class="p-2 border-b">{{$book->description }} </td>
                    <td class="p-2 border-b">{{$book->date_published }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-4">
        <p class ="text-center">&copy; 2024 Mxllow2k</p>
    </footer>
</body>
</html>