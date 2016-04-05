<?php 
$acx_csma_template_id = 1;
do_action('acx_csma_above_template_html',$acx_csma_template_id);
$acx_csma_appearence_array_1=get_option('acx_csma_appearence_array');
if(is_serialized($acx_csma_appearence_array_1 ))
{
	$acx_csma_appearence_array_1 = unserialize($acx_csma_appearence_array_1); 
}
$acx_csma_meta_title = get_option('acx_csma_meta_title');
$acx_csma_meta_description = get_option('acx_csma_meta_description');
$acx_csma_meta_keywords = get_option('acx_csma_meta_keywords');
$favicon_attach_id = get_option('acx_csma_favicon');
		$acx_csma_favicon = $favicon_attach_id;
		if(is_numeric($favicon_attach_id))
		{
			$fav_icon_attachment_url = parse_url( wp_get_attachment_url($favicon_attach_id) );
			$acx_csma_favicon = $fav_icon_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $fav_icon_attachment_url[ 'host' ])). $fav_icon_attachment_url[ 'path' ];
		}

$acx_csma_date_time = get_option('acx_csma_date_time');
$acx_csma_start_date_time = get_option('acx_csma_start_date_time');
$acx_csma_timestamp=current_time('timestamp');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
if($acx_csma_meta_title!="")
{
?>
<title><?php echo stripslashes($acx_csma_meta_title); ?></title>
<?php
}
if($acx_csma_meta_description!="")
{
?>
<meta name="description" content="<?php echo stripslashes($acx_csma_meta_description); ?>">
<?php
}
if($acx_csma_meta_keywords!="")
{
?>
<meta name="keywords" content="<?php echo stripslashes($acx_csma_meta_keywords); ?>">
<?php
}
?>
<style>

<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_custom_css_temp1']; ?>;
.submit:hover
{
	color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_btn_hover_color1']; ?>;
	background:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_btn_hover_bgcolor1']; ?>;
}
.submit{
	background:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_btn_color1']; ?>;
	color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_btn_text_color1']; ?>;
}
</style>
<link href="<?php echo plugins_url('style.css', __FILE__); ?>" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php echo esc_url($acx_csma_favicon); ?>"  type="image/png">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<?php echo stripslashes(get_option('acx_csma_ga_trakng_code')); 
do_action('acx_csma_bottom_inside_head_tag',$acx_csma_template_id);
?>
</head>
<?php
$acx_csma_background_image1_id = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_background_image1'];
$bg_image1_url  = $acx_csma_background_image1_id;
if(is_numeric($acx_csma_background_image1_id))
{
	$image1_attachment_url = parse_url( wp_get_attachment_url($acx_csma_background_image1_id) );
	$bg_image1_url    = $image1_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $image1_attachment_url[ 'host' ])). $image1_attachment_url[ 'path' ];
} 


?>
<body style="background: url('<?php echo $bg_image1_url; ?>') no-repeat fixed center center transparent; background-size:cover; ">

