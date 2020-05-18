<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//===ここから追加===

//－－－－－－－－－－　Listing関連　－－－－－－－－－－－－－//

//①リスト一覧画面
Route::get('/','ListingsController@index')->name('index');

//②リスト新規画面
Route::get('/new', 'ListingsController@new')->name('new');

//③リスト新規作成処理 
Route::post('/listings','ListingsController@store')->name('store');

//リストの編集画面へのルート定義20200513
Route::get('/listingsedit/{listing_id}','ListingsController@edit');

//リストの更新処理20200513
Route::post('/listing/edit','ListingsController@update');

//リストの削除処理20200513
Route::get('/listingsdelete/{listing_id}','ListingsController@destroy');


//－－－－－－－－－－　Card関連　－－－－－－－－－－－－－//

//カード新規画面への遷移20200515
Route::get('/listing/{listing_id}/card/new','CardsController@new');

//カード新規作成処理20200515
Route::post('/cards','CardsController@store');

//カード詳細画面への遷移20200515
Route::get('/listing/{listing_id}/card/{card_id}','CardsController@show');

//カード編集画面への遷移20200515
Route::get('/cardedit/{card_id}','CardsController@edit');

//カード更新処理20200515
Route::post('/card/edit','CardsController@update');

//カード削除処理20200515
Route::get('/carddelete/{card_id}','CardsController@destroy');

//===ここまで追加===

/* ======= 解説 =======
■ルートの定義とは、このURLでアクセスされた時は、このコントローラのアクションを呼び出してください」と定義します。
    ①の場合、「/」でアクセスされたら、ListingsControllerのindexアクションを呼び出してねという支持になります

Route::get('リクエストされたURL','呼び出すコントローラー名@処理するコントローラ名');

②リスト新規画面の「->name('new')」の記述は、ルートの名前を定義しています。これを名前付きルートといいます。
名前を定義しておくことで、コントローラやビューで定義した名前でパスの指定をすることができます。

*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('/');