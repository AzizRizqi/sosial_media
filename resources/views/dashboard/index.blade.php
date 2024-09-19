{{-- @extends('layouts.app')

@section('title', 'Dashboard Page')


@section('content') --}}
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Twitter</title>
    <link rel='stylesheet' href="{{ asset('twit/css/globalstyles.css') }}">
    <link rel='stylesheet' href="{{ asset('twit/css/header.css') }}">
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/profilebanner.css') }}"> --}}
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/profileactions.css') }}"> --}}
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/maincontent.css') }}"> --}}
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/profile.css') }}"> --}}
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/timeline.css') }}"> --}}
    {{-- <link rel='stylesheet' href="{{ asset('twit/css/widgets.css') }}"> --}}
</head>

<body>

    <header id="main-header">
        <div class="wrapper">
            <nav>
                <ul>
                    <li>
                        <a href="/">
                            <img src="{{ asset('twit/images/home.svg') }}" alt="home" />
                            <p>Home</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="{{ asset('twit/images/notification.svg') }}" alt="notifications" />
                            <p>Notifications</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <img src="{{ asset('twit/images/message.svg') }}" alt="messages" />
                            <p>Messages</p>
                        </a>
                    </li>
                </ul>
            </nav>

            <div>
                <img src="{{ asset('twit/images/logo.svg') }}" alt="Logo Twitter" />
            </div>

            <section class="main-header-right-side">

                <input type="text" placeholder="Search Twitter" />

                <div class="info">
                    <a href="{{ route('profile.index') }}" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </section>
            {{-- // status.edit view
                <form method="POST" action="{{ route('status.update', $statuse->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="status" value="{{ $statuse->status }}" />
                    <button type="submit">Update Status</button>
                </form> --}}
        </div>
    </header>


    
    {{-- <section class="profile-banner">
        <div class="wrapper">
            <a href="">
                <img src="{{ auth()->user()->name }}" alt="Banner" />
            </a>
        </div>
    </section> --}}
    {{-- <section class="profile-actions">
            <div class="wrapper">

                <ul>
                    <li class="active">
                        <a href="/">
                            <Strong>Tweets</Strong>
                            <p>0</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <Strong>Following</Strong>
                            <p>292</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <Strong>Followers</Strong>
                            <p>2.5M</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <Strong>Favorites</Strong>
                            <p>193</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <Strong>Lists</Strong>
                            <p>30</p>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <Strong>Moments</Strong>
                            <p>0</p>
                        </a>
                    </li>
                </ul>

                <div class="actions">
                    <button>Follow</button>
                    <a href="/more">
                        <img src="{{ asset('twit/images/more.svg') }}" alt="More" />
                    </a>
                </div>
            </div>
        </section> --}}

    {{-- <section class="main-content wrapper">
        <aside class="profile">
            <a href="http://www.nintendo.com">
                <img class="avatar" src="{{ asset('twit/images/avatar.png') }}" alt="Avatar" />
            </a>

            <header>
                <h1>{{ auth()->user()->name }}</h1>
                <span>@||{{ auth()->user()->name }}</span>
                <p>wkwkwkwkwkwkw</p>
            </header> --}}
    {{-- <ul>
                    <li>
                        <img src="{{ asset('twit/images/place.svg') }}" alt="Place" />
                        medan
                    </li>
                    <li>
                        <img src="{{ asset('twit/images/url.svg') }}" alt="Website" />
                        <a href="http://www.nintendo.com">azizrizqi2005@gmail.com</a>
                    </li>
                    <li>
                        <img src="{{ asset('twit/images/joined.svg') }}" alt="Joined" />
                        joinlah kuy
                    </li>
                    <li>
                        <img src="{{ asset('twit/images/born.svg') }}" alt="Born" />
                       anak 2005
                    </li>
                </ul>
                <div class="left-sidebar">
                    <div class="widget followers">
                        <strong><img src="{{ asset('twit/images/followers.svg') }}" alt="Followers" />52 followers that
                            you know</strong>
                        <nav>
                            <a href="https://twitter.com/Reggie">
                                <img src="{{ asset('twit/images/follower01.png') }}" alt="Reggie Fils-Aime" />
                            </a>
                            <a href="http://www.nintendo.com">
                                <img src="{{ asset('twit/images/follower02.jpg') }}" alt="Masahiro Sakurai" />
                            </a>
                            <a href="https://twitter.com/SuperMario_UK">
                                <img src="{{ asset('twit/images/follower03.png') }}" alt="Super Mario Bros. UK" />
                            </a>
                            <a href="https://twitter.com/Pokemon">
                                <img src="{{ asset('twit/images/follower04.jpg') }}" alt="Pokémon" />
                            </a>
                            <a href="https://twitter.com/sonic_hedgehog">
                                <img src="{{ asset('twit/images/follower05.png') }}" alt="Sonic the Hedgehog" />
                            </a>
                            <a href="https://twitter.com/CapcomUSA_">
                                <img src="{{ asset('twit/images/follower06.jpg') }}" alt="Capcom USA" />
                            </a>
                            <a href="https://twitter.com/NintendoVS">
                                <img src="{{ asset('twit/images/follower07.jpg') }}" alt="Nintendo Versus" />
                            </a>
                            <a href="https://twitter.com/Twitch">
                                <img src="{{ asset('twit/images/follower08.jpg') }}" alt="Twitch" />
                            </a>
                            <a href="https://twitter.com/SEGA">
                                <img src="{{ asset('images/follower10.jpg') }}" alt="Sega" />
                            </a>
                        </nav>
                    </div>

                    <div class="widget media">
                        <strong><img src="{{ asset('images/images.svg') }}" alt="Media" />155 Photos and
                            videos</strong>
                        <nav>
                            <a href="/">
                                <img src="{{ asset('images/media01.jpg') }}" alt="The Legend of Zelda calendar" />
                            </a>
                            <a href="/">
                                <img src="{{ asset('images/media02.png') }}" alt="Mario Kart Tour" />
                            </a>
                            <a href="/">
                                <img src="{{ asset('images/media03.jpg') }}" alt="Kirby art" />
                            </a>
                            <a href="/">
                                <img src="{{ asset('images/media04.png') }}"
                                    alt="Fire Emblem Echoes of Valentia cover art" />
                            </a>
                            <a href="/">
                                <img src="{{ asset('images/media05.jpg') }}" alt="Metroid Samus art" />
                            </a>
                            <a href="/">
                                <img src="{{ asset('images/media06.jpeg') }}" alt="Star Fox 64 cover art" />
                            </a>
                        </nav>
                    </div>
                </div>
            </aside> --}}

    {{-- <article class="timeline">
                <nav>
                    <a class="active" href="/">Tweets</a>
                    <a href="/replies">Tweets & replies</a>
                    <a href="/media">Media</a>
                    <a href="likes">Likes</a>
                </nav>
                <form action="">
                <ul>
                    <li>
                        <a href="/">
                            <div class="tweet">
                                <div class="avatar">
                                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar" />
                                </div>
                                <div class="content">
                                    <header>
                                        <strong>Nintendo of America</strong>
                                        <span>@NintendoAmerica · Last hour</span>
                                    </header>
                                    @foreach ($statuse as $item)
                                    <p></p>

                                    <div class="content-images">
                                        <img src="{{ asset('images/content01.gif') }}" />
                                        <img src="{{ asset('images/content02.jpg') }}" />
                                    </div>
                                    <ul>
                                        <li>
                                            <p>
                                                <img src="{{ asset('images/comments.svg') }}" alt="Comments" />85
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <img src="{{ asset('images/retweet.svg') }}" alt="Retweets" />257
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <img src="{{ asset('images/like.svg') }}" alt="Likes" />1.7k
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <img src="{{ asset('images/message.svg') }}" alt="Share" />
                                            </p>
                                        </li>
                                    </ul>
                                </form>
                                </div>
                                @endforeach
                            </div>
                        </a>
                    </li>
                </ul>
            </article> --}}

    {{-- <aside class="widgets">
                <div class="widget follow">
                    <div>
                        <h1>You might like</h1>
                    </div>
                    <ul>
                        <li>
                            <a href="http://www.nintendo.com">
                                <img src="{{ asset('images/follower13.jpg') }}" alt="Shigeru Miyamoto" />
                                <div>
                                    <strong>Shigeru Miyamoto</strong>
                                    <span>@ShigeruMiyamoto</span>
                                </div>
                                <button>Follow</button>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/thetruebowser">
                                <img src="{{ asset('images/follower11.jpg') }}" alt="Doug Bowser" />
                                <div>
                                    <strong>Doug Bowser</strong>
                                    <span>@thetruebowser</span>
                                </div>
                                <button>Follow</button>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/rareltd">
                                <img src="{{ asset('images/follower12.jpg') }}" alt="Rare Ltd." />
                                <div>
                                    <strong>Rare Ltd.</strong>
                                    <span>@RareLtd</span>
                                </div>
                                <button>Follow</button>
                            </a>
                        </li>
                        <li>
                            <a href="/follow">
                                <p>Show more</p>
                            </a>
                        </li>
                    </ul>
                </div> --}}

    {{-- <div class="widget trends">
                    <div>
                        <h1>Trends</h1>
                    </div>
                    <ul>
                        <li>
                            <a href="/">
                                <span>Entertainment · Last night</span>
                                <strong>#Marvel</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <span>Art · Trending</span>
                                <strong>#pixelart</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <span>Gaming news · Last hour</span>
                                <strong>#nintendodirect</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <span>Programming · Trending</span>
                                <strong>#javascript</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/">
                                <span>Trending in United States</span>
                                <strong>#USMNT</strong>
                            </a>
                        </li>
                        <li>
                            <a href="/trending">
                                <p>Show more</p>
                            </a>
                        </li>
                    </ul>
                </div> --}}

    {{-- <footer>
                    <nav>
                        <a href="/">Terms</a>
                        <a href="/">Privacy policy</a>
                        <a href="/">Cookies</a>
                        <a href="/">Ads info</a>
                        <a href="/">More</a>
                        <p href="/">© 2020 Twitter, Inc.</p>
                    </nav>
                </footer> --}}
    {{-- </aside> --}}
    {{-- </section> --}}
    {{-- </header> --}}
</body>

</html>
{{-- @endsection --}}
