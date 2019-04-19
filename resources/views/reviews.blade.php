<!-- resources/views/reviews.blade.php -->

@extends('layouts.app')

@section('content')

    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用-->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
        <!-- クチコミ登録フォーム -->
        <form action="{{ url('reviews') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="review" class="col-sm-3 control-label">Review</label>
                <div class="col-sm-6">
                    <div class="col-sm-6" style="width:90%">
                        <div>
                            <label for="review" class="col-sm-3 control-label">Company name</label>
                            <input type="text" class="form-control" name='company_name' value = "{{ old('company_name') }}" placeholder="Enter company name">
                        </div>    
                        
                        <div>
                            <label for="review" class="col-sm-3 control-label">Employment type</label>
                            <input type="text" class="form-control" name='employment_type' value = "{{ old('employment_type') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Enrollment status</label>
                            <input type="text" class="form-control" name='enrollment_status' value = "{{ old('enrollment_status') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Function name</label>
                            <input type="text" class="form-control" name='review_function' value = "{{ old('review_function') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Division name</label>
                            <input type="text" class="form-control" name='review_division' value = "{{ old('review_division') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Position name</label>
                            <input type="text" class="form-control" name='position_name' value = "{{ old('position_name') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Working environment for international talents</label>
                            <input type="text" class="form-control" name='work_env_rate' value = "{{ old('work_env_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Employee evaluation</label>
                            <input type="text" class="form-control" name='employee_evaluation_rate' value = "{{ old('employee_evaluation_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Career up</label>
                            <input type="text" class="form-control" name='careerup_rate' value = "{{ old('careerup_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Consistency of the job discription and the actual asignment</label>
                            <input type="text" class="form-control" name='gap_rate' value = "{{ old('gap_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Environment for employee growth</label>
                            <input type="text" class="form-control" name='growth_rate' value = "{{ old('growth_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Gender equality</label>
                            <input type="text" class="form-control" name='gender_equality_rate' value = "{{ old('gender_equality_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Compensations and benefits</label>
                            <input type="text" class="form-control" name='c_and_b_rate' value = "{{ old('c_and_b_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Compliance</label>
                            <input type="text" class="form-control" name='compliance_rate' value = "{{ old('compliance_rate') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Overtime</label>
                            <input type="text" class="form-control" name='overtime' value = "{{ old('overtime') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Paid day off consumption per year</label>
                            <input type="text" class="form-control" name='pdo_consumption' value = "{{ old('pdo_consumption') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Work environment for international talents</label>
                            <input type="text" class="form-control" name='work_env' value = "{{ old('work_env') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Screening</label>
                            <input type="text" class="form-control" name='screening' value = "{{ old('screening') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Career up</label>
                            <input type="text" class="form-control" name='careerup' value = "{{ old('careerup') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Consistency of the job discription and the actual asignment</label>
                            <input type="text" class="form-control" name='gap' value = "{{ old('gap') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Environment for employee growth</label>
                            <input type="text" class="form-control" name='growth' value = "{{ old('growth') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">gender_equality</label>
                            <input type="text" class="form-control" name='gender_equality' value = "{{ old('gender_equality') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Compensations and benefits</label>
                            <input type="text" class="form-control" name='c_and_b' value = "{{ old('c_and_b') }}" placeholder="">
                        </div>    
            
                        <div>
                            <label for="review" class="col-sm-3 control-label">Compliance</label>
                            <input type="text" class="form-control" name='compliance' value = "{{ old('compliance') }}" placeholder="">
                        </div>    
                </div>
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
                    Recent reviews
                </div>
                <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                        <th></th>
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
                                <!-- クチコミ : 更新ボタン --> 
                                <td>
                                <form action="{{ url('reviewsedit/'.$review->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-pencil"></i> Edit </button>
                                </form>
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