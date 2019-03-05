<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- {!! Form::open(['url' => 'foo/bar']) !!}

    {!! Form::close() !!} --}}

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="posted" method="POST">
                {{ csrf_field() }}
                <input type="text" class="form-control" placeholder="text1" name="head">
                <input type="text" class="form-control" placeholder="text2" name="body">
                <input type="text" class="form-control" placeholder="text3" name="conclusion">
                <input type="submit" name="">
            </form>
        </div>
    </div>
</body>
</html>