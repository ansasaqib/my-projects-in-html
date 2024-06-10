<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
        width: 500px;
        padding: 20px;

    }

    form>label,form>input{
        margin-bottom: 5px;
    }
</style>
<body>
    
    <form action="logic.php" method="post" enctype="multipart/form-data" >
        <label for="">Insert Image</label>
        <input type="file" name="img" id="">
        
        <label for="">Enter Name</label>
        <input type="text" placeholder="John etc" name="username">
        <button type="submit" name="add">Add</button>
    </form>
</body>
</html>