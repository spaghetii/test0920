<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Hello</h1>
    <form method="post" action="/hello">
        @csrf                               {{-- 防止xss攻擊 --}}
        Your name:    林培誠修改  練習fork <br>
        Your name:    呂雅卉修改  練習fork <br>
        Your name:    黃冠維修改  練習fork <br>
        <input type="text" name="userName">        
        <input type="submit" value="OK">
    </form>
</body>
</html>
