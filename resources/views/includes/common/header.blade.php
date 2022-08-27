<header class="rt-header rt-haslayout">
    <strong class="rt-logo">
        <a href="{{route('client.index')}}">
            <img src="{{asset('assets/images/logo.svg')}}" alt="logo">
        </a>
    </strong>
    <div class="rt-navigation">
        <nav class="rt-nav">
            <ul>
                <li>
                    <a href="{{route('client.index')}}">Jobs</a>
                </li>
                <li>
                    <a href="{{route('client.job-seekers')}}">Job Seekers</a>
                </li>
{{--                <li>--}}
{{--                    <a href="chat.html">Messages</a>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </div>
    <div class="rt-headerrightarea">
        <form class="rt-formtheme">
            <fieldset>
                <div class="form-group rt-inputwithicon">
                    <input type="text" name="search" placeholder="Search">
                    <i class="icon-search-normal"></i>
                </div>
            </fieldset>
        </form>
        <button type="button" class="rt-btnbell rt-btnvault" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="icon-card"></i>
        </button>
        <div class="rt-notifactiondropdown">
            <div class="dropdown">
                <button class="rt-btnbell" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <i class="icon-notification1"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="rt-profiledropdown">
            <div class="dropdown">
                <a class="rt-btnprofile" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    <img src="{{asset('assets/images/profile.png')}}" alt="">
                    <span>{{auth()->user()->name}}</span>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
{{--                    <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                    <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
</header>
