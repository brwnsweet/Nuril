<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent : Relasi One to Many</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center"><a href="#"></a></h3>
                <h5 class="text-center">Laravel Eloquent Relationship : One to Many</h5>
                <table class="table table-bordered table-striped mt-4">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                        <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <ul>
                            @forelse ($post->comments as $comment)
                                <li>{{ $comment->comment }}</li>
                            @empty
                                <li>No comments available</li>
                            @endforelse
                        </ul>
                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>