<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class='container'>

        {{-- {{$text}} - (string)<input type='text'> --}}
        {{-- {!! $text !!} - (html tag)<input type='text'> --}}

        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::select('select', $data, 0, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <div class="custom-file">
                    {!! Form::label('image', 'Choose file...', ['class' => 'custom-file-label']) !!}
                    {!! Form::file('image', ['class' => 'custom-file-input']) !!}
                </div>
            </div>
            <div class='form-group'>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
        {!! Form::close() !!}
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
