<!-- resources/views/reviews.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('reviews') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="review" class="col-sm-3 control-label">Review</label>
    
    <div class="col-sm-6">
        <input type="text" class="form-control" name='company_name' value = "{{ old('company_name') }}" placeholder="企業名を記入">
    </div>
</div>
                
            <!-- クチコミ登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
        
     <!-- 現在のクチコミ-->
     @if (count($reviews) > 0)
         <div class="panel panel-default">
                <div class="panel-heading"> 
                    現在のクチコミ
                </div>
                <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th>クチコミ一覧</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- テーフル本体 -->
                    <tbody>
                         @foreach ($reviews as $review)
                            <tr>
                                <!-- クチコミタイトル -->
                                <td class="table-text">
                                    <div>{{ $review->company_name }}</div>
                                </td>
                                <!-- クチコミ:削除ホタン -->
                                <td>
                               <form action="{{ url('review/'.$review->id) }}" method="POST">
                                   {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-trash"></i> 削除
                                    </button>
                                </form>
                                </td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
         </div>
     @endif
     <!--  review: 既に登録されてるクチコミリスト -->

    </div>
@endsection