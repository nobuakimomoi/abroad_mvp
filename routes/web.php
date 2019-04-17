<?php

use App\Review;
use App\Company;
use App\Position;
use App\User;
use Illuminate\Http\Request;

/**
*クチコミのダッシュボード表示 
*/
Route::get('/', function () {
    $reviews = Review::orderBy('created_at', 'asc')->get();
    return view('reviews', [
        'reviews' => $reviews
    ]);
});


/**

/**
*会社のダッシュボード表示 
*/
Route::get('/company', function () {
    return view('companies'); //ここを追加
});

/**

/**
*求職案件のダッシュボード表示 
*/
Route::get('/position', function () {
    return view('positions'); //ここを追加
});

/**

* 新「レビュー」を追加 
*/
Route::post('/reviews', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'company_name' => 'required|min:2|max:255',
    ]);
    //ハリテーション:エラー。セッション値を保存したまま、入力ページへ戻る
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    } 
    // Eloquent モデル
    $reviews = new Review;
    $reviews->company_name = $request->company_name;
    $reviews->company_id = '1';
    $reviews->user_id = '1';
    $reviews->employment_type = '正社員';
    $reviews->enrollment_status = '在職';
    $reviews->year_entry = '2018';
    $reviews->year_resignation = '1';
    $reviews->work_location = '1';
    $reviews->review_function = '1';
    $reviews->review_division = '1';
    $reviews->review_position = '1';
    $reviews->user_gender = '1';
    $reviews->work_env_rate = '1';
    $reviews->screening_rate = '1';
    $reviews->careerup_rate = '1';
    $reviews->gap_rate = '1';
    $reviews->growth_rate = '1';
    $reviews->gender_equality_rate = '1';
    $reviews->c_and_b_rate = '1';
    $reviews->compliance_rate = '1';
    $reviews->overtime = '1';
    $reviews->pdo_consumption = '1';
    $reviews->work_env = '1';
    $reviews->screening = '1';
    $reviews->careerup = '1';
    $reviews->gap = '1';
    $reviews->growth = '1';
    $reviews->gender_equality = '1';
    $reviews->c_and_b = '1';
    $reviews->compliance = '1';

    $reviews->save(); 
    //「/」ルートにリダイレクト
    return redirect('/');
});

/**

* 新「会社」を追加 
*/
Route::post('/companies', function (Request $request) {
    //
});

/**

* 新「求職案件」を追加 
*/
Route::post('/positions', function (Request $request) {
    //
});

/**

* クチコミを削除 
* "'/review/delete/{review}"とするとエラーが出るが、下記だと何故かうまくいく
*/
Route::post('/review/{review}', function (Review $review) {
    $review->delete();
    return redirect('/');
});

/**

* 会社を削除 
*/
Route::post('/company/{company}', function (Review $company) {
    //
});

/**

* 求職案件を削除 
*/
Route::post('/position/{position}', function (Review $position) {
    //
});


#[END]--------------------------------------------
