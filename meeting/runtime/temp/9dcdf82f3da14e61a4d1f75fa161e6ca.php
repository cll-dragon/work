<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"E:\phpStudy\PHPTutorial\WWW\work\week\public/../application/index\view\calend\next.html";i:1568189257;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>每周考勤表</title>
    <style>
        body{
            background-color: #dcf4e6;
        }
        a:link,a:visited{
            text-decoration: none;
        }
        a:hover,a:active{
            text-decoration: underline;
            /* cursor: pointer; */
        }
        #father{
            width: 1420px;
            height:auto!important;
            min-height:500px;
            margin: 70px auto;
        }
        #header1{
            /* width: 990px; */
            width: 1414px;
            height:30px;
            padding-bottom: 1px;
            margin: auto;
        }
        #h1{
            float: right;
            width: 300px;
        }
        #h2{
            float: left;
            width: 200px;
            margin-left: 448px;
        }
        #h3{
            float: left;
            width: 200px;
            text-align: center;
        }
        #header2{
            /* width: 989px; */
            width: 1414px;
            height: 27px;
            background-color: #f7f7f7;
        }
        .header21{
            float: left;
            width: 200px;
            margin: auto;
            border: 1px solid black;
            margin-bottom:-1px;
            height:25px;
            text-align: center;
        }
        #footer{
            width: 1414px;
            height:auto!important;
            height: 300px;
            min-height:300px;
            /* border: 1px solid yellow; */
        }
        .b1{
            float: left;
            width: 200px;
            height:auto!important;
            height: 300px;
            min-height:300px;
            margin: auto;
            border: 1px solid black;
            margin-bottom:-1px;
        }
        .c1{
            float: left;
            width: 200px;
            height: 20px;
            text-align: center;
            /* border: 1px solid cyan; */
        }
    </style>
</head>

<body>
    <div id="father">
        <div id="header1">
            <div id="h3">姓名：<?php echo $data['0']['person_name']; ?></div>
            <div id="h2"><button id="bt1" style="font-size: 15px;"><a href="<?php echo url('next','t='.($t-604800)); ?>"><</a></button>&nbsp;&nbsp;<button >本周</button>&nbsp;&nbsp;<button id="bt2" style="font-size: 15px;" onclick=""><a href="<?php echo url('next','t='.($t+604800)); ?>">></a></button></div> 
            <div id="h1"><?php echo $min; ?> 到 <?php echo $max; ?></div>
        </div>
        <div id="header2">
                <!-- {if condition="$w1=='星期二'" } -->
            <div class="header21" <?php if($d1==$date7['0']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['0']; ?> 星期一</div>
            <div class="header21" <?php if($d1==$date7['1']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['1']; ?> 星期二</div>
            <div class="header21" <?php if($d1==$date7['2']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['2']; ?> 星期三</div>
            <div class="header21" <?php if($d1==$date7['3']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['3']; ?> 星期四</div>
            <div class="header21" <?php if($d1==$date7['4']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['4']; ?> 星期五</div>
            <div class="header21" <?php if($d1==$date7['5']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['5']; ?> 星期六</div>
            <div class="header21" <?php if($d1==$date7['6']): ?>
                style='background-color: cyan' <?php endif; ?>><?php echo $date7['6']; ?> 星期天</div>
        </div>
        <div id="footer">
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期一'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期二'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期三'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期四'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期五'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期六'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="b1">
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['week']=='星期天'): ?>
                    <div class="c1"><?php echo $vo['time']; ?> <?php echo $vo['current_direction']; ?></div>
                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div> 
    </div>
</body>
</html>