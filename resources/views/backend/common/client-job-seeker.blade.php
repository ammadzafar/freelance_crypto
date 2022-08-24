@extends('layouts.auth')
@section('title') client | job seeker @endsection
@section('content')
    <div class="rt-wrapper rt-nopaddingwrapper">
        <!--************************************
                Login Start
        *************************************-->
        <div class="rt-loginpagewrapper">
            <div class="rt-loginpage rt-rolepage">
                <strong class="rt-loginpagelogo">
					<span>
						<img src="{{asset('assets/images/logo.svg')}}" alt="logo">
					</span>
                </strong>
                <form class="rt-formtheme">
                    <fieldset>
                        <legend>Join as a client or job seeker</legend>
                        <div class="rt-selectroleholder">
                            <input type="hidden" name="role" value="" class="selected_role">
                            <div class="rt-selectrole">
                                <input type="radio" name="role" id="role" value="client" class="role">
                                <label for="role">
                                    <i class="icon-icon"></i>
                                    <p>I’m a client, hiring for
                                        work</p>
                                </label>
                            </div>
                            <div class="rt-selectrole">
                                <input type="radio" name="role" id="role1" value="job-seeker" class="role">
                                <label for="role1">
                                    <i class="icon-icon"></i>
                                    <p>I’m a Job seeker, looking for
                                        work</p>
                                </label>
                            </div>
                        </div>
                        <div class="form-group rt-rolepagebtn">
                            <button {{--href="{{route('register')}}"--}} type="button" class="rt-btn rt-btn-lg continue-btn" >Continue</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <!--************************************
                Login End
        *************************************-->
    </div>
@endsection
@section('script')
        <script>
            $(document).ready(function() {
                toastr.info('Select Your role in order to proceed');

                $(document).on('click','.role',function () {
                    $('.selected_role').val($(this).val());
                })

                $(document).on('click','.continue-btn',function () {
                    if ($('.selected_role').val()){
                        localStorage.setItem('role', $('.selected_role').val());
                        window.location.href = '{{route('register')}}';
                    }else {
                        toastr.info('Select Your role in order to proceed');
                    }
                })
            });
        </script>
@endsection
