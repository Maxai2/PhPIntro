@extends('shared.layout')

@section('content')
    @if (count($books) > 0)
        <ul>
            @foreach ($books as $book)
                <li>{{$book->title}}</li>
            @endforeach
            <hr>
            <?php
                foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
            ?>
        </ul>
    @else
        <p>Sorry, no data!</p>
    @endif
@endsection

@section('scripts')
    <script>alert('sd')</script>
@endsection

