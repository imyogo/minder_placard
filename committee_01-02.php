<?php
session_start();
include_once('config.php');
fun_no_auth();
?>
<!doctype html>
<html>
<head>
<title><?php echo WEB_NAME; ?></title>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="icofont/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    
    <!-- 行事曆 css -->
    <link href="assets/css/fullcalendar.min.css" rel="stylesheet"  />
    <link href="assets/css/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="assets/css/other.css" rel="stylesheet">
    
    <!-- JS //-->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!--行事曆 js -->
    <script type="text/javascript" src="moment/moment.js"></script>
    <script type="text/javascript" src="moment/locale/zh-tw.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>    
   <script>
        $(function(){
          
            $("#calendar").fullCalendar({
				plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                height: 'auto',
				header: {
				    left: 'prev',
					center: 'title',
					right: 'next'
				},
                buttonText : { prev: "上月", next: "下月" },
                locale:'zh-tw', //使用的語系
                buttonIcons: false, // 是否顯示上一個/下一個文本
                weekNumbers: false, // 是否顯示今年度的第幾週
				navLinks: true,     // 可以單擊日期/星期名稱導航視圖
            });
          
        });
  </script>
    
</head>

<body>
   
   <div class="container">
       
        <div class="row pt-2 pb-2">
       
           <div class="col-2 text-left">
               <img src="assets/images/logo.jpg" class="img-fluid" />
           </div>
           
           <div class="col-5 col-md-5">
               <h4 class="heard_tetx text-c-lite-green">明德醫院暨附設精神護理之家內部公告系統</h4>
           </div>
       
           <div class="col-5 col-md-5 text-right">
               
                <a class="text-primary head_top" href="#">
                    <i class="icofont-computer"></i>&nbsp;進入系統
                </a>
               
				<a class="text-danger head_top ml-1 ml-md-3" href="index.php">
                    <i class="icofont-logout"></i>&nbsp;登出
                </a>
               
           </div>
       </div>
       
	</div>
	    
    
	<div class="container">
		<div class="row mt-3">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<div class="text-center">
							<h4 class="heard_tetx text-c-orenge">明德醫院</h4>
							<p>醫院事務委員會組織章程</p>
						</div>
						<p class="text-right">2006年11月13日醫院事務委員會議通過</p>
					</div>	
								
					<div class="card-block">
						<div class="">
							<p>第一條 成立依據：<br>
							   本院為了利於醫院政策之推動，以更完善的服務品質，醫療照護社區民眾的精神健康，特成立此委員會並定名為「醫院事務委員會」(以下稱本委員會)。</p>
							<p>第二條 宗旨及目標：<br>
							   經由各科室之相關醫療業務溝通與協調，藉以改善並提升本院之醫療照護品質，以保障社區民眾之精神健康。</p>
							<p>第三條 任務：<br>
							   每月定期開會。<br>相關醫療業務之檢討改進。<br>決策本院之醫療業務方針。<br>協調分配政府交辦之醫療相關業務。</p>
							<p>第四條　委員之產生與組織<br>
							   本委員會設置委員三至十五人，由院長提名，經由醫院事務委員會議通過聘任之。委員任期為一年，連選得連任。院長為本委員會之主任委員。本委員會委員須為本院之工作人員，且應具備單位主管之職位。</p>
							<p>第五條<br>本委員會之集會由主任委員召集，每月定期開會乙次，必要時得加開臨時會議。</p>
							<p>第六條<br>本委員會組織章程，經醫院事務委員會通過，公告後施行。修改時亦同。</p>
　　
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>	
	
	<div class="container">
		<div class="row justify-content-center">
			<a href="committee_01.php"><button class="btn btn-primary"><i class="icofont icofont-home"></i>首 頁</button></a>
		</div>
	</div>
		
   
      
    
  
	  
	  
	  
	  

  <footer class="mt-3 bg-light text-center text-lg-start">
	  <!-- Copyright -->
	  <div class="text-center p-3">
		© 2021 Copyright:
		<a class="text-dark" href="https://www.minder-hosp.com/">明德醫院 All rights reserved.</a>
	  </div>
	  <!-- Copyright -->
  </footer>
   
   
	  
  

  
   
   
    
</body>
</html>



