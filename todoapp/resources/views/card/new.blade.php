@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの場合に表示 -->
@include('common.errors')

<div class="signinPage">
  <div class="container">
    <h1 class="title text-center">カード追加</h2>

    <form action="{{ url('cards')}}" method="POST" class="new_user">
      {{ csrf_field() }}
      <div class="form-group" style="height:100px;">
        <h4 for="title">タイトル</h4><br>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        <input type="hidden" name="listing_id" value ="{{ $listing->id }}"/>
      </div>

      <div class="form-group" style="height:100px;">
        <h4 for="memo">メモ</h4><br>
        <textarea type="form" name="memo" class="form-control" value="{{ old('memo') }}"></textarea>
      </div>

      <div class="form-group text-center">
        <input type="submit" name="commit" value="追加する" class="loginBtn glyphicon-puls" data-disable-with="ログインする">
      </div>

    </form>
  </div>
</div>
@endsection