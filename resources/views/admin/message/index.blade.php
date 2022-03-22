@extends('admin.main')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $name }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            @foreach($messages as $item)
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $item->first_name }} {{ $item->last_name }} ({{ $item->email }})
                            - {{ $item->subject }}</h4>
                        <p class="text-gray text-sm">{{ $item->created_at }}</p>
                        {{ $item->message }}
                        <form action="{{ route('admin.message.destroy', $item->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Удалить" class="btn btn-danger mt-3">
                        </form>
                    </div>
                </div>
            @endforeach
        </div><!-- /.container-fluid -->
    </section>
@endsection
