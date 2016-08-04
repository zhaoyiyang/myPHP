<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>我的主页</title>
    </head>
    <script type="text/javascript">
 
    </script>
    <body>
        <form id="fm1" method="post" action="">
            <input name="username" type="text" value="">
            <input name="sb" type="submit" value="提交">
        </form>
        <?php
            $con=mysql_connect("localhost","root","");

            
            mysql_select_db("test",$con);

            
            @$username =$_POST['username'];
            $sql = "insert into tb_user(name) values ('$username')";
            mysql_query($sql,$con);
         ?>
    </body>
</html>
