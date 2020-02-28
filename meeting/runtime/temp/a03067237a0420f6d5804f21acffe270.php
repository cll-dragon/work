<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"E:\phpStudy\PHPTutorial\WWW\work\meeting1\public/../application/index\view\login\index.html";i:1571817063;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>鹏城实验室</title>
    <style>
        #fa{
            width: 30%;
            margin: 9rem auto;
            /* border: 0 solid #faffbd; */
            background-color: #e4dce4;
            height: 11rem;
        }
    </style>
</head>
<body>
    <div id="fa">
        <form method="post" action="" onsubmit="return validate()" style="padding-top:3rem">
            <table cellspacing="0" cellpadding="0"  align="center">
                <tr>
                    <td style="padding-left: 1rem">
                        <table>
                            <tr>
                                <td>用户名：</td>
                                <td>
                                    <input type="text" name="username" />
                                </td>
                            </tr>
                            <tr>
                                <td>密码：</td>
                                <td>
                                    <input type="password" name="password" />
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" value="登录" class="button" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
          <input type="hidden" name="act" value="signin" /> 
        </form>
    </div>
</body>
</html>