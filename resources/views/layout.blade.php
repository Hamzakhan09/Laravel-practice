<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myweb</title>
</head>

<body>
  <h1>Print 1 to 10 using for loop</h1>
  @for ($i = 1; $i <=10; $i++)
    <li>{{ $i }}</li><br/>
@endfor

<h1>Pass user_name from route file and print that name 15 times using for loop</h1>
 <ol>
 @for ($i = 1; $i <=15; $i++)
    <li>{{ $user_name}}</li><br/>
@endfor
 </ol>

</body>

</html>