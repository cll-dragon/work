<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:97:"E:\phpStudy\PHPTutorial\WWW\work\meeting1\public/../application/index\view\visitpeople\index.html";i:1575877016;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>鹏城实验室</title>
    <style>
        #father{
            /* width: 30%; */
            margin: 9rem auto;
            /* border: 0 solid #faffbd; */
            background-color: #e4dce4;
            height: 11rem;
        }
    </style>
</head>
<body>
    <div id="father">
        <form method="post" action="" onsubmit="return validate()" style="padding-top:3rem">
            <table cellspacing="0" cellpadding="0"  align="center">
                <tr>
                    <td style="padding-left: 1rem">
                        <table>
                            <tr>
                                <td>姓名：</td>
                                    <td>
                                        <input type="text" name="name" />
                                    </td>
                                </tr>
                            <tr>
                                <td>车牌号：</td>
                                <td>
                                    <input type="text" name="carNumber" value="粤"/>
                                </td>
                            </tr>
                            <tr>
                                <td>访客编号：</td>
                                <td>
                                    <input type="text" name="visitNumber" />
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" value="提交" class="button" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>