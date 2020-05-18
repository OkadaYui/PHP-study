<?php

namespace App\Http\Controllers;

//使用クラスの宣言の追加20200514
use App\Listing;
use App\Card;
use Auth;
use Validator;
//ここまで

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //カード新規作成画面20200515
    public function new($listing_id)
    {
        //対象のlisting_idを取得
        $listing = Listing::find($listing_id);
        //card/new.blade.phpを表示
        return view('card/new',['listing' => $listing]);
    }
    
    
    //カード新規作成処理(データベースへの保存)
    public function store(Request $request)
    {
        //Validatorを使って入力された値のチェック(バリデーション)処理　（今回は255以上と空欄の場合エラーになります）
        $validator = Validator::make($request->all() , ['title' => 'required|max:255', ]);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            //入力画面に戻り、エラーメッセージと入力した内容をフォーム表示させる処理を記述
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // 入力に問題がなければListingモデルを介して、作ったユーザーidとタイトルをlistingsテーブルに保存
        $listings = new Card;
        $listings->title = $request->title;
        $listings->memo = $request->memo;
        $listings->listing_id = $request->listing_id;
        $listings->save();
        
        // 「/」 ルートにリダイレクト
        return redirect('/');
    }
    
    //カード詳細画面20200515
    public function show($listing_id,$card_id)
    {
        //表示するカードのデータを取得
        $show_card = Card::find($card_id);
        
        //show.blade.phpを表示
        return view('card/show',['card' => $show_card]);
        
    }
    
    //カード編集画面20200515
    public function edit($card_id)
    {
        //Listingモデルを介してデータベースからデータを取得。
        $card = Card::find($card_id);
        $listing = Listing::find($card->listing_id);
        $listings = Listing::where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'asc')
            ->get();
            
        //listing/new.blade.phpを表示
        return view('card/edit', ['card' => $card, 'listing' => $listing, 'listings' => $listings]);
    }
    
    //カード更新処理20200515
    public function update(Request $request)
    {
        //Validatorを使って入力された値のチェック(バリデーション)処理　（今回は255以上と空欄の場合エラーになります）
        $validator = Validator::make($request->all() , ['title' => 'required|max:255', ]);

        //バリデーションの結果がエラーの場合
        if ($validator->fails())
        {
            //入力画面に戻り、エラーメッセージと入力した内容をフォーム表示させる処理
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // 入力に問題がなければCardモデルを介して、作ったユーザーidとタイトルをcardsテーブルに保存
        $card = Card::find($request->card_id);
        $card->title = $request->title;
        $card->memo = $request->memo;
        $update_list_id = Listing::where('title', $request->listing_title)->first();
        $card->listing_id = $update_list_id->id;
        $card->save();

        // 「/」 ルートにリダイレクト
        return redirect('/');
    }
    
    //カード削除処理20200515
    public function destroy($card_id)
    {
        //対象のcardのデータを取得
        $card = Card::find($card_id);
        $card -> destroy($card_id);
        
        return redirect('/');
    }
    
}
