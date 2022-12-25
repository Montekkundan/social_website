<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline</title>
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/timeline.css">
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
            
            <div class="profile__content">
                <div class="profile_content_left">
                    <div class="profile_content_friends">
                       <img class="timeline_profile_pic" src="assets/images/profile.jpeg" alt="timeline profile pic">
                       <span class="timeline_profile_name">Name</span>
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