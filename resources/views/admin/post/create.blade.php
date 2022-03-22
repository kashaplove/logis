@extends('admin.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2">

                <h1 class="m-0">{{ $name }} </h1>

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.post.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input name="title" type="text" class="font-weight-bold form-control text-lg" id="title"
                           placeholder="Заголовок">
                </div>
                <div class="mb-3">
                    <textarea name="content" type="text" class="form-control" id="exampleInputPassword1"
                              placeholder="Текст"></textarea>
                </div>
                <div class="mb-3">
                    <input name="image" type="text" class="form-control" id="image"
                           placeholder="Изображение">
                </div>
                <div class="mb-3 form-check">
                    <input type="hidden" name="is_published" value="0">
                    <input type="checkbox" name="is_published" value="1">
                    <label class="form-check-label" for="exampleCheck1">Опубликовать</label>

                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div><!-- /.container-fluid -->
    </section>
@endsection
