<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>USER PROFILE</h1>
        <div>USER DETAILS</div>
        <div>Name: {{$user->name}}</div>
        <div>Email: {{$user->email}}</div><br>
        <div>PROFILE</div>
        <div>Bio: {{$user->profile->bio}}</div>
        <div>School: {{$user->profile->school}}</div>
        <hr>
</body>
</html>
