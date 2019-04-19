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
    'company_name' => 'required|min:1|max:255',
    // 'company_id' => 'required|min:1|max:255',
    // 'user_id' => 'required|min:1|max:255',
    'employemt_type' => 'required|min:1|max:255',
    'enrollment_status' => 'required|min:1|max:255',
    'work_env_rate' => 'required|min:1|max:255',
    'employee_evaluation_rate' => 'required|min:1|max:255',
    'careerup_rate' => 'required|min:1|max:255',
    'gap_rate' => 'required|min:1|max:255',
    'growth_rate' => 'required|min:1|max:255',
    'gender_equality_rate' => 'required|min:1|max:255',
    'c_and_b_rate' => 'required|min:1|max:255',
    'compliance_rate' => 'required|min:1|max:255',
        
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
    $reviews->employment_type = $request->employment_type;
    $reviews->enrollment_status = $request->enrollment_status;
    $reviews->review_function = $request->review_function;
    $reviews->review_division = $request->review_division;
    $reviews->review_position = $request->review_position;;
    $reviews->work_env_rate = $request->work_env_rate;
    $reviews->employee_evaluation_rate = $request->employee_evaluation_rate;
    $reviews->careerup_rate = $request->careerup_rate;
    $reviews->gap_rate = $request->gap_rate;
    $reviews->growth_rate = $request->growth_rate;
    $reviews->gender_equality_rate = $request->gender_equality_rate;
    $reviews->c_and_b_rate = $request->c_and_b_rate;
    $reviews->compliance_rate = $request->compliance_rate;
    $reviews->overtime = $request->overtime;
    $reviews->pdo_consumption = $request->pdo_consumption;
    $reviews->work_env = $request->work_env;
    $reviews->screening = $request->screening;
    $reviews->careerup = $request->careerup;
    $reviews->gap = $request->gap;
    $reviews->growth = $request->growth;
    $reviews->gender_equality = $request->gender_equality;
    $reviews->c_and_b = $request->c_and_b;
    $reviews->compliance = $request->compliance;

    $reviews->save(); 
    //「/」ルートにリダイレクト
    return redirect('/');
});

//更新画面
Route::post('/reviewsedit/{reviews}', function(Review $reviews) {
    //{reviews}id 値を取得 => Review $reviews id 値1レコード取得
    return view('reviewsedit', ['review' => $reviews]);
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
    $company->delete();
    return redirect('/');
});

/**

* 求職案件を削除 
*/
Route::post('/position/{position}', function (Review $position) {
    $position->delete();
    return redirect('/');
});


#[END]--------------------------------------------
