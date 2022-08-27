@extends('layouts.client.master')
@section('title') Dashboard @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-jobpostingarea">
                <div class="rt-jobsarea">
                    <div class="rt-sectiontitle">
                        <h2>Your Postings</h2>
                        <a href="{{route('client.post.job')}}" class="rt-btn rt-btn-sm">Post a Job</a>
                    </div>
                    <div class="rt-jobstable">
                        <table class="rt-tabletheme">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Bids</th>
                                <th>Messaged</th>
                                <th>Hired</th>
                                <th>Created Time</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Social Media</td>
                                <td>2</td>
                                <td>00</td>
                                <td>02</td>
                                <td>26 sec ago</td>
                                <td>
                                    <ul class="rt-action">
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-edit-2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>2</td>
                                <td>00</td>
                                <td>02</td>
                                <td>26 sec ago</td>
                                <td>
                                    <ul class="rt-action">
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-edit-2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>2</td>
                                <td>00</td>
                                <td>02</td>
                                <td>26 sec ago</td>
                                <td>
                                    <ul class="rt-action">
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-edit-2"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="rt-haslayout py-3 text-center">
                            <a href="{{route('client.all-jobs')}}" class="rt-btn">View All</a>
                        </div>
                    </div>
                </div>
                <div class="rt-explorarea">
                    <ul>
                        <li>
                            <a href="javascript: void(0);">
                                <em>
                                    <i class="icon-message-text"></i>
                                </em>
                                <span>Invite Candidates to apply</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <em>
                                    <i class="icon-card"></i>
                                </em>
                                <span>Add billing method</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <em>
                                    <i class="icon-search-normal1"></i>
                                </em>
                                <span>Explore</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rt-recomandedseeker">
                <div class="rt-sectiontitle">
                    <h2>Recommended for you</h2>
                </div>
                <div class="rt-jobsseekergrid">
                    <div class="rt-jobseeker">
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
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
