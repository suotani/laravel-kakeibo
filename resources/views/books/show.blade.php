@extends("layouts.layouts")

@section("content")

<h1>家計簿詳細</h1>
<table class="table table-striped">
    <tr>
        <th>年月</th>
        <td>{{ $book->year }}年{{ $book->month }}月</td>
    </tr>
    
    <tr>
        <th>区分</th>
        <td>{{ $book->inout }}</td>
    </tr>
    
    <tr>
        <th>科目</th>
        <td>{{ $book->category }}</td>
    </tr>
    
    <tr>
        <th>金額</th>
        <td>{{ $book->amount }}万円</td>
    </tr>
</table>
<a href="{{route('books.index')}}" class="btn btn-secondary">戻る</a>
@endsection