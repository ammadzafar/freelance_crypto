@extends('layouts.client.master')
@section('title') Job Skill @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-addjob rt-finshjobpost">
                <form class="rt-formtheme">
                    <fieldset>
                        <div class="rt-addjobtitlearea">
                            <h1>Now just finish and review your job post</h1>
                            <div class="rt-jobheadlinearea rt-jobsizearea rt-addhourrate">
                                <div class="form-group">
                                    <label>Headline</label>
                                    <input type="text" placeholder="Social media">
                                </div>
                                <div class="form-group">
                                    <label>Describe your work</label>
                                    <textarea placeholder="Describe your work"></textarea>
                                </div>
                                <div class="rt-jobcontentreview">
                                    <div class="rt-jobreview">
                                        <h4>Category</h4>
                                        <a href="javascript: void(0);">
                                            <i class="icon-edit-2"></i>
                                        </a>
                                        <div class="rt-description">
                                            <p>Social media marketing</p>
                                        </div>
                                    </div>
                                    <div class="rt-jobreview">
                                        <h4>Skills</h4>
                                        <a href="javascript: void(0);">
                                            <i class="icon-edit-2"></i>
                                        </a>
                                        <ul class="rt-topskilgrid">
                                            <li>
                                                <a href="javascript: void(0);">Facebook</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Instagram</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Social Media Marketing</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="rt-jobreview">
                                        <h4>Duration</h4>
                                        <a href="javascript: void(0);">
                                            <i class="icon-edit-2"></i>
                                        </a>
                                        <div class="rt-description">
                                            <p>More than 6 months</p>
                                        </div>
                                    </div>
                                    <div class="rt-jobreview">
                                        <h4>Hourly Rate</h4>
                                        <a href="javascript: void(0);">
                                            <i class="icon-edit-2"></i>
                                        </a>
                                        <div class="rt-description">
                                            <p>65 $</p>
                                        </div>
                                    </div>
                                    <div class="rt-stepbtnholder">
                                        <a href="{{route('client.job.rate')}}" class="rt-btnmessage rt-btn">Back</a>
                                        <a href="{{route('client.index')}}" class="rt-btn">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection







