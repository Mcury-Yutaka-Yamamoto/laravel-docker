<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #000000; }
        .container { max-width: 600px; margin-top: 40px; }
        .card { margin-bottom: 20px; }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-4 text-center text-white">シンプル掲示板</h1>
    <!-- 投稿フォーム -->
    <form method="POST" action="/posts">
        @csrf
        <div class="mb-3">
            <textarea name="body" class="form-control" rows="3" placeholder="投稿内容を入力してください"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">投稿する</button>
    </form>

    <!-- 投稿一覧 -->
    <div class="mt-4">
        @foreach ($posts ?? [] as $post)
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <p class="mb-0 text-white">{{ $post->body }}</p>
                    <small class="text-white">{{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
