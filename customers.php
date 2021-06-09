<?php require_once 'header.php'; 
	
	// add website list here.... 
	$link = array(
		array('Serial No.', 'Country Name', 'Visit Our site' ),
		array('1', "Country_name" => "LIDL(German)",        "Site_link" => "<a href='http://www.lidl.de/' target='_blank'>Lidl</a>" ),
		array('2', "Country_name" => "ALDi (German)",       "Site_link" =>  "<a href='http://www.aldi.com/' target='_blank'>Aldi</a>" ),
		array('3', "Country_name" => "REVE (German)",       "Site_link" =>  "<a href='http://www.reve.com/' target='_blank'>Reve</a>" ),
		array('4', "Country_name" => "Galaraies (Franch)",  "Site_link" => "<a href='http://www.galaraies.com/' target='_blank'>Galaraies</a>" ),
		array('5', "Country_name" => "M & S MODE (Swiden)", "Site_link" => "<a href='http://www.msmode.nl/' target='_blank'>M & S MODE</a>" ),
		array('6', "Country_name" => "NEXT (USA)",          "Site_link" => "<a href='http://www.next.co.uk/' target='_blank'>NEXT</a>" ),
		array('7', "Country_name" => "ZARA (SPAIN)",        "Site_link" => "<a href='http://www.zara.com/es/en/' target='_blank'>ZARA</a>"),
		array('8', "Country_name" => "Li",                  "Site_link" => "<a href='#' target='_blank'>Li</a>" ),
		array('9', "Country_name" => "WAL MART",            "Site_link" => "<a href='http://www.walmart.ca/en' target='_blank'>WAL MART</a>" ),
		array('10', "Country_name" => "K. MART",            "Site_link" => "<a href='http://www.kmart.com' target='_blank'>K. MART</a>"),
		array('11', "Country_name" => "ZXY",                "Site_link" => "<a href='http://www.zxyinternational.com/' target='_blank'>ZXY</a>"),
		array('12', "Country_name" => "CARRY FOUR",         "Site_link" => "<a href='http://www.carrefour.com' target='_blank'>CARRY FOUR</a>"),
		array('13', "Country_name" => "TESCO (UK)",         "Site_link" => "<a href='http://www.tesco.com' target='_blank'>TESCO</a>" ),
		array('14', "Country_name" => "TEX GROUP",          "Site_link" => "<a href='#' target='_blank'>TEX GROUP</a>" )
	
	);
?>
<div class="row">
	<div class="span12">
		<?php if (count($link) > 0 ): ?>
			<table class="table table-bordered">
				<caption><h1 class="page-header">Our Valued Customers</h1></caption>
				<tbody>
					<?php foreach($link as $row) : array_map('htmlentities', $row); ?>
						<tr>
							<td style="text-align:center;"><?php echo implode('</td><td style="text-align:center;">', $row); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table> <!-- .table table-bordered -->
		<?php endif ?>
	</div> <!--  .span12 -->
</div> <!-- .row -->
<?php require_once 'footer.php'; ?>