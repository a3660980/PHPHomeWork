<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>新增</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="hidden" name="func" value="do_insert_page.php"/>
            學號:<input type="text" name="no"/><br>
            姓名:<input type="text" name="name"/> <br>
            電話:<input type="text" name="tel"/></br>
            <input type="submit" value="新增"/> 
            <input type="reset" value="重設" />
        </form>
    </body>
</html>
