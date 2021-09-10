<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Task</title>
</head>
<body>
    <div style="text-align: center;">
    <h1>Job Task</h1>
    <form action="{{  route('contact') }}" method="post">@csrf
        <input type="text" name="name" placeholder="Your Name"><br><br>
        <input type="email" name="email" placeholder="Your Email">
        <p>File Attachment</p>
        <input type="checkbox" name="cv"> CV
        <p> Are you interested in this job?</p>
        <input name="interest" type="radio" value="Yes">Yes
        <input name="interest" type="radio" value="No">No
        <p> Select Your Division</p>
        <select name="division" id="">
            <option value="Dhaka">Dhaka</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Khulna">Khulna</option>
            <option value="Mymenshingh">Mymenshingh</option>
            <option value="Barisal">Barisal</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Rajshahi">Rajshahi</option>
            <option value="Rangpur">Rangpur</option>
        </select><br><br>
        <input type="submit" value="Submit">
 
    </form>
</div>
</body>
</html>