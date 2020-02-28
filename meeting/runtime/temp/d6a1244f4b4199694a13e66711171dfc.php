<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"E:\phpStudy\PHPTutorial\WWW\work\meeting1\public/../application/index\view\visitor\index.html";i:1575540297;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>鹏城实验室</title>
    <style>
        #father{
            margin: 50px auto;
            padding: 0;
            width: 900px;
            min-height: 100px;
            /* height:auto; */
            /* border: 1px solid red; */
        }
        #f{
            width: 900px;
            height: 34px;
            line-height: 34px;
            /* border: 1px solid green; */
            /* background-color: red; */
            color: white;
            text-align: center;
            font-weight: bold;
        }
        #f1{
            width: 900px;
            height: 34px;
            line-height: 34px;
            /* border: 1px solid green; */
            background-color: #5b9bd5;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        #f2{
            width: 900px;
            height: 35px;
            /* border: 1px solid green; */
            background-color: #9bc2e6;
        }
        .ff2{
            float: left;
            width: 178px;
            height: 34px;
            line-height: 34px;
            border: 1px solid black;
            color: white;
            text-align: center;
            font-weight: bold;
        }
        #f3{
            width: 902px;
            min-height: 25px;
            /* _height: 25px; */
            /* overflow: hidden; */
            float: left;
            /* border: 1px solid orange; */
            background-color: #ffffff;
        }
        .ff3{
            float: left;
            width: 178px;
            min-height: 25px;
            padding-top: 6px;
            border: 1px solid black;
            color: black;
            text-align: center;
            font-weight: bold;
        }
        /* 将a链接变为按钮 */
        .bt1{
            font:  16px Arial;
            text-decoration: none;
            background-color: #EEEEEE;
            color: #333333;
            margin-left: 10px;
            padding: 1px 6px 1px 6px;
            border-top: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            border-left: 1px solid #ccc;
        }
        a:link,a:visited{
            text-decoration: none;
        }
        a:hover,a:active{
            text-decoration: underline;
            /* cursor: pointer; */
        }
    </style>
</head>
<body>
    <div id="father">
        <div id="f">
            <form action="" method="post">
                <input type="text" name="da" id="" value="<?php echo $d; ?>">
                <input type="submit" value="日期查询">
                <a href="<?php echo url('export','da='.$d); ?>" class="bt1">导出</a>
            </form>
        </div>
        <div id="f1">访客申请(<?php echo $d; ?>)</div>
        <div id="f2">
            <div class="ff2">姓名</div>
            <div class="ff2">单位</div>
            <div class="ff2">车牌号</div>
            <div class="ff2">来访时间</div>
            <div class="ff2">离开时间</div>
        </div>
        <?php foreach($data as $v): ?>
        <div id="f3">
            <div class="ff3"><?php echo $v['person_name']; ?></div>
            <div class="ff3"><?php echo $v['company']; ?></div>
            <?php if($v['car_number']): ?>
            <div class="ff3"><?php echo $v['car_number']; ?></div>
            <?php else: ?>
            <div class="ff3"></div>
            <?php endif; ?>
            
            <div class="ff3"><?php echo $v['come_date']; ?></div>
            <div class="ff3"><?php echo $v['leave_date']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>