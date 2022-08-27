@extends('layouts.client.master')
@section('title') Job Seekers @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-jobseekerdetail">
                <figure class="rt-detailbanner">
                    <img src="{{asset('assets/images/5.png')}}" alt="">
                </figure>
                <div class="rt-selectserviece">
                    <div class="rt-serviceheading">
                        <h3>Select Service</h3>
                    </div>
                    <div class="rt-radioform">
                        <form class="rt-formtheme">
                            <fieldset>
                                <div class="rt-radiogroup">
                                    <div class="rt-radio">
                                        <input type="radio" name="radio" id="radio">
                                        <label for="radio">Starter <span>200$</span> </label>
                                    </div>
                                    <div class="rt-radio">
                                        <input type="radio" name="radio" id="radio1">
                                        <label for="radio1">Standard<span>400$ </span> </label>
                                    </div>
                                    <div class="rt-radio">
                                        <input type="radio" name="radio" id="radio2">
                                        <label for="radio2">Advanced <span>1000$</span> </label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="rt-summary">
                        <ul>
                            <li>
                                <span>Delivery Time</span>
                                <span>01</span>
                            </li>
                            <li>
                                <span>Number of Revisions</span>
                                <span>02</span>
                            </li>
                            <li>
                                <span>Design Customization</span>
                                <span>05</span>
                            </li>
                            <li>
                                <span>Responsive Design</span>
                                <span>Perfect</span>
                            </li>
                            <li>
                                <span>Number of pages</span>
                                <span>02</span>
                            </li>
                            <li>
                                <span>Source Code</span>
                                <span>Accurate</span>
                            </li>
                        </ul>
                    </div>
                    <div class="rt-btnholder">
                        <a href="chat.html" class="rt-btn rt-btnmessage">Message</a>
                        <a href="checkout.html" class="rt-btn">Continue	</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection







