<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">     
    <h2>Example: Comment System with Ajax, PHP & MySQL</h2>     
    <form method="POST" id="commentForm">
        <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
        </div>
        <div class="form-group">
            <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
        </div>
        <span id="message"></span>
        <div class="form-group">
            <input type="hidden" name="commentId" id="commentId" value="0" />
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
        </div>
    </form>     
    <div id="showComments"></div>   
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="comments.js"></script>

</body>
</html>
