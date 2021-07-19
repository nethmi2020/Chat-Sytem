<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript"  src="main.js"></script>
    
</head>
<body onload="LoadData()">
    
<div class="container mt-5">
    <h1 class="text-center">Simple chat system</h1>
    <form action="" name="frm1" method="post">
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" class="form-control"  name="name">
        </div>
        <div class="form-group">
            <label for="comment">Message</label>
            <textarea name="msg"  rows="5" class="form-control" ></textarea>
        </div>
        <input type="button" value="Send" class="btn btn-primary" id="butsave">
    </form>
</div>

<div class="container mt-5 bg-dark text-light p-5">
    <h2>Messages</h2>
    <table class="table table-dark table-striped" id="MyTable">
        <tbody id="record">

        </tbody>
    </table>
</div>
</body>

</html>