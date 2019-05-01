@extends('shared.layout')

@section('content')
    <form action="" method="POST">
        <div>
            @if($errors->any())
                @foreach ($errors->all() as $item)
                    <div>{{ $item }}</div>
                @endforeach
            @endif
        </div>
        @csrf
        {{-- anti cross site request foreign key --}}
        <input type="text" placeholder="title" name="title"><br>
        <input type="text" placeholder="author" name="author"><br>
        <input type="number" placeholder="pages" name="pages"><br>
        <input type="submit" value="create">
    </form>
@endsection
