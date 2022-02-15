<?php
//echo var_dump($statusx);
//echo strlen($statusx);
switch ($statusx) {
	case 'SecRuleEngine On' :
		$papar = '<img src="/asset/image/onwaf.jpg" />';
		$ion = 'checked="checked"';
		$ioff = '';
		$ido = '';
		break;
	case 'SecRuleEngine DetectionOnly' :
		$papar = '<img src="/asset/image/logwaf.jpg" />';
		$ioff = '';
		$ion = '';
		$ido = 'checked="checked"';
		break;
	default :
		$papar = '<img src="/asset/image/offwaf.jpg" />';
		$ido = '';
		$ioff = 'checked="checked"';
		$ion = '';
		break;
}
?>
<div class="page-content">						
	<div class="row">
		<div class="col-md-3" >
		
		</div>
		<div class="col-md-3" >
		
		
			<div class="control-group">
				<h4>Select Mode:</h4> <br />
				<div class="radio">
					<label>
						<input <?=$ido?>  name="form-field-radio" id="do"  type="radio" class="ace input-lg" />
						<span class="lbl bigger-120">DetectionOnly</span> </label>
				</div>
				
				<div class="radio">
					<label>
						<input <?=$ion?>  name="form-field-radio" id="on" type="radio" class="ace input-lg" />
						<span class="lbl bigger-120"> On</span> </label>
				</div>
				
				<div class="radio">
					<label>
						<input <?=$ioff?>  name="form-field-radio" id="off" type="radio" class="ace input-lg" />
						<span class="lbl bigger-120"> Off</span> </label>
				</div>


			</div>
		</div>
		<div class="col-md-6">
						
							<h4>Mod Security Status:</h4> <br />
							<?=$papar?>	
		</div>
	</div>
	<hr/>
</div>
<script src="/asset/assets/js/jquery.2.1.1.min.js"></script>

<script>
$(document).ready(function() {
    clearTimeout(lari);
    clearTimeout(livelog);
   		
});
$('#dimana').click(function() {
	let text = $('#dimana').text();
	let id = parseInt(text.split(" >")[3]);
	$('#paparx').load('panel/confadvance',{id:id}).show();
});

$('#do').change(function() {	       
       $.post('panel/conf_change_per_server',{mod:'DetectionOnly',host:'<?=$hostname?>','<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},function(data){
		$('#paparx').load('panel/config_per_server',{host:'<?=$hostname?>'}).show();
	   });
       
});
$('#on').change(function() {
       $.post('panel/conf_change_per_server',{mod:'On',host:'<?=$hostname?>','<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},function(data){
		$('#paparx').load('panel/config_per_server',{host:'<?=$hostname?>'}).show();
	   });
});
$('#off').change(function() {
       
       $.post('panel/conf_change_per_server',{mod:'Off',host:'<?=$hostname?>','<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},function(data){
		$('#paparx').load('panel/config_per_server',{host:'<?=$hostname?>'}).show();
	   });
});

</script>
