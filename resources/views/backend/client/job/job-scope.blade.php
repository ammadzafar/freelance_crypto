@extends('layouts.client.master')
@section('title') Job Scope @endsection
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
                                <div class="rt-radio">
                                    <input type="radio" name="radio" id="radio">
                                    <label for="radio">Large</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="rt-radio">
                                    <input type="radio" name="radio" id="Medium">
                                    <label for="Medium">Medium</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="rt-radio">
                                    <input type="radio" name="radio" id="Small">
                                    <label for="Small">Small</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.</p>
                                </div>
                            </div>
                            <div class="rt-stepbtnholder">
                                <a href="{{route('client.job.skill')}}" class="rt-btnmessage rt-btn">Back</a>
                                <a href="{{route('client.job.time')}}" class="rt-btn">Next</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection



















