<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="stylesheet" href="login.css">
    <title>Moment Studio</title>
</head>
<body>
    <div class="container">
        <img class="logo" src="Logo Moment Studio.png"/>
        <form>
            <input type="text" class="username" placeholder=" Nama Pengguna" name="Nama"><br>
            <input type="password" class="password" placeholder=" Kata Sandi" name="Password"><br>
            <input type="checkbox" checked="click" class="checkbox">
            <label for="checkbox" class="checkbox-label">Show Password</label>
            <a href="tambah.php">
                <button type="submit" class="submit">Masuk</button>
            </a>
        </form>
    </div>    
</body>
    
<script type="text/javascript">
    $(document).ready(function(){
        $('.checkbox').click(function(){
            if($(this).is(':checked')){
                $('.password').attr('type','text');
            }else{
                $('.password').attr('type','password');
            }
        });
    });
</script>
    
</html>
