@extends('layouts.client.master')
@section('title') Job Skill @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-addjob">
                <form class="rt-formtheme">
                    <fieldset>
                        <div class="rt-addjobtitlearea">
                            <h1>Next, estimate the scope of your work.</h1>
                            <p>Consider the size of the project and the time it will take</p>
                        </div>
                        <div class="rt-jobheadlinearea rt-jobsizearea">
                            <div class="form-group">
                                <label>Large</label>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.</p>
                            </div>
                            <div class="form-group">
                                <label>How much time your work will take?</label>
                            </div>
                            <div class="rt-radio mb-3">
                                <input type="radio" name="radio" id="radio">
                                <label for="radio">More than 1 year</label>
                            </div>
                            <div class="rt-radio mb-3">
                                <input type="radio" name="radio" id="Medium">
                                <label for="Medium">6 month to 1 year</label>
                            </div>
                            <div class="rt-radio mb-3">
                                <input type="radio" name="radio" id="Small">
                                <label for="Small">Less than 6 months</label>
                            </div>
                            <div class="rt-stepbtnholder">
                                <a href="{{route('client.job.scope')}}" class="rt-btnmessage rt-btn">Back</a>
                                <a href="{{route('client.job.rate')}}" class="rt-btn">Next</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection






