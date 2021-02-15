@extends("layouts.layouts")


@section("content")
    <h1>新しい家計簿データを追加</h1>

    <form method="POST" action="/books">
      @csrf
      <div class="form-group">
        <label>年度</label>
        <input type="number" name="year" class="form-control" >
      </div>

      <div class="form-group">
        <label>対象月</label>
        <input type="number" name="month" class="form-control" >
      </div>
      
      <div class="form-group">
        <label for="product-name">収支区分</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="inout" value="1" checked>
          <label class="form-check-label" >収入</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="inout" value="2">
          <label class="form-check-label" for="inout">支出</label>
        </div>
      </div>

      <div class="form-group">
        <label for="product-name">カテゴリ</label>
        <select class="custom-select" name="category">
            @foreach(App\Book::$categories as $category)
              <option value="{{$category}}">{{$category}}</option>
            @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="product-name">金額</label>
        <input type="number" name="amount" class="form-control" >
      </div>

      <div class="form-group">
        <label for="product-name">メモ</label>
        <input type="text" name="memo" class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary">送信</button>
      <a href="{{route('books.index')}}" class="btn btn-secondary">戻る</a>
    </form>
@endsection