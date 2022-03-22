@extends('admin.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2">

                    <h1 class="m-0">{{ $name }} <a href="{{ route('admin.post.create') }}" type="button" class="btn btn-circle badge-info ml-3"><i class="fas fa-plus"></i></a></h1>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">

            <ul class="list-unstyled">

                @foreach($posts as $item)
                    <div class="card">
                        <div class="card-body">
                            <li class="media mb-3">
                                <img class="mr-3 img-fluid" width="80" height="80"
                                     src="{{ asset($item->image) }}" alt="dew">
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1">{{ substr($item->title,0,200)}}</h4>
                                    <div class="text-secondary">
                                        {{ substr($item->content,0,500)}}...
                                    </div>
                                </div>
                                <a href="{{ route('admin.post.show', $item->id) }}" class="stretched-link"></a>
                            </li>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div><!-- /.container-fluid -->
    </section>
    <style>
        .btn-edit {
            position:absolute;
            top: 50%;
            left: 90%;
        }
    </style>
@endsection
