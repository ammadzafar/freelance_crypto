@extends('layouts.client.master')
@section('title') Job Post @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-addjob">
                <form class="rt-formtheme" action="{{route('client.job.skill')}}" method="get">
                    <fieldset>
                        <div class="rt-addjobtitlearea">
                            <h1>Let’s start with a strong headline </h1>
                            <p>This help’s your job post stand out to the right candidate. It’s the first thing they’ll see, so make it count!</p>
                        </div>
                        <div class="rt-jobheadlinearea">
                            <div class="form-group">
                                <label>Write head line for your job post.</label>
                                <input class="description" type="text" name="description" value="{{\Illuminate\Support\Facades\Session::has('job-description') ? \Illuminate\Support\Facades\Session::get('job-description') : ''}}">
                            </div>
                            <div class="form-group">
                                <label>For Example</label>
                            </div>
                            <ul class="rt-jobtitleexample">
                                <li>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, dolorum?</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, dolorum?</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, dolorum?</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, dolorum?</p>
                                </li>
                                <li>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, dolorum?</p>
                                </li>
                            </ul>
                            <div class="rt-stepbtnholder">
                                <button type="submit" {{--href="{{route('client.job.skill')}}"--}} class="rt-btn post-job-btn" style="display: none">Next</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            if ($('.description').val() == ''){
                toastr.info('Please provide head line for your job post');
                $('.post-job-btn').hide();
            }else {
                $('.post-job-btn').show();
            }

            $(document).on('keyup','.description',function () {
                if ($(this).val().length < 10){
                    $('.post-job-btn').hide();
                }else {
                    $('.post-job-btn').show();
                }
            })
        });
    </script>
@endsection












