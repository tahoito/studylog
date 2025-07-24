<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>勉強ログ</title>
</head>
<body>
    <h1>勉強ログ</h1>

    <!-- フォーム -->
    <form action="{{ route('study-logs.store') }}" method="POST">
        @csrf
        <label>科目: <input type="text" name="subject" required></label><br>
        <label>勉強時間（分）: <input type="number" name="minutes" required></label><br>
        <label>日付: <input type="date" name="study_date" required></label><br>
        <button type="submit">追加</button>
    </form>

    <hr>

    <!-- 一覧 -->
    <h2>記録一覧</h2>
    <ul>
        @foreach ($logs as $log)
            <li>{{ $log->study_date }} - {{ $log->subject }}: {{ $log->minutes }}分</li>
        @endforeach
    </ul>
</body>
</html>
