@extends('layouts.client.master')
@section('title') Job Seekers @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-recomandedseeker">
                <div class="rt-sectiontitle">
                    <h2>Job Seekers</h2>
                </div>
                <div class="rt-jobsseekergrid">
                    <div class="rt-jobseeker">
                        <a href="{{route('client.job-seeker.detail')}}">
                            <figure class="rt-jobseekerbanner">
                                <img src="{{asset('assets/images/1.jpg')}}" alt="banner-image">
                            </figure>
                            <div class="rt-seekercontentholder">
                                <div class="rt-seekernamejdarea">
                                    <div class="rt-seekernameimg">
                                        <figure>
                                            <img src="{{asset('assets/images/profile.png')}}" alt="">
                                        </figure>
                                        <h3>Annette Black</h3>
                                    </div>
                                    <div class="rt-seekertitle">
                                        <h4>React Js, React Developer.</h4>
                                    </div>
                                </div>
                                <div class="rt-jobseekerratings">
                                    <ul>
                                        <li>
                                            <span>Price</span>
                                            <h4>200$</h4>
                                        </li>
                                        <li>
                                            <span>Delivery</span>
                                            <h4>3 day delivery</h4>
                                        </li>
                                        <li>
                                            <span>Rating</span>
                                            <h4>4.9</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="rt-jobseeker">
                        <figure class="rt-jobseekerbanner">
                            <img src="{{asset('assets/images/2.jpg')}}" alt="banner-image">
                        </figure>
                        <div class="rt-seekercontentholder">
                            <div class="rt-seekernamejdarea">
                                <div class="rt-seekernameimg">
                                    <figure>
                                        <img src="{{asset('assets/images/profile.png')}}" alt="">
                                    </figure>
                                    <h3>Annette Black</h3>
                                </div>
                                <div class="rt-seekertitle">
                                    <h4>React Js, React Developer.</h4>
                                </div>
                            </div>
                            <div class="rt-jobseekerratings">
                                <ul>
                                    <li>
                                        <span>Price</span>
                                        <h4>200$</h4>
                                    </li>
                                    <li>
                                        <span>Delivery</span>
                                        <h4>3 day delivery</h4>
                                    </li>
                                    <li>
                                        <span>Rating</span>
                                        <h4>4.9</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rt-jobseeker">
                        <a href="jobseekerdetail.html">
                            <figure class="rt-jobseekerbanner">
                                <img src="{{asset('assets/images/1.jpg')}}" alt="banner-image">
                            </figure>
                            <div class="rt-seekercontentholder">
                                <div class="rt-seekernamejdarea">
                                    <div class="rt-seekernameimg">
                                        <figure>
                                            <img src="{{asset('assets/images/profile.png')}}" alt="">
                                        </figure>
                                        <h3>Annette Black</h3>
                                    </div>
                                    <div class="rt-seekertitle">
                                        <h4>React Js, React Developer.</h4>
                                    </div>
                                </div>
                                <div class="rt-jobseekerratings">
                                    <ul>
                                        <li>
                                            <span>Price</span>
                                            <h4>200$</h4>
                                        </li>
                                        <li>
                                            <span>Delivery</span>
                                            <h4>3 day delivery</h4>
                                        </li>
                                        <li>
                                            <span>Rating</span>
                                            <h4>4.9</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="rt-jobseeker">
                        <figure class="rt-jobseekerbanner">
                            <img src="{{asset('assets/images/2.jpg')}}" alt="banner-image">
                        </figure>
                        <div class="rt-seekercontentholder">
                            <div class="rt-seekernamejdarea">
                                <div class="rt-seekernameimg">
                                    <figure>
                                        <img src="{{asset('assets/images/profile.png')}}" alt="">
                                    </figure>
                                    <h3>Annette Black</h3>
                                </div>
                                <div class="rt-seekertitle">
                                    <h4>React Js, React Developer.</h4>
                                </div>
                            </div>
                            <div class="rt-jobseekerratings">
                                <ul>
                                    <li>
                                        <span>Price</span>
                                        <h4>200$</h4>
                                    </li>
                                    <li>
                                        <span>Delivery</span>
                                        <h4>3 day delivery</h4>
                                    </li>
                                    <li>
                                        <span>Rating</span>
                                        <h4>4.9</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rt-jobseeker">
                        <a href="jobseekerdetail.html">
                            <figure class="rt-jobseekerbanner">
                                <img src="{{asset('assets/images/1.jpg')}}" alt="banner-image">
                            </figure>
                            <div class="rt-seekercontentholder">
                                <div class="rt-seekernamejdarea">
                                    <div class="rt-seekernameimg">
                                        <figure>
                                            <img src="{{asset('assets/images/profile.png')}}" alt="">
                                        </figure>
                                        <h3>Annette Black</h3>
                                    </div>
                                    <div class="rt-seekertitle">
                                        <h4>React Js, React Developer.</h4>
                                    </div>
                                </div>
                                <div class="rt-jobseekerratings">
                                    <ul>
                                        <li>
                                            <span>Price</span>
                                            <h4>200$</h4>
                                        </li>
                                        <li>
                                            <span>Delivery</span>
                                            <h4>3 day delivery</h4>
                                        </li>
                                        <li>
                                            <span>Rating</span>
                                            <h4>4.9</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="rt-jobseeker">
                        <figure class="rt-jobseekerbanner">
                            <img src="{{asset('assets/images/2.jpg')}}" alt="banner-image">
                        </figure>
                        <div class="rt-seekercontentholder">
                            <div class="rt-seekernamejdarea">
                                <div class="rt-seekernameimg">
                                    <figure>
                                        <img src="{{asset('assets/images/profile.png')}}" alt="">
                                    </figure>
                                    <h3>Annette Black</h3>
                                </div>
                                <div class="rt-seekertitle">
                                    <h4>React Js, React Developer.</h4>
                                </div>
                            </div>
                            <div class="rt-jobseekerratings">
                                <ul>
                                    <li>
                                        <span>Price</span>
                                        <h4>200$</h4>
                                    </li>
                                    <li>
                                        <span>Delivery</span>
                                        <h4>3 day delivery</h4>
                                    </li>
                                    <li>
                                        <span>Rating</span>
                                        <h4>4.9</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection







