<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Laravel ルーティング練習</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1>ユーザー詳細ページ</h1>
        <p>これは課題2: パラメータ付きGETルートのサンプルページです。</p>
        <div class="alert alert-info">
            <strong>ユーザーID:</strong> {{ $id }}
        </div>
        <a href="{{ route('home') }}" class="btn btn-primary">ホームに戻る</a>
    </div>
</body>
</html>
