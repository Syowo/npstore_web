<?php
/* Smarty version 3.1.32, created on 2019-02-04 10:36:09
  from 'E:\xampp\htdocs\html\shop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c580789915718_64536656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9787b6b1b5cf2bae9f32121d5dfc547b6ee6f775' => 
    array (
      0 => 'E:\\xampp\\htdocs\\html\\shop.html',
      1 => 1549272967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c580789915718_64536656 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="UserContent-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/web.css">
    <link rel="stylesheet" href="../css/test.css">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>無人商店</title>
    <style type="text/css">
        body{
            width: 90vw;
            height: 90vh;
        }
        #main{
            width:100% ;
            height:100% ;
            left:5% ;
        }
        #cam{
            width:45% ;
            height:100% ;
            position:relative ;
            left:15% ;
            top:5% ;
            border:2px #000000 solid;
        }
        #number{
            height:10% ;
            position:relative ;
            top:5% ;
            border:2px #000000 solid;
        }
        #status{
            height:10% ;
            position:relative ;
            top:5% ;
            border:2px #000000 solid;
        }
        #goods{
            height:90% ;
            position:relative ;
            top:5% ;
            border:2px #000000 solid;
        }
        #customer{
            height:90% ;
            position:relative ;
            top:5% ;
            border:2px #000000 solid;
        }
        #b2{
            line-height:275%;
            position:relative ;
            width:45% ;
            left:15% ;
            text-align:center;
        }
        #b3{
            line-height:275%;
            position:relative ;
            width:10% ;
            left:15% ;
            text-align:center;
        }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            var $i = 0 ;
            function test(){
                $i++ ;
                $.ajax({
                    method:'GET' ,
                    data: { i:$i } ,
                    url:'../php/test.php' ,
                    success: function( response ){
                        $("#cam").html(response) ;
                    }
                })
            };
            setInterval(test,100) ;
        });
    <?php echo '</script'; ?>
>
</head>
<body>
    <div id="main"class="container row">
        <div id="cam" >
            hi
        </div>

        <div id="b2">
            <div id="number">
                87號櫃台處理中
            </div>
            <div id="goods">
                34
            </div>
        </div>
        <div id="b3">
            <div id="status">
                處理中
            </div>
            <div id="customer">
                78
            </div>
        </div>

    </div>

</body>
</html>
<?php }
}
