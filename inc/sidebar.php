			<div class="last-xs first-sm first-md first-lg col-xs-12 col-sm-3 col-md-3 col-lg-3" id="sidebar">
	            <div class="widget">
		            <p><b>Menu</b></p>
		            <nav>
			            <ul>
				            <li><a href="/">Home</a></li>
				            <li><a href="/year/2015">2015</a></li>
				            <li><a href="/year/2016">2016</a></li>
				            <li><a href="/year/2017">2017</a></li>
				            <li><a href="/year/2018">2018</a></li>
				            <li><a href="/year/2019">2019</a></li>
				            <li><a href="/year/2020">2020</a></li>
				            <li><a href="/year/2021">2021</a></li>
				            <li><a href="/year/2022">2022</a></li>
				            <li><a href="/year/2023">2023</a></li>
			            </ul>
		            </nav>
	            </div>
	            <div class="widget calendar">
		            <div class="month">
		            <?php
			            $months=array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
			            $current_month=date('n');
			            $month=date('n');
						$current_year=date('Y');
						$current_day=date('d');
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
							$class = (($day==$current_day) && ($month==$current_month)) ? 'today' : 'day';
							$class .= ($pos==6) ? ' sat' : '';
							$class .= ($pos==0) ? ' sun' : '';
				
							echo '<td class="'.$class.'">'.$day.'</td>';
							if ($pos==0) echo '</tr><tr>';
						}
						echo '</tr>';
						echo '</table>';
						?>
		            </div>
	            </div>
	            <div class="widget">
		            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Weeknumber Sidebar -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-2406264984624429"
					     data-ad-slot="3783958667"
					     data-ad-format="auto"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
	            </div>
            </div>