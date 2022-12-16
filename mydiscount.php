 <?php

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Plastic Recycling-Shop Owner</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
   <link href="css/chosen.css" rel="stylesheet" />
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>


<?php include('menu.php'); ?>
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >My Discount</h3>
		<h4><a href="index.php">Home</a><label>/</label>My Discount</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="contact">
	<div class="container">

				<?php 	
 


 include('config.php');

    $user_id=$_SESSION['c_id'];
	
	 $query1="select * from tbl_user where user_id='$user_id'" ;
		
		  $result1 = mysqli_query($conn,$query1);
	 $num1=mysqli_fetch_array($result1);
  $username=$num1['name'];
	
 
 
 $query="select a.* ,b.* from tbl_history as a,tbl_barcodes as b where a.user_id='$user_id' and a.barcode_id=b.id";
		
	$result = mysqli_query($conn,$query);
 
	
    	

 
			if($result!=null){ ?>
		<center>
		<div style="margin-top:20px">
		
					
				<table class="timetable_sub" border="1" width="800px" style="margin-bottom:13px; font-size : 18px;">
					<thead>
						<tr style="font-size:24px;">
							<th>SL No.</th>	
							<th>Date</th>
							<th>Discount</th>
							<th>Quantity</th>
							<th>Amount</th>
							
						</tr>
					</thead>
					<tbody>
					<?php 
				$cnt=1;  
				$tot=0;
				while($row=mysqli_fetch_array($result)){ ?>
					<tr>
						<td><?php echo $cnt++; ?></td>
						<td><?php echo $row['date'];?></td>
							<td><?php echo $row['discount'];?>/-</td>
								<td><?php echo $row['qty'];?></td>
						<td><?php echo  $a=$row['discount'] * $row['qty'];?>/-</td>
						<?php $tot=$tot+$a; ?>
						
					</tr>
				
			<?php } ?>
				</tbody></table><br><h3 style="color:red"><b>Total:<?php echo $tot ?> /-</b></h3><br>
			</div>
		
		
</center>
			<?php } 	else
   				 {
				// echo "<script>alert('No Data ')</script>";

				//	echo"<script>window.open('index.php','_self')</script>";
				}?>		
</div>
</div>
				
			

		   <script>
              function checkPasswordMatch() {
                  var password = $("#txtNewPassword").val();
                  var confirmPassword = $("#txtConfirmPassword").val();
                  if (password != confirmPassword)
                      $("#CheckPasswordMatch").html('<i class="fas fa-times-circle" style="height:30px;width:10%"></i>');
                  else {
                      $("#CheckPasswordMatch").html(' <i class="fas fa-check-circle" style="color:green" style="height:30px;width:10%"></i>');
                  }
              }
              $(document).ready(function () {
                 $("#txtConfirmPassword").keyup(checkPasswordMatch);
              });

              var c=0;
              var v=0;
              function count()
              {

              var i=document.getElementById("invalid");

                 i.style.color="white";
                 i.style.opacity"0.9";
                 c=c+1;
                 var x= document.getElementById("inp");
                 if(c==1 && x.value<6)

                 {
                   v=1;
                 }

                }



                function chkPhn()
                      {
                       var y= document.getElementById("inp");
                       var a=y.value;

                       if(v==1 || a.length!=10)
                       {
                         var i=document.getElementById("invalid");

                         i.style.color="red";
                         i.style.opacity="0.9";
                         y.style.border="solid 1px red";
                       }
                       else{
                         y.style.border="solid 1px #ccc";
                       }
                     }

              </script>
			  
			  
<!--footer-->

<?php include('footer.php');?>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
  <script src="css/jquery.min.js" type="text/javascript"></script>
		<script src="css/chosen.jquery.js" type="text/javascript"></script>
		<script type="text/javascript"> $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({ allow_single_deselect: true }); </script>

</body>
</html>


