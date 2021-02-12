@extends("layouts.layouts")


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
            <option value="趣味"  {{($book->category == "趣味") ? "selected" : ""}}>趣味</option>
            <option value="食費"  {{($book->category == "食費") ? "selected" : ""}}>食費</option>
            <option value="光熱費" {{($book->category == "光熱費") ? "selected" : ""}}>光熱費</option>
            <option value="家賃・ローン" {{($book->category == "家賃・ローン") ? "selected" : ""}}>家賃・ローン</option>
            <option value="交際費" {{($book->category == "交際費") ? "selected" : ""}}>交際費</option>
            <option value="教育費" {{($book->category == "教育費") ? "selected" : ""}}>教育費</option>
            <option value="給料" {{($book->category == "給料") ? "selected" : ""}}>給料</option>
            <option value="副業" {{($book->category == "副業") ? "selected" : ""}}>副業</option>
            <option value="臨時収入" {{($book->category == "臨時収入") ? "selected" : ""}}>臨時収入</option>
        </select>
      </div>

      <div class="form-group">
        <label for="product-name">金額</label>
        <input type="number" name="amount" id="product-name" class="form-control" value="{{$book->amount}}" >
      </div>
      
      <button type="submit" class="btn btn-primary">送信</button>
      <a href="{{route('books.index')}}" class="btn btn-secondary">戻る</a>
    </form>
@endsection