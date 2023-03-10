<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>
    <div class="profile_nav_container">
        <div class="profile__nav">
            <h1>Social</h1>
            <input type="text" placeholder="Search for people">
            <img class="profile__pic" src="assets/images/profile.jpeg" alt="profile pic">
        </div>
    </div>
    <div class="profile_cover_container">
            <div class="profile__cover">
                <img class="profile_cover_pic" src="assets/images/cover.jpeg" alt="cover pic">
                <img class="profile_cover_profile_pic" src="assets/images/profile.jpeg" alt="profile pic">
                <span class="profile__name">Name</span>
                <div>
                    <div class="menu__buttons">Timeline</div>
                    <div class="menu__buttons">About</div>
                    <div class="menu__buttons">Friends</div>
                    <div class="menu__buttons">Photos</div>
                    <div class="menu__buttons">Settings</div>
                </div>
            </div>
            <div class="profile__content">
                <div class="profile_content_left">
                    <div class="profile_content_friends">
                       <span>Firends</span>
                       <div class="friends__list">
                            <img class="friends__img" src="assets/images/profile.jpeg" alt="">
                            <span class="friend_name">First user</span>
                       </div>
                       <div class="friends__list">
                            <img class="friends__img" src="assets/images/profile.jpeg" alt="">
                            <span class="friend_name">First user</span>
                       </div>
                    </div>
                </div>
                <div class="profile_content_right">
                    <div class="post__area">
                        <textarea placeholder="Whats in your mind.."></textarea>
                        <input type="submit" id="post_button" value="Post">
                    </div>
                    <div class="friends__posts">
                        <div class="posts">
                            <div>
                                <img class="friends__img" src="assets/images/profile.jpeg" alt="">
                            </div>
                            <div>
                                <div class="friend__name" >First Guy</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ex totam, dolorem qui ab eos eligendi in modi</p>
                                <a href="#" >Like</a> . <a href="#">Comment</a> . <span class="post__date">December 24 2022</span>
                            </div>
                        </div>
                        <div class="posts">
                            <div>
                                <img class="friends__img" src="assets/images/profile.jpeg" alt="">
                            </div>
                            <div>
                                <div class="friend__name" >First Guy</div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ex totam, dolorem qui ab eos eligendi in modi</p>
                                <a href="#" >Like</a> . <a href="#">Comment</a> . <span class="post__date">December 24 2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     </div>
     
</body>
</html>