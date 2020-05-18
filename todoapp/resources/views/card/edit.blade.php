<!-- カード編集画面(配布資料78ページ参照) -->
@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの場合に表示 -->
@include('common.errors')

<div class="signinPage">
  <div class="container">
    <h1 class="title text-center">カード編集</h2>

    <form action="{{ url('/card/edit') }}" method="POST" class="new_user">
      {{ csrf_field() }}
      <div class="form-group" style="height:100px;">
        <h4 for="title">タイトル　（変更前：{{ $card->title }})</h4><br>
        <input type="text" name="title" class="form-control" value="{{ $card->title }}">
        <input type="hidden" name="card_id" value="{{ $card->id }}">
      </div>

      <div class="form-group" style="height:125px;">
        <h4 for="memo">メモ　　（変更前：{{ $card->memo }})</h4><br>
        <textarea type="form" name="memo" class="form-control" >{{ $card->memo }}</textarea>
      </div>

      <div class="form-group" style="height:90px;">
        <h4 for="listing_id">リスト  （変更前：{{ $listing->title }})</h4><br>
        <select id="select1a" class="form-control" name="listing_title" >
          @foreach($listings as $listing)
            <option> {{ $listing->title }}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group text-center">
        <input type="submit" name="commit" value="更新する" class="loginBtn glyphicon-puls" data-disable-with="ログインする">
      </div>

    </form>
  </div>
</div>
@endsection
