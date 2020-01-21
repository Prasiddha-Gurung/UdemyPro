@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">all questions</div>

                    <div class="card-body">
                        @foreach($questions as $question)
                            <div class="media">
                                <div class="media_body">
                                    <h3 class="mt-0">{{ $question->title}}</h3>
                                    {{\Illuminate\Support\Str::limit($question->body,250)}}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        {{$questions->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
