@extends('layouts.app')


@section('content')
<h1>家計簿</h1>
<a href="{{route('books.create')}}" class="btn btn-success">+登録</a>
<table class="table">
    <tr>
        <th>年月</th>
        <th>区分</th>
        <th>科目</th>
        <th>金額</th>
        <th>リンク</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->year }}年{{ $book->month }}月</td>
        <td>{{ $book->inout }}</td>
        <td>{{ $book->category }}</td>
        <td>{{ $book->amount }}万円</td>
        <td>
            <a href="{{route('books.edit', $book)}}" class="btn btn-warning">編集</a>
            <a href="{{route('books.show', $book)}}" class="btn btn-info">詳細</a>
            <form action="/books/{{$book->id}}" method="POST" style="display: inline;">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>削除</button>
            </form>
        </td>
    </tr>
   @endforeach
</table>
@endsection