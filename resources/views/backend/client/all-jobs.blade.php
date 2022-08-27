@extends('layouts.client.master')
@section('title') All Jobs @endsection
@section('content')
    <main class="rt-main">
        <div class="rt-pagecontent">
            <div class="rt-jobpostingarea">
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
                            <td><a href="budis.html" class="rt-linkbuid">Social Media</a></td>
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
                </div>
            </div>
        </div>
    </main>
@endsection







