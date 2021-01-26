<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("cong")}}" >
        @csrf
     <input type="text" name="a">
     <input type="text" name="b">
     <select name="cars" id="op">
        <option value="cong">cong</option>
        <option value="tru">tru</option>
        <option value="nhan">nhan</option>
        <option value="chia">chia</option>
      </select>
     <input type="submit" value="submit">
    </form>
</body>
</html>
