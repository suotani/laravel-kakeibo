@extends("layouts.app")


@section("content")
    <h1>家計簿データを修正</h1>

    <form method="POST" action="/books/{{$book->id}}">
      @csrf
      @method("PATCH")
      <div class="form-group">
        <label>年度</label>
        <input type="number" name="year" class="form-control" value="{{$book->year}}" >
      </div>

      <div class="form-group">
        <label>対象月</label>
        <input type="number" name="month" class="form-control" value="{{$book->month}}" >
      </div>
      
      <div class="form-group">
        <label for="product-name">収支区分</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="inout" value="1" {{($book->inout == 1) ? "checked" : ""}}>
          <label class="form-check-label" >収入</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="inout" value="2" {{($book->inout == 2) ? "checked" : ""}}>
          <label class="form-check-label" for="inout">支出</label>
        </div>
      </div>

      <div class="form-group">
        <label for="product-name">カテゴリ</label>
        <select class="custom-select" name="category" >
          @foreach(App\Book::$categories as $category)
            <option value="{{$category}}" {{($book->category == $category) ? "selected" : ""}}>{{$category}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="product-name">金額</label>
        <input type="number" name="amount" id="product-name" class="form-control" value="{{$book->amount}}" >
      </div>

      <div class="form-group">
        <label for="product-name">メモ</label>
        <input type="text" name="memo" class="form-control" value="{{$book->memo}}" >
      </div>
      
      <button type="submit" class="btn btn-primary">送信</button>
      <a href="{{route('books.index')}}" class="btn btn-secondary">戻る</a>
    </form>
@endsection