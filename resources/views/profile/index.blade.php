<head>
    <link rel="stylesheet" href="{{ asset('twit/css.profiles.css') }}">
</head>
<div class="profile-container">
    <div class="profile-header">
        <div class="profile-avatar">
            <img src="{{ asset('twit/images/avatar.png') }}" alt="Avatar">
        </div>
        <div class="profile-info">
            <h2>{{ auth()->user()->name }}</h2>
            <p></p>
        </div>
    </div>
    <div class="profile-stats">
        <ul>
            <li>
                <span>Tweets</span>
                <strong></strong>
            </li>
            <li>
                <span>Following</span>
                <strong></strong>
            </li>
            <li>
                <span>Followers</span>
                <strong></strong>
            </li>
        </ul>
    </div>
    <div class="profile-tabs">
        <ul>
            <li><a href="#" class="active">Tweets</a></li>
            <li><a href="#">Tweets & replies</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Likes</a></li>
        </ul>
    </div>
    <div class="profile-timeline">
        <!-- tweets will be displayed here -->
    </div>
</div>
