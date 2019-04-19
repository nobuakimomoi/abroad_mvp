@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('reviews/update') }}" method="POST">

        <!-- edit list-->
        <div class="form-group">
           <label for="item_name">Company name</label>
           <input type="text" id="company_name" name="company_name" class="form-control" value="{{$review->company_name}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Employment type</label>
           <input type="text" id="employment_type" name="employment_type" class="form-control" value="{{$review->employment_type}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Enrollment status</label>
           <input type="text" id="enrollment_status" name="enrollment_status" class="form-control" value="{{$review->enrollment_status}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Function</label>
           <input type="text" id="review_function" name="review_function" class="form-control" value="{{$review->review_function}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Division</label>
           <input type="text" id="review_division" name="review_division" class="form-control" value="{{$review->review_division}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Position name</label>
           <input type="text" id="review_position" name="review_position" class="form-control" value="{{$review->review_position}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Working environment for international talents</label>
           <input type="text" id="employment_type" name="work_env_rate" class="form-control" value="{{$review->work_env_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Employment evaluation</label>
           <input type="text" id="employee_evaluation_rate" name="employee_evaluation_rate" class="form-control" value="{{$review->employee_evaluation_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Career up</label>
           <input type="text" id="careerup_rate" name="careerup_rate" class="form-control" value="{{$review->careerup_rate}}">
        </div>

        <div class="form-group">
           <label for="item_name">Consistency of the job discription and the actual asignment</label>
           <input type="text" id="gap_rate" name="gap_rate" class="form-control" value="{{$review->gap_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Environment for employee growth</label>
           <input type="text" id="growth_rate" name="growth_rate" class="form-control" value="{{$review->growth_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Gender equality</label>
           <input type="text" id="gender_equality_rate" name="gender_equality_rate" class="form-control" value="{{$review->gender_equality_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Compensations and benefits</label>
           <input type="text" id="c_and_b_rate" name="c_and_b_rate" class="form-control" value="{{$review->c_and_b_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Compliance</label>
           <input type="text" id="compliance_rate" name="compliance_rate" class="form-control" value="{{$review->compliance_rate}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Overtime</label>
           <input type="text" id="overtime" name="overtime" class="form-control" value="{{$review->overtime}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Paid day off consumption per year</label>
           <input type="text" id="pdo_consumption" name="pdo_consumption" class="form-control" value="{{$review->pdo_consumption}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Work environment for international talents</label>
           <input type="text" id="work_env" name="work_env" class="form-control" value="{{$review->work_env}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Scr</label>
           <input type="text" id="screening" name="screening" class="form-control" value="{{$review->screening}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Career up</label>
           <input type="text" id="careerup" name="careerup" class="form-control" value="{{$review->careerup}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Consistency of the job discription and the actual asignment</label>
           <input type="text" id="gap" name="gap" class="form-control" value="{{$review->gap}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Environment for employee growth</label>
           <input type="text" id="growth name="growth class="form-control" value="{{$review->growth}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Gender equality</label>
           <input type="text" id="gender_equality" name="gender_equality" class="form-control" value="{{$review->gender_equality}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Compensations and equality</label>
           <input type="text" id="c_and_b" name="c_and_b" class="form-control" value="{{$review->c_and_b}}">
        </div>
        
        <div class="form-group">
           <label for="item_name">Compliance</label>
           <input type="text" id="compliance" name="compliance" class="form-control" value="{{$review->compliance}}">
        </div>
        
        <!--/ edit list -->
        
        <!-- item_number -->
        <!--<div class="form-group">-->
        <!--   <label for="item_number">Number</label>-->
        <!--<input type="text" id="item_number" name="item_number" class="form-control" value="{{$review->item_number}}">-->
        <!--</div>-->
        <!--/ item_number -->

        <!-- item_amount -->
        <!--<div class="form-group">-->
        <!--   <label for="item_amount">Amount</label>-->
        <!--<input type="text" id="item_amount" name="item_amount" class="form-control" value="{{$review->item_amount}}">-->
        <!--</div>-->
        <!--/ item_amount -->
        
        <!-- published -->
        <!--<div class="form-group">-->
        <!--   <label for="published">published</label>-->
        <!--    <input type="datetime" id="published" name="published" class="form-control" value="{{$review->published}}"/>-->
        <!--</div>-->
        <!--/ published -->
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
            <i class="glyphicon glyphicon-backward"></i>  Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$review->id}}" />
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection