<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- Tạo form thêm mới Category --}}
    <form action="" method="post">

        @csrf
        
        
        <fieldset class="form-group">
        
        <label>Name</label>
        
        <input class="form-control" name="username" placeholder="Nhập tên ">
        
        <label>Email</label>
        
        <input class="form-control" name="email" placeholder="Nhập email">
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="Nhap password">
        <label>Role</label>
        <input class="form-control" name="role">

        </fieldset>
        
        <button type="submit" class="btn btn-success">Submit Button</button>
        
        <button type="reset" class="btn btn-primary">Reset Button</button>
        
    </form>
</body>
</html>