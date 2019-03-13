@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>Usuarios</h1>
                <ul>
                    @foreach($users as $user)
                        <li><h2>{{$user->name}}</h2></li>
                        <div class="well">
                            @foreach($user->posts as $post )
                                <strong>{{$post->title}}</strong>
                                @endforeach
                        </div>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>

@endsection