<?php 
do_action('acx_csma_top_inside_body_tag',$acx_csma_template_id);
if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array_1[$acx_csma_template_id])){
if($acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_choice']=="text")
{
$new_class="text_logo";
} else
{
$new_class="";
}} else
{
$new_class="";}
?>	<div class="wrapper" > 
		<div class="canvas960 <?php echo $new_class; ?>"> 
			<div id="header">
			<?php if(array_key_exists('acx_csma_logo_choice',$acx_csma_appearence_array_1[$acx_csma_template_id]))
			{if($acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_choice']=="image" || $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_choice']==""){ 
			$acx_csma_logo1_id = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo1'];
					$logo1_url  = $acx_csma_logo1_id;
					if(is_numeric($acx_csma_logo1_id))
					{
						$logo1_attachment_url = parse_url( wp_get_attachment_url($acx_csma_logo1_id) );
						$logo1_url    = $logo1_attachment_url [ 'scheme' ]  . '://' .rawurlencode( basename( $logo1_attachment_url[ 'host' ])). $logo1_attachment_url[ 'path' ];
					}
			?>
			<img src="<?php  echo $logo1_url; ?>" alt="Logo">
			<?php } else if($acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_choice']=="text")
			{ ?>
				<div class="logo_text" style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_text_color1']; ?>"><?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_logo_text1']; ?></div>
			<?php } }?>
			</div><!-- header -->
			<div class="inline_block"> 
				<h2 style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_title_color1']; ?>"><?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_title1']; ?></h2>
				<h3 style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subtitle_color1']; ?>"><?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subtitle_text1']; ?></h3>
			</div><!-- inline_block -->
			
			<div class="inline_block mg_top"> 
				<div class="timer_head" style="background: none repeat scroll 0 0 <?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_inside_bg_color1']; ?>; color: <?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_inside_title_color1']; ?>">
				<p><?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_inside_title1']; ?></p>
				</div><!-- timer_head  -->
				<?php
					$acx_csma_custom_html_top_temp1 = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_custom_html_top_temp1'];
					$acx_csma_custom_html_bottom_temp1 = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_custom_html_bottom_temp1'];
					$acx_csma_show_timer1 = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_show_timer1'];
				if($acx_csma_custom_html_top_temp1 != "" || $acx_csma_custom_html_bottom_temp1 != "" || $acx_csma_show_timer1 == 1)
				{
				?>
				
				<div class="inline_block timer_holder" style=" background: <?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_bg_color1']; ?>"> 
				<?php
				}
				if($acx_csma_custom_html_top_temp1 != "") { ?>
				<div class="acx_csma_content_div acx_csma_top acx_csma_top_1">
				<?php echo $acx_csma_custom_html_top_temp1; ?>
				</div>
				<?php } ?>
				<?php if($acx_csma_show_timer1 == 1)
					{?>
					<div class="timer_box days"> 
						<p style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_head_color1']; ?>">Days</p>
						<ul>
							<li id="days_0" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
							<li id="days_1" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
							<li id="days_2" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
						</ul>
					</div><!-- timer_box -->
					<div class="timer_box"> 
						<p style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_head_color1']; ?>">Hours</p>
						<ul>
							<li id="hours_0" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
							<li id="hours_1" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
						</ul>
					</div><!-- timer_box -->	
					<div class="timer_box"> 
						<p style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_head_color1']; ?>">Minutes</p>
						<ul>
							<li id="minutes_0" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
							<li id="minutes_1" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
						</ul>
					</div><!-- timer_box -->
					<div class="timer_box last_one"> 
						<p style="color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_head_color1']; ?>">Seconds</p>
						<ul>
							<li id="seconds_0" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
							<li id="seconds_1" style="color:<?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_timer_iptext_color1']; ?>">0</li>
						</ul>
					</div><!-- timer_box -->
					<?php }?>
				<?php
				
				if($acx_csma_custom_html_bottom_temp1 != "") { ?>
				<div class="acx_csma_content_div acx_csma_bottom acx_csma_bottom_1">
				<?php echo $acx_csma_custom_html_bottom_temp1; ?>
				</div>
				<?php }
							
				if($acx_csma_custom_html_top_temp1 != "" || $acx_csma_custom_html_bottom_temp1 != "" || $acx_csma_show_timer1 == 1)
				{	?>
				</div><!-- timer_holder -->
				<?php } ?>
				

				
				
				
				
				
				<div class="inline_block form" style="background: none repeat scroll 0 0 <?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_bg_color1']; ?>"> 
				<?php
					$acx_csma_custom_html_top_sub1 = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_custom_html_top_sub1'];
					$acx_csma_custom_html_bottom_sub1 = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_custom_html_bottom_sub1'];
					$acx_csma_show_subscription = $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_show_subscription'];
				if($acx_csma_custom_html_top_sub1 != "" || $acx_csma_custom_html_bottom_sub1 != "" || $acx_csma_show_subscription == 1)
				{
					
					if($acx_csma_custom_html_top_sub1 != "")
					{ ?>
						<div class="acx_csma_content_div acx_csma_top acx_csma_top_1" id="acx_csma_top_1">
							<?php echo $acx_csma_custom_html_top_sub1; ?>
						</div>
					<?php
					}
					
					if($acx_csma_show_subscription == 1)
					{
					?>
					<h4><span style="color: <?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_title_color1']; ?>;"><?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_title1']; ?></span></h4>
					<form name="acx_csma_form" method="post" action="<?php echo str_replace( '%7E', '~',$_SERVER['REQUEST_URI']); ?>"> 
					<div id="acx_csma_success"  name="acx_csma_success" style="display:none; color:white;" ><?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_success1']; ?></div>
					<div id="acx_csma_invalid" name="acx_csma_invalid" style="display:none; color:white;" ><?php echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_subscribe_invalid1']; ?></div>
					<div id="acx_csma_error" style="color:white;"></div>
					<input type="text" id="acx_csma_name_hidden" name="acx_csma_name_hidden" value="" placeholder="Enter Your Name Here"/>
					<input type="hidden" id="acx_csma_email" name="email" placeholder="Enter Your Email Here" ><br/> 
					<input type="button" id="acx_csma_submit" onclick="acx_csma_validate_email();" value="NEXT" class="submit" >
					</form>
					<?php
					}
					
					if($acx_csma_custom_html_bottom_sub1 != "")
					{ ?>
						<div class="acx_csma_content_div acx_csma_bottom acx_csma_bottom_1" id="acx_csma_top_1">
							<?php echo $acx_csma_custom_html_bottom_sub1; ?>
						</div>
					<?php 
					}		
				}
				?>
				
				</div>
				
				
				
				
				
				
				<!-- form -->
				<div class="timer_head footer" style="background:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_footer_bgcolor1']; ?>;color:<?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_footer_text_color1']; ?>"><?php  echo $acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_footer_text1']; ?></div><!-- timer_head  -->
			</div><!-- inline_block -->
		</div><!-- canvas960 -->
	</div><!-- wrapper -->
	
<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery(window).keydown(function(event){
    if(event.keyCode == 13) {
		<?php
		if($acx_csma_show_subscription == 1)
					{
					?>
acx_csma_validate_email();
return false;
<?php
		}
		?>
    }
  });
});
<?php
if($acx_csma_show_subscription == 1)
{
?>
var acx_csma_form_status=1;
function acx_csma_validate_email()
{
	var acx_csma_name_hidden=document.getElementById('acx_csma_name_hidden').value;
	if(acx_csma_form_status== 1)
	{
	if(acx_csma_name_hidden=="")
	{
		alert('ERROR : Please Enter Your Name !');
		acx_csma_form_status=1;
		return false;
	}
	else{
	document.getElementById('acx_csma_name_hidden').type = 'hidden';
	document.getElementById('acx_csma_email').type = 'email';
	jQuery("#acx_csma_email").show();
	document.getElementById('acx_csma_submit').value="Subscribe";
	acx_csma_form_status=2;
	return false;
	}
	}
	else if(acx_csma_form_status==2)
	{
		var acx_csma_email = document.getElementById('acx_csma_email').value;
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if (acx_csma_email=='') 
	{
	    alert('Please Enter Email Address !');
		return false;
	}
	else if (!expr.test(acx_csma_email)) 
	{
		document.getElementById('acx_csma_email').value="";
		document.getElementById('acx_csma_name_hidden').value="";
		jQuery("#acx_csma_email").hide();
		jQuery("#acx_csma_submit").hide();
		jQuery("#acx_csma_invalid").show();
		setTimeout(function()
			{ 
				jQuery("#acx_csma_invalid").hide(); 
				document.getElementById('acx_csma_name_hidden').type = 'text';
				document.getElementById('acx_csma_submit').value="NEXT";
				jQuery("#acx_csma_submit").show();
				acx_csma_form_status=1;
		
			}, 3000);
		
		
		return false;
	}
	else 
	{
	var acx_load="<div id='acx_csma_loading'><div class='load_1'></div></div>";
	jQuery('body').append(acx_load);
	
	var timestamp =  Math.floor(<?php echo current_time('timestamp'); ?>);
	var ip="<?php  echo $_SERVER['REMOTE_ADDR']; ?>";
	var acx_csma_ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
	var order = 'name='+acx_csma_name_hidden+'&email='+acx_csma_email+'&ip='+ip+'&timestamp='+timestamp+'&action=acx_csma_subscribe_email'+'&acx_csma_subscribe_es=<?php echo wp_create_nonce('acx_csma_subscribe_es'); ?>';
		jQuery.post(acx_csma_ajaxurl, order, function(theResponse)
		{
			jQuery("#acx_csma_loading").remove();
			if(theResponse == "success")
			{
			document.getElementById('acx_csma_email').value="";
			document.getElementById('acx_csma_name_hidden').value="";
			jQuery("#acx_csma_email").hide();
			jQuery("#acx_csma_submit").hide();
			
			jQuery("#acx_csma_success").show();
			setTimeout(function()
			{ 
				jQuery("#acx_csma_success").hide(); 
				document.getElementById('acx_csma_name_hidden').type = 'text';
				document.getElementById('acx_csma_submit').value="NEXT";
				jQuery("#acx_csma_submit").show();
				acx_csma_form_status=1;
		
			}, 3000);
			}  
			else{
			document.getElementById('acx_csma_email').value="";
			document.getElementById('acx_csma_name_hidden').value="";
			jQuery("#acx_csma_email").hide();
			jQuery("#acx_csma_submit").hide();
			jQuery("#acx_csma_error").html("Email Already Exists !!");
			setTimeout(function()
			{ 
				jQuery("#acx_csma_error").html(''); 
				jQuery("#acx_csma_error").hide(); 
				document.getElementById('acx_csma_name_hidden').type = 'text';
				document.getElementById('acx_csma_submit').value="NEXT";
				jQuery("#acx_csma_submit").show();
				acx_csma_form_status=1;
		
			}, 3000);
			
			}  
		});
	}
	}
}
<?php
}
?>
<?php if($acx_csma_appearence_array_1[$acx_csma_template_id]['acx_csma_show_timer1']==1)
	{
	if($acx_csma_timestamp < $acx_csma_date_time)
	{?>
var start_date = <?php echo $acx_csma_start_date_time; ?>;
var end_date =<?php echo $acx_csma_date_time; ?>;
var current = Math.floor(<?php echo current_time('timestamp'); ?>);
updateCounter();
function updateCounter()
	{
		if(current < end_date)
		{
			current = current+1;
			seconds = (end_date - current);
			
			days = Math.floor(seconds / (60 * 60 * 24)); 
			seconds -= days * 60 * 60 * 24; 
			
			hours = Math.floor(seconds / (60 * 60));
			seconds -= hours * 60 * 60;
			
			minutes = Math.floor(seconds / 60);
			seconds -= minutes * 60;
			
		
			for(var i=0;i< seconds.toString().length;i++)
			{
				if(seconds < 10 && seconds.toString().length == 1 )
				{
					seconds = "0"+seconds;
				}
				if(seconds > 60)
				{
				seconds = 60;
				}
				var res_sec = seconds.toString().charAt(i);
			   if(seconds.toString().length == 1)
			   {
					var a=i+1;
					document.getElementById("seconds_"+a).innerHTML = res_sec;
			   }
			   else if(seconds.toString().length == 2)
			   {
					document.getElementById("seconds_"+i).innerHTML = res_sec;
			   }
			}
			for(var j=0;j< minutes.toString().length;j++)
			{
				if(minutes < 10 && minutes.toString().length == 1 )
				{
					minutes = "0"+minutes;
				}
				if(minutes > 60)
				{
				minutes = 60;
				}
				var res_min = minutes.toString().charAt(j);
				if(minutes.toString().length == 1)
			   {
					var b=j+1;
					document.getElementById("minutes_"+b).innerHTML = res_min;
			   }
			   else if(minutes.toString().length == 2)
			   {
					document.getElementById("minutes_"+j).innerHTML = res_min;
			   }
			}

			for(var k=0;k< hours.toString().length;k++)
			{
				if(hours < 10 && hours.toString().length == 1 )
				{
					hours = "0"+hours;
				}
				if(hours > 60)
				{
				hours = 60;
				}
				var res_hour = hours.toString().charAt(k);
				if(hours.toString().length == 1)
			   {
				var c=k+1;
				document.getElementById("hours_"+c).innerHTML = res_hour;
			   }
			   else if(hours.toString().length == 2)
			   {
				document.getElementById("hours_"+k).innerHTML = res_hour;
			   }
			}
		
			for(var m = 0; m < days.toString().length; m++)
			{
				var res_day = days.toString().charAt(m);
			   if(days.toString().length == 1)
			   {
			   var n=m+2;
			   document.getElementById("days_"+n).innerHTML = res_day;
			   }
			   else if(days.toString().length == 2)
			   {
			   var n=m+1; 
			   document.getElementById("days_"+n).innerHTML = res_day;
			   }
				else if(days.toString().length == 3)
			   {
			   document.getElementById("days_"+m).innerHTML = res_day;
			   }  
			}
			 setTimeout( function(){ 
				updateCounter(); 
			  }, 1000 );
		} 
	}
<?php 
	} 
	}	
?>
</script>
<?php do_action('acx_csma_bottom_inside_body_tag',$acx_csma_template_id); ?>
</body>
</html>
