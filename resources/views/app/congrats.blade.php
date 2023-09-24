<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-congrats.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <title>Congrats</title>
</head>

<body>
    <div class="contain">
        <div class="congrats">
            <h1>Congratulation</span>s!</h1>
            <div class="text">
                <p>You order has been placed successfully.<br>
                    <br>Date: {{ date('D,M,Y')}}
                    <br>Time: {{ date('H:i') }}
                    <br>Order-ID: {{ $food->id }}
                </p>
            </div>
        </div>
    </div>

</body>

</html>