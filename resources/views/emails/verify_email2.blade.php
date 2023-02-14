<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garar</title>
</head>

<body>
    <div class="container" style="text-align: center;">
       <h1 style="color:#2A6092">Garar</h1>
       <img src="{{asset('img/email.png')}}" alt="" width="250px" height="200px">
       <p style="margin: 80px">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam ipsam nisi saepe id quia totam, quidem cum libero repellendus? Obcaecati pariatur, numquam sed beatae dolore adipisci similique eum inventore perferendis!
       </p>
       <p>
        Click <a href="{{ url('/user/verify/' .$user->verifyUser->token) }}">here</a> to verify your email.
    </p>
    </div>
</body>

</html>
