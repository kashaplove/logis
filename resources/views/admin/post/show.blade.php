@extends('admin.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="page-content">
                <div class="post-img">
                    <img src="{{ asset($post->image) }}" alt="someImage" width="500"
                         height="500">
                </div>

                <div class="post-content ml-4">
                    <div class="post-header">
                        <div class="title-and-created">
                            <h1 class="m-0">{{ $name }} </h1>
                            <p class="text-secondary">{{ $post->created_at }}</p>
                        </div>
                        <div class="edit-button">
                            <a href="{{ route('admin.post.edit', $post->id) }}" type="button" class="btn btn-circle btn-secondary"><i class="fas fa-pen"></i></a>
                        </div>
                    </div>


                    <div class="content-footer">
                        <p class="mb-3 text-content" align="justify">{{ $post->content }}</p>

                        <!-- /.row -->
                        <div class="mt-3">
                            <form action="{{ route('admin.post.destroy', $post) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>






    {{--    <div>--}}
    {{--        <form action="{{ route('admin.post.destroy', $post) }}" method="post">--}}
    {{--            @method('delete')--}}
    {{--            @csrf--}}
    {{--            <input type="submit" value="Удалить" class="btn btn-danger">--}}
    {{--        </form>--}}
    {{--    </div>--}}

    <style>
        .edit-button {

        }
        .page-content {
            display: flex;
            justify-content: center;
        }
        .post-img {

        }
        .post-content {

        }
        .post-header {
            padding: 0;
            display: flex;
            justify-content: space-between;
        }
        .content-footer {

        }
    </style>
@endsection
