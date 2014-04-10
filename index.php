
<!DOCTYPE html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Release 게시판</title>
		<meta name="description" content="Responsive CSS Timeline with 3D Effect" />
		<meta name="keywords" content="timeline, 3d, css, css3, css-only, transitions, responsive, fluid" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.support-note .note-ie{display:block;}</style><![endif]-->
	</head>
	<body>
    <?
    
	include "./connet.php";
	
	if(mysql_errno()) {
  	printf("Connect failed: %s\n", mysql_error());
 	}
	
	$pagenum=0;
	
	$pageend=$pagenum+10;
	
	$query = "select * from wp_kboard_board_content LIMIT 0,30";
	$result = mysql_query($query, $conn);
	/*while($row=mysql_fetch_array($result))
	{
		$uid=$row['uid'];
		$name=$row['member_display'];
		$title=$row['title'];
		$content=$row['content'];
		$date=$row['date'];
		
		echo("$title");
	}
	mysql_close($conn);*/
	?>
		<div class="container">	

			<!-- Codrops top bar -->
			<!--<div class="codrops-top clearfix">
				<a href="http://tympanus.net/Tutorials/LoadingAnimations/">
					<strong>&laquo; Previous Demo: </strong>Css Loading Animations
				</a>
				<span class="right">
					<a href="http://www.patternify.com/">Patterns from Patternify</a>
					<a href="http://tympanus.net/codrops/?p=12185">
						<strong>Back to the Codrops Article</strong>
					</a>
				</span>
			</div>-->
             <!--/ Codrops top bar -->
			
			<header class="clearfix">
			
				<h1>Release Since 2014 <!--<span>(Best viewed in WebKit browsers)</span>--></h1>
				<h2>Release Test <span>테스트 게시판입니다</span></h2>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">

				<ul class="timeline">
	<? while($row=mysql_fetch_array($result))
	{
		$uid=$row['uid'];
		$name=$row['member_display'];
		$title=$row['title'];
		$content=$row['content'];
		$date=$row['date'];
		$mons = array(01 => "Jan", 02 => "Feb", 03 => "Mar", 04 => "Apr", 05 => "May", 06 => "Jun", 07 => "Jul", 08 => "Aug", 09 => "Sep", 10 => "Oct", 11 => "Nov", 12 => "Dec");
		$mon=(int)substr($date,4,2); 
		?>
					<li class="event">
						<input type="radio" name="tl-group" <? echo("id='$uid'");?>/>
						<label></label>
                        <div class="thumb user-4"><span><? echo("$date[6]$date[7]/$mons[$mon]");?></span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><label <? echo("for='$uid'");?>><? echo($title);?></label></h3><p align="right"><h4>by <? echo($name);?></h4>
									<p><? echo nl2br($content);?></p>
								</div>
							</div>
						</div>
                        
					</li>
                    <?
						}
	mysql_close($conn);
	?>
					<!--

					<li class="event">
						<input type="radio" name="tl-group" id="1"/>
						<label></label>
						<div class="thumb user-6"><span>18 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3><label for="1">I ain't shooting this thing, I hate guns.</label></h3>
									<p>Ha, didn't even stay for the wedding. Just took his million spacebucks and ran. And you will not call me 'you'. You will never address me as 'you'. You will call me 'your royal highness'. I really must go back. I shouldn't have run away. I realize now that love is one luxury a princess cannot afford. </p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-3"><span>17 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>My brains are going into my feet! </h3>
									<p>We're done with you. Go back to the golf course and work on your putz. Nah, he got the upside, I got the downside. See there's two sides to every Schwartz.  What's the matter with this thing, what's all that churnning and bubbling, you call that radar screen? Ah, planet Druidia. And under that air shield, ten thousand years of fresh air. We must get through that air shield! Say goodbye to your two best friends, and I don't mean your pals in the Winnebago. So, Lone Star, now you see that evil will always triumph because good is dumb. </p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-5"><span>16 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>Would you please stop calling me that?</h3>
									<p>You make it so difficult sometimes. You have your moments. Not many of them, but you do have them. You're not actually going IN to an asteroid field? I happen to like nice men. This bucket of bolts's never gonna get us past that blockade. We're going to get pulverized if we stay out here much longer. Evacuate remaining ground staff.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-2"><span>15 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>Funny, she doesn't look Druish</h3>
									<p>It's not that we're afraid, far from it, it's just that we've got this thing about death... It's not us! I'm a mog: half man, half dog. I'm my own best friend! The minute we move in they're gonna spot us on their radar. Whoa, hold it, time. Chief... I can't... I can't go any further. I can't go any further. </p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-7"><span>14 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>Ouch! Pay attention to what you're doing! </h3>
									<p>Artoo says that the chances of survival are 725 to 1. Actually Artoo has been known to make mistakes... from time to time... Oh dear...The odds of successfully surviving an attack on an Imperial Star Destroyer are approximately... Sir, it's quite possible this asteroid is not entirely stable. Oh. They've encased him in Carbonite. He should be quite well protected. If he survived the freezing process, that is. If I may say so, sir, I noticed earlier the hyperdrive motivator has been damaged. It's impossible to go to lightspeed. Stupid little short-circuit! He'll be *quite* all right. </p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-1"><span>13 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>Rhhhnn gggnn. Garrrrr!</h3>
									<p>Rrrrrrr rrrraaaahhh rrrrrrggghhhhnn! Arrrggghhnnn. Grrrhn. Gahr. Rrrrrrr rrrraaaahhh rrrrrrggghhhhnn! Grrf. Arrrggghhnnn. Grrrhn. Gahr. Grrrhn. Gahr. Rrrrrrr rrrraaaahhh rrrrrrggghhhhnn! Gahr. Gahr. Arrrggghhnnn. Grrrhn.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="event">
						<input type="radio" name="tl-group"/>
						<label></label>
						<div class="thumb user-8"><span>12 Nov</span></div>
						<div class="content-perspective">
							<div class="content">
								<div class="content-inner">
									<h3>I hope it's for adult dating</h3>
									<p>Can we talk? OK, we all know Prince Valium is a pill. But you could have married him for your father's sake and had a headache for the next 25 years. Well, goodbye virgin alarm. Besides he got a sexy voice. He might be cute. Hey wait, you forgot to get married! And if we go over our pagecount, the network will kill us. You know, you've got a very unique voice. You should be in silent films.</p>
								</div>
							</div>
						</div>
					</li>-->
					
				</ul>
			</section>
<a href="http://sbj009.dothome.co.kr/?pageid=1&page_id=2&mod=editor"><img src="./images/pencil.png" name="write" width="70" height="70" id="write"></a>
		</div><!-- /container -->
	</body>
</html>