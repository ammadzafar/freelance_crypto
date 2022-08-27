@extends('layouts.client.master')
@section('title') Job Rate @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-addjob">
                <form class="rt-formtheme">
                    <fieldset>
                        <div class="rt-addjobtitlearea">
                            <h1>Next, estimate the scope of your work.</h1>
                            <p>Consider the size of the project and the time it will take</p>
                            <div class="rt-jobheadlinearea rt-jobsizearea rt-addhourrate">
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
                            </div>
                        </div>
                        <div class="rt-jobheadlinearea rt-jobsizearea">
                            <div class="rt-setrate">
                                <ul>
                                    <li>
                                        <div class="rt-checkrate">
                                            <input type="radio" name="radio" id="radio7" checked>
                                            <label for="radio7">
                                                <i class="icon-clock"></i>
                                                <h3>Hourly Rate</h3>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rt-checkrate">
                                            <input type="radio" name="radio" id="radio8">
                                            <label for="radio8">
                                                <i class="icon-price-tag"></i>
                                                <h3>Fixed Rate</h3>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-group">
                                    <label>Hourly Rate</label>
                                    <div class="rt-haslayout rt-inputwithicon">
                                        <input type="text" name="price" placeholder="65.90">
                                        <i class="icon-coin-dollar"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam, est quis efficitur posuere, libero nibh pretium velit, quis accumsan nulla sem vitae augue.</p>
                                </div>
                            </div>
                            <div class="rt-stepbtnholder">
                                <a href="{{route('client.job.time')}}" class="rt-btnmessage rt-btn">Back</a>
                                <a href="{{route('client.job.detail')}}" class="rt-btn">Next</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection















