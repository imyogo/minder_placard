<?php
session_start();
include_once('config.php');
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
    <link rel="stylesheet" type="text/css" href="assets/css/other.css">
	
	<!-- JS //-->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
	
    <!-- 行事曆 css -->
    <link href="assets/css/fullcalendar.min.css" rel="stylesheet"  />
    <link href="assets/css/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="assets/css/other.css" rel="stylesheet">
	
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
           
           <div class="col-5 col-md-6">
               <h4 class="heard_tetx text-c-lite-green">明德醫院暨附設精神護理之家內部公告系統</h4>
           </div>
       
           <div class="col-5 col-md-4 text-right">
               <a class="text-primary head_top" data-toggle="modal" href="#mymodal">
                   <i class="icofont-user-alt-4"></i> 系統登入
               </a>
           </div>
       </div>
       
	</div> 
	
	<div>
 	            
  	    <div class="banner">
			<a href="index.php"></a>
  		    	<img src="assets/banner/b1.jpg" class="img-fluid" />
			</a>
  	    </div>
  	
    </div> 
    
    <div class="container">
    	<div class="row justify-content-center mt-5">
    		<div class="col-12 col-md-6">
				<a href="hospital_list.php"><button class="btn btn-primary btn-outline-primary mb-2 btn-block"><i class="icofont icofont-first-aid"></i> 明德醫院各科室</button></a>
    		</div>
			<div class="col-12 col-md-6">
				<a href="hospital_list_home.php"><button class="btn btn-success btn-outline-success mb-2 btn-block"><i class="icofont icofont-medical-sign"></i> 附設精神護理之家</button></a>
    		</div>

		</div>
    	<div class="row justify-content-center mt-3">
    		<div class="col-12 col-md-6">
				<a href="calendar.php"><button class="btn btn-danger btn-round btn-outline-danger mb-2 btn-block">工作人員行事表</button></a>	
    		</div>
    		<div class="col-12 col-md-6">
				<a href="calendar2.php"><button class="btn btn-danger btn-round btn-outline-danger mb-2 btn-block">病房活動表</button></a>
    		</div>

    	</div>
    	
    	
		<div class="row justify-content-center mt-3">
			<a href="https://www.ym.edu.tw/~huang/students/8476.htm" target="_blank"><button class="btn btn-mat btn-warning mb-2">全國博碩士論文資訊網</button></a>  
			<a href="https://ndltd.ncl.edu.tw/cgi-bin/gs32/gsweb.cgi/ccd=hsBjGm/mobileindex" target="_blank"><button class="btn btn-mat btn-warning ml-3 mb-2">台灣博碩士論文資訊加值系統</button></a>    	
			<a href="https://www.airitilibrary.com/" target="_blank"><button class="btn btn-mat btn-warning ml-3 mb-2">華藝線上圖書館</button></a>  
			<a href="http://isbn.ncl.edu.tw/NEW_ISBNNet/A00_Home.php?PHPSESSID=86ii7gqt38oo3b7sbitsnlghq0&Pact=init" target="_blank"><button class="btn btn-mat btn-warning ml-3 mb-2">國家圖書館</button></a>    	
			<a href="https://www.tpr.org.tw/" target="_blank"><button class="btn btn-mat btn-warning ml-3 mb-2">台灣病人安全通報系統</button></a>  
			<a href="https://sdm.patientsafety.mohw.gov.tw/" target="_blank"><button class="btn btn-mat btn-warning ml-3 mb-2">醫病共享決策平台</button></a>    	
    	</div>
    </div>
    
    
  <div class="container">
  	<div class="row">
  		<div class="col-12 col-md-4">
            
  			<div class="left_box_in mt-5">
				<h4 class="heard_tetx text-c-blue"><i class="ti-desktop"></i> 系統登入 </h4>
				<hr>
				<form>
					<div class="form-group">
						<label for="text">帳號</label>
						<input type="text" class="form-control" id="text" placeholder="輸入帳號">
					</div>
					<div class="form-group">
						<label for="userpasswd">密碼</label>
						<input type="password" class="form-control" id="userpasswd" placeholder="輸入密碼">
					</div>
					<a href="index2.php">
						<button type="button" class="btn btn-primary btn-md btn-block text-center m-b-20">
						<i class="icofont-login"></i> 登 入</button>
						
					</a>
				</form>
  			</div>
  			
  			<!--行事曆-->
  			<div class="left_box mt-5">
  				<h4 class="heard_tetx text-c-yellow"><i class="icofont-ui-calendar"></i> 日曆 </h4>
				<hr>

  				<div id="calendar"></div>  		

  			</div>
		</div>
  		
  		<div class="col-12 col-md-8">
  			<div class="left_box mt-5">
  				<h4 class="heard_tetx text-c-pink"><i class="icofont-bullhorn icofont-news-text"></i> 院內公告 </h4>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>公告部門</th>
							<th>公告項目</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<h6>院長室</h6>

							</td>
							<td>
								<a href="#"><div class="word_break">本院信念、宗旨、願景、目標及經營策略</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>院長室</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">員工工作規則</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>

							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>	
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						<tr>
							<td>
								<h6>我是部門</h6>
							</td>
							<td>
								<a href="#"><div class="word_break">我是標題</div></a>
							</td>
						</tr>
						
						
						

					</tbody>
				</table>
  			</div>
  			
  			
  			<div class="mt-5">
  				<nav aria-label="Page navigation example">
				  <ul class="pagination justify-content-center">
					<li class="page-item disabled">
					  <a class="page-link" href="#" tabindex="-1"><i class="ti-angle-left"></i></a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					  <a class="page-link" href="#"><i class="ti-angle-right"></i></a>
					</li>
				  </ul>
				</nav>
  			</div>
			
  		</div>
  		
  	</div>
  </div>
   
   
   <!--下方連結--->
   <div class="container">
	   <div class="row justify-content-center mt-5">
			<a href="committee_01.php"><button class="btn btn-mat btn-success mb-2">醫院事務委員會</button></a>  
			<a href="committee_02.php"><button class="btn btn-mat btn-success ml-3 mb-2">醫療品質委員會</button></a>    	
			<a href="committee_03.php"><button class="btn btn-mat btn-success ml-3 mb-2">病人安全委員會</button></a>  
			<a href="committee_04.php"><button class="btn btn-mat btn-success ml-3 mb-2">院內感染管制委員會</button></a>    	
			<a href="committee_05.php"><button class="btn btn-mat btn-success ml-3 mb-2">教育訓練委員會</button></a>  
			<a href="committee_06.php"><button class="btn btn-mat btn-success ml-3 mb-2">醫療糾紛處理委員會</button></a>    
			<a href="committee_07.php"><button class="btn btn-mat btn-success ml-3 mb-2">醫學倫理委員會</button></a>  
			<a href="committee_08.php"><button class="btn btn-mat btn-success ml-3 mb-2">門診事務委員會</button></a>    	
			<a href="committee_09.php"><button class="btn btn-mat btn-success ml-3 mb-2">資訊管理委員會</button></a>  
			<a href="committee_10.php"><button class="btn btn-mat btn-success ml-3 mb-2">健保事務委員會</button></a>    	
			<a href="committee_11.php"><button class="btn btn-mat btn-success ml-3 mb-2">病歷管理委員會</button></a>  
			<a href="committee_12.php"><button class="btn btn-mat btn-success ml-3 mb-2">護理品質管理委員會</button></a> 
			<a href="committee_13.php"><button class="btn btn-mat btn-success ml-3 mb-2">人事評議委員會</button></a>  
			<a href="committee_14.php"><button class="btn btn-mat btn-success ml-3 mb-2">社區暨居家照護委員會</button></a>    	
			<a href="committee_15.php"><button class="btn btn-mat btn-success ml-3 mb-2">員工福利安全衛生委員會</button></a>  
			<a href="committee_16.php"><button class="btn btn-mat btn-success ml-3 mb-2">復健基金委員會</button></a>    	
			<a href="committee_17.php"><button class="btn btn-mat btn-success ml-3 mb-2">醫藥事務委員會</button></a>  
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
   
   
	<!--modal --->
	<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h4 class="modal-title heard_tetx text-c-blue" id="mymodalLabel"><i class="ti-desktop"></i> 系統登入 </h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
				<div class="form-group">
					<label for="text">帳號</label>
					<input type="text" class="form-control" id="text" placeholder="輸入帳號">
				</div>
				<div class="form-group">
					<label for="userpasswd">密碼</label>
					<input type="password" class="form-control" id="userpasswd" placeholder="輸入密碼">
				</div>
			</form>

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
			<a href="index2.php"><button type="button" class="btn btn-primary">登入</button></a> 
		  </div>
		</div>
	  </div>
	</div>
		
</body>
</html>