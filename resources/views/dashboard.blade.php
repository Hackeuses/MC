@extends('layouts.blog')

@section('content')
<div class="container">
    <div class="">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


                <div class="panel-body row">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped col-sm-12">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> </td>
                                    <td>
                                        {!! Form::open
                                            ([
                                            'action' => ['PostsController@destroy', $post->id],
                                            'method' => 'POST',
                                            'class' => 'pull-right'
                                            ])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

                                        {!! Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
