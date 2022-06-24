<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Welcome to admin blade page</h1>

    <?php $u = 0; ?>

    <div class="d-flex justify-content-center  align-items-center flex-column bg-danger text-white">
        <!--if Admin in data--->
        @if($data == "Admin")
        <h2>Admin is in data</h2>
        @while($u < 10) <li>{{$u++}}</li>
            @endwhile

            <!--if User in data-->
            @elseif($data == "User")
            <h2>User is in data</h2>
            @while($u < 5) <li>{{$u++}}</li>
                @endwhile


                <!-- if data is null --->
                @else
                <h2>Else part execute</h2>
                @while($u < 20) <li>{{$u++}}</li>
                    @endwhile

                    @endif
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>