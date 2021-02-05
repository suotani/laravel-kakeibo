<h1>家計簿</h1>
<table>
    <tr>
        <th>年月</th>
        <th>区分</th>
        <th>科目</th>
        <th>金額</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{ $book->year }}年{{ $book->month }}月</td>
        <td>{{ $book->inout }}</td>
        <td>{{ $book->category }}</td>
        <td>{{ $book->amount }}万円</td>
    </tr>
   @endforeach
</table>