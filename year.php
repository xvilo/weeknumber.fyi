<?php 
	include('inc/header.php');
	include('inc/sidebar.php'); ?>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="main">
	            <div class="widget">
	            <h1>Week numbers <?php echo $_GET['year'] ?></h1>
	            <div class="fb-like" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><br><br><a href="https://twitter.com/share" class="twitter-share-button" data-size="small">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br><br><div class="g-plus" data-action="share" data-annotation="bubble"></div>
				<p>The Calendar with <b>week numbers</b> for <?php echo $_GET['year'] ?></p>
	            </div>
	            <div class="spacer">
	            </div>
	            <div class="widget">
	            	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Week Number bottom -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-2406264984624429"
					     data-ad-slot="6179021868"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
	            </div>
	            <div class="spacer">
	            </div>
	            <div class="widget">
<?php
	$months=array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$current_month=date('n');
	$current_year=$_GET['year'];
	$year=date('Y');
	$current_day=date('d');
	$month=0;?>
			<div class="calendar row">
				<?php for ($row=1; $row<=3; $row++) {
					for ($column=1; $column<=4; $column++) {
						echo '<div class="month col-xs-12 col-sm-9 col-md-4 col-lg-4">';
				
						$month++;
				
						$first_day_in_month=date('w',mktime(0,0,0,$month,1,$current_year));
						$month_days=date('t',mktime(0,0,0,$month,1,$current_year));
							
						// in PHP, Sunday is the first day in the week with number zero (0)
						// to make our calendar works we will change this to (7)
						if ($first_day_in_month==0){
							$first_day_in_month=7;
						}
						echo '<table>';
						echo '<th colspan="7">'.$months[$month-1].'</th>';
						echo '<tr class="days"><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td>';
						echo '<td class="sat">Sa</td><td class="sun">Su</td></tr>';
						echo '<tr>';
						for($i=1; $i<$first_day_in_month; $i++) {
							echo '<td> </td>';
						}
						for($day=1; $day<=$month_days; $day++) {
							$pos=($day+$first_day_in_month-1)%7;
							$class = (($day==$current_day) && ($month==$current_month) && ($current_year==$year)) ? 'today' : 'day';
							$class .= ($pos==6) ? ' sat' : '';
							$class .= ($pos==0) ? ' sun' : '';
				
							echo '<td class="'.$class.'">'.$day.'</td>';
							if ($pos==0) echo '</tr><tr>';
						}
						echo '</tr>';
						echo '</table>';
						echo '</div>';
					}
				}?>
			</div>
	    </div>
	    <div class="spacer">
	            </div>
	            <div class="widget">
	            	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Week Number bottom -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-2406264984624429"
					     data-ad-slot="6179021868"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
	            </div>
	            <div class="spacer">
	            </div>
     </div>

<?php include('inc/footer.php')?>