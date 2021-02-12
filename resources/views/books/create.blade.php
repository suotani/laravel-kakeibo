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
            <option value="趣味">趣味</option>
            <option value="食費">食費</option>
            <option value="光熱費">光熱費</option>
            <option value="家賃・ローン">家賃・ローン</option>
            <option value="交際費">交際費</option>
            <option value="教育費">教育費</option>
            <option value="給料">給料</option>
            <option value="副業">副業</option>
            <option value="臨時収入">臨時収入</option>
        </select>
      </div>

      <div class="form-group">
        <label for="product-name">金額</label>
        <input type="number" name="amount" id="product-name" class="form-control" >
      </div>
      
      <button type="submit" class="btn btn-primary">送信</button>
      <a href="{{route('books.index')}}" class="btn btn-secondary">戻る</a>
    </form>
@endsection