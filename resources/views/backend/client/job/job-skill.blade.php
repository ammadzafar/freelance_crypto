@extends('layouts.client.master')
@section('title') Job Skill @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-addjob">
                <form class="rt-formtheme">
                    <fieldset>
                        <div class="rt-addjobtitlearea">
                            <h1>What are the main Skills required for your work?</h1>
                        </div>
                        <div class="rt-jobheadlinearea">
                            <div class="form-group">
                                <label>Search skills or add your own</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Popular skills for your work</label>
                            </div>
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
                                <li>
                                    <a href="javascript: void(0);">Facebook</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Instagram</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Social Media Marketing</a>
                                </li>
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
                            <div class="rt-stepbtnholder">
                                <a href="{{route('client.post.job')}}" class="rt-btnmessage rt-btn">Back</a>
                                <a href="{{route('client.job.scope')}}" class="rt-btn">Next</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
@endsection


























