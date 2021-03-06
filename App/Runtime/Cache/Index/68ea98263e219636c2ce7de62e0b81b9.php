<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="地平线工作室" />
    <meta name="description" content="地平线工作室" />
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/style.css">

    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/home.css">
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/aboutus.css">
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/contact.css">
    <link href='__PUBLIC__/css/onepage-scroll.css' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/works.css">
    <link type="text/css" rel="stylesheet" href="__PUBLIC__/css/contact.css">
    <link href='__PUBLIC__/css/onepage-scroll.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <script type="text/javascript">
        handleUrl_work='<?php echo U("Index/Index/handle_work",'','');?>';
        handleUrl_about='<?php echo U("Index/Index/handle_about",'','');?>';
        handleUrl='__PUBLIC__';

    </script>
	<title>地平线工作室</title>
</head>
<body>
    <div class="main">
        <section class="page1">
            <div class="homeCont">
                <div class="homeNav">
                    <img src="__PUBLIC__/img/homeTitleBg.png" class="homeTitleBg">
                    <a href="javascript:void(0);" class="homeAboutus">
                        <img src="__PUBLIC__/img/homeAboutus.png">
                    </a>
                    <a href="javascript:void(0);" class="homeOurwork">
                        <img src="__PUBLIC__/img/homeOurwork.png">
                    </a>
                    <a href="javascript:void(0);" class="homeContact">
                        <img src="__PUBLIC__/img/homeContact.png">
                    </a>
                </div>
                <img src="__PUBLIC__/img/homeLogo.png" class="homeLogo">
            </div>
            <div class="homeFooter">
                <img src="__PUBLIC__/img/homeFoBg.png">
            </div>
        </section>

        <section class="page2">
            <img src="__PUBLIC__/img/aboutusSro.png" class="aboutusSro">
            <div class="aboutCont">
                <img src="__PUBLIC__/img/aboutusLogo.png" class="aboutLogo">
                <div class="aboutTop">
                    <p class="aboutHistory">History:</p>
                    <p class="aboutHisInt">地平线工作室的历史和简介</p>
                    <img src="__PUBLIC__/img/stuPho.png" class="aboutstuPho">
                </div>
                <div class="aboutbottom">
                    <p class="aboutHistory">The family:</p>
                    <div class="aboutWra">
                        <ul style="width:936px;float:left;">
                            <li class="aboutHead">
                                <a href="javascript:void(0);" class="aboutHeada">
                                    <img src="__PUBLIC__/img/family/a1.jpg" class="aboutHeadPho">
                                </a>
                                <div class="aboutHisInt aboutfat">
                                    <p class="aboutChaEdu">
                                        <span class="aboutName">彭旭东</span>&nbsp;<span class="aboutEdu">本科生</span>
                                    </p>
                                    <p class="aboutDire"></p>
                                    <p class="aboutCompany"></p>
                                </div>
                            </li>

                            <li class="aboutHead">
                                <a href="javascript:void(0);" class="aboutHeada">
                                    <img src="__PUBLIC__/img/family/a2.jpg" class="aboutHeadPho">
                                </a>
                                <div class="aboutHisInt aboutfat">
                                    <p class="aboutChaEdu">
                                        <span class="aboutName">赵月涛</span>&nbsp;<span class="aboutEdu">博士在读</span>
                                    </p>
                                    <p class="aboutDire"></p>
                                    <p class="aboutCompany"></p>
                                </div>
                            </li>

                            <li class="aboutHead">
                                <a href="javascript:void(0);" class="aboutHeada">
                                    <img src="__PUBLIC__/img/family/a3.jpg" class="aboutHeadPho">
                                </a>
                                <div class="aboutHisInt aboutfat">
                                    <p class="aboutChaEdu">
                                        <span class="aboutName">吴胜</span>&nbsp;<span class="aboutEdu">本科生</span>
                                    </p>
                                    <p class="aboutDire">创业</p>
                                    <p class="aboutCompany"></p>
                                </div>
                            </li>

                            <li class="aboutHead">
                                <a href="javascript:void(0);" class="aboutHeada">
                                    <img src="__PUBLIC__/img/family/a4.jpg" class="aboutHeadPho">
                                </a>
                                <div class="aboutHisInt aboutfat">
                                    <p class="aboutChaEdu">
                                        <span class="aboutName">曾海</span>&nbsp;<span class="aboutEdu">本科生</span>
                                    </p>
                                    <p class="aboutDire"></p>
                                    <p class="aboutCompany">百度</p>
                                </div>
                            </li>

                            <li class="aboutHead">
                                <a href="javascript:void(0);" class="aboutHeada">
                                    <img src="__PUBLIC__/img/family/a5.jpg" class="aboutHeadPho">
                                </a>
                                <div class="aboutHisInt aboutfat">
                                    <p class="aboutChaEdu">
                                        <span class="aboutName">彭旭东</span>&nbsp;<span class="aboutEdu">本科生</span>
                                    </p>
                                    <p class="aboutDire"></p>
                                    <p class="aboutCompany">中国移动</p>
                                </div>
                            </li>

                            <div class="aboutMoreOption">
                                <p class="aboutLoad">Loading...</p>
                                <a href="javascript:void(0);" class="aboutMore">more&gt;&gt;</a>
                                <a href="javascript:void(0);" class="aboutBack">&lt;&lt;</a>
                            </div>
                            <input type="hidden" value="5" id="aboutLastId" />
                        </ul>
                    </div>
                </div>
                <img src="__PUBLIC__/img/logo.png" class="logo" />
            </div>
            </section>

        <!-- works page start -->
        <section class="page worksPage">
            <img src="__PUBLIC__/img/worksLogo.png" id="worksLogo" />
            <img src="__PUBLIC__/img/worksSideArrow.png" class="worksSideArrow">
            <div class="worksMain"> 
                <!-- 弹出层，显示项目具体信息 -->
                <div class="worksInfoLayer">
                    <div class="worksLayerContent">
                        <div class="flecheNavLeft" ></div>
                        <div class="flecheNavRight" ></div>
                        <img class='worksInfoLayerImg' src="">
                        <h3 itemId=''></h3>
                        <p></p>
                    </div>
                </div>
                <div class="worksItemList">
                    <div class="worksItem" id="worksItem1">
                        <img src="__PUBLIC__/img/work/zhwj.jpg">
                        <h3>智慧我家(成都广电宽带网)</h3>
                        <p></p>
                    </div>
                    <!-- works item end  -->
                    <div class="worksItem" id="worksItem2">
                        <img src="__PUBLIC__/img/work/ysgwpt.jpg">
                        <h3>云上购物平台</h3>
                        <p></p>
                    </div>
                    <!-- works item end  -->
                    <div class="worksItem worksItemRight" id="worksItem3">
                        <img src="__PUBLIC__/img/work/gd.jpg">
                        <h3>光电信息学院</h3>
                        <p></p>
                    </div>
                    <!-- works item end  -->
                    <div class="worksItem" id="worksItem4">
                        <img src="__PUBLIC__/img/work/ymetjy.jpg">
                        <h3>一名儿童教育</h3>
                        <p></p>
                    </div>
                    <!-- works item end  -->
                   <div class="worksItem" id="worksItem5">
                       <img src="__PUBLIC__/img/work/jxw.jpg">
                       <h3>鸡血网</h3>
                       <p></p>
                   </div>
                    <!-- works item end  -->
                </div> <!-- worksItemList end -->
                <input type='hidden' value='5' id='worksLastId' />
                <input type='hidden' value='1' id='worksFirstId' />
                <div class="worksNav">
                    <span class="worksLoading">Loading...</span>
                    <a href="javascript:void(0);" class="worksMore">more&gt;&gt;</a>
                    <a href="javascript:void(0);" class="worksMoreLeft">&lt;</a>&nbsp;&nbsp;
                    <a href="javascript:void(0);" class="worksMoreRight">&gt;</a>
                </div>
            </div>
            <!-- works main end -->
            <img src="__PUBLIC__/img/logo.png" class="logo" />
        </section>
        <!-- works page end -->

        <!-- contact page start -->
        <section class="page contactPage">
            <img src="__PUBLIC__/img/contactLogo.png" id="contactLogo" />
            <img src="__PUBLIC__/img/contactSideArrow.png" class="contactSideArrow">
            <div class="contactInfo">
                <img src="__PUBLIC__/img/contactPanel.png" class="contactPanel">
            	<div class="contactInfoList">
	           		<p><span>Tel</span>: 15680708097</p>
	           		<p><span>Email</span>: horizoner@sina.com</p>
	           		<p><span>Addr</span>: 光电楼333</p>
           		</div>
            </div>
            <a href="javascript:"><img src="__PUBLIC__/img/contactArrow.png" id="contactArrow" /></a>
            <img src="__PUBLIC__/img/logo.png" class="logo" />
        </section>
        <!-- contact page end -->
    </div>

    <script src="__PUBLIC__/js/jquery.js"></script>
    <script src="__PUBLIC__/js/onepage-scroll.min.js"></script>
    <script src="__PUBLIC__/js/sea.js"></script>
    <script>
        seajs.config({
            base: "__PUBLIC__/js/",
            alias: {
              "jquery": "jquery.min.js",
              // "scrollSrc": "onepage-scroll.min.js"
            }
        });

        seajs.use('init', function(fn) {
            $(".main").onepage_scroll(fn.conf);
        });

        seajs.use('works');
        seajs.use('aboutus');
        seajs.use('home');
        seajs.use('contact');
    </script>
</body>
</html>