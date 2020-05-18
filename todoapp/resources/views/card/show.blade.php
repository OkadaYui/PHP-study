<!-- カード詳細画面(配布資料77ページ参照) -->
@extends('layouts.app')

@section('content')
<div class="signinPage">
  <div class="container">
    <h1 class="title text-center">カード詳細<br><br></h1>
    <form class="new_user" id="new_user" action="{{ url( '/cardedit', $card->id) }}" accept-charset="UTF-8" method="get">
    {{ csrf_field() }}
      <div class="form-group border" style="height:100px;">
        <h4 for="title"  >タイトル</h2><br>
        <h3 class="title text-left text-wrap" style="border-bottom: thin solid black;"> {{ $card->title }} </h2>
      </div>

      <div class="form-group">
        <h4 for="memo"  >メモ</h2><br>
        <h4 class="title" style="border-bottom: thin solid black; word-wrap: break-word; margin-bottom:40px;"> {{ $card->memo }} </h4>
      </div>

      <div class="form-group" style="height:100px">
        <h4 for="list_name" >リスト名</h2><br>
        <h4 class="title" style="border-bottom: thin solid black;" > {{ $card->listing_id }} </h3>
      </div>

      <div class="form-group text-center">
        <a href="{{ url( '/cardedit', $card->id) }}">
          <input type="submit" name="commit" value="編集する" class="loginBtn">
        </a>
        <div class="text-center m-3">or</div>
        <div class="text-center">
          <p class="acountPage_link"><a href="{{ url('/carddelete', $card->id) }}">カードを削除</a></p>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection