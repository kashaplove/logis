@extends('admin.main')

@section('content')


    @foreach($messages as $item)
        <div class="card">
            <div class="card-body">
                <h4>{{ $item->first_name }} {{ $item->last_name }} ({{ $item->email }}) - {{ $item->subject }}</h4>
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
@endsection
