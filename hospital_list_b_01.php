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
				<div class="card p-10">
					<div class="card-header">
						<div class="card-header-left">
							<h4 class="heard_tetx text-c-orenge">明德醫院 醫師室</h4>
						</div>
					</div>				
				
					<div class="card-block table-border-style">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr class="table-active">
										<th>醫師</th>
										<th>學經歷</th>
										<th>現歷</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>陳中和醫師</td>
										<td>精神科專科醫師<br>醫務管理師<br>學歷:日本九州大學醫學博士<br>
										    經歷:草屯療養院成人精神科主治醫師<br>台灣精神醫療院所行政協會理事長<br>台灣精神醫學會理事<br>台灣地區醫院協會理事<br>彰化縣康復之友協會理事</td>
										<td>彰化明德醫院院長</td>
									</tr>
									<tr>
										<td>陳穩焜醫師</td>
										<td>精神科專科醫師<br>學歷:高雄醫學大學醫學士<br>
										    經歷:彰化基督教醫院精神醫學科專任醫師</td>
										<td>醫療副院長</td>
									</tr>
									<tr>
										<td>陳佳儒醫師</td>
										<td>精神科專科醫師<br>學歷:中國醫藥大學醫學士<br>
											經歷:彰化縣基督教醫院精神醫學科主治醫師</td>
										<td>醫療照護部主任</td>
									</tr>
									<tr>
										<td>鄭怡君醫師</td>
										<td>精神科專科醫師<br>學歷:中國醫藥大學醫學士<br>台大醫院青少年精神醫學進修<br>
										    經歷:彰化縣基督教醫院精神醫學科病房主任</td>
										<td>醫師室主任<br>以法蓮顧問工作室顧問<br>彰化/和美高中輔導室駐診醫師</td>
									</tr>
									<tr>
										<td>施學強醫師</td>
										<td>精神科專科醫師<br>神經內科專科醫師<br>學歷:國防醫學大學醫學士<br>
										    經歷:台中國軍醫院精神科主任</td>
										<td>專任醫師</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="container">
		<div class="row justify-content-center">
			<a href="hospital_list.html"><button class="btn btn-primary"><i class="icofont icofont-simple-left"></i>上一頁</button></a>
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



