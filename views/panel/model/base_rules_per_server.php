


<?php

	
	if ($mytab == "#anomaly" ){
		$ptap_anomaly = 'class="active"';
		$itap_anomaly = 'active';
		
		$ptap_home = '';
		$itap_home = '';
		
		$ptap_profile = '';
		$itap_profile = '';
		$ptap_comodo = '';
		$itap_comodo = '';
		$ptap_messages = '';
		$itap_messages = '';
		$ptap_data = '';
		$itap_data = '';
		
	}
	else if ($mytab == "#profile" ){
		
		$ptap_profile = 'class="active"';
		$itap_profile = 'active';
		
		$ptap_anomaly = '';
		$itap_anomaly = '';
		
		$ptap_home = '';
		$itap_home = '';
		$ptap_comodo = '';
		$itap_comodo = '';
		$ptap_messages = '';
		$itap_messages = '';
		$ptap_data = '';
                $itap_data = '';
		

	}
	else if ($mytab == "#messages" ){
		
		$ptap_profile = '';
		$itap_profile = '';
		
		$ptap_anomaly = '';
		$itap_anomaly = '';
		
		$ptap_home = '';
		$itap_home = '';
		$ptap_comodo = '';
		$itap_comodo = '';
		$ptap_messages = 'class="active"';
		$itap_messages = 'active';
		$ptap_data = '';
                $itap_data = '';
		

	}
        else if ($mytab == "#comodo" ){
		
		$ptap_profile = '';
		$itap_profile = '';
		
		$ptap_anomaly = '';
		$itap_anomaly = '';
		
		$ptap_home = '';
		$itap_home = '';
		
                $ptap_messages = '';
		$itap_messages = '';
                
		$ptap_comodo = 'class="active"';
		$itap_comodo = 'active';
		$ptap_data = '';
                $itap_data = '';
		

	}
	
	else if ($mytab == "#data") {
		$ptap_home = '';
                $itap_home = '';

                $ptap_anomaly = '';
                $itap_anomaly = '';

                $ptap_profile = '';
                $itap_profile = '';
                $ptap_messages = '';
                $itap_messages = '';
                $ptap_comodo = '';
                $itap_comodo = '';
                $ptap_data = 'class="active"';
                $itap_data = 'active';
	}
	
	else {
                $ptap_home = 'class="active"';
                $itap_home = 'active';

                $ptap_anomaly = '';
                $itap_anomaly = '';

                $ptap_profile = '';
                $itap_profile = '';
                $ptap_messages = '';
                $itap_messages = '';
                $ptap_comodo = '';
                $itap_comodo = '';
                $ptap_data = '';
                $itap_data = '';
        }

?>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="mainTabs">
    <li role="presentation" <?=$ptap_home?>    ><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Base Rules</a></li>
    <li role="presentation" <?=$ptap_anomaly?> ><a href="#anomaly" aria-controls="anomaly" role="tab" data-toggle="tab">Anomaly Protocol</a></li>
    <li role="presentation" <?=$ptap_profile?> > <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Experimental Rules</a></li>
    <li role="presentation" <?=$ptap_comodo?> ><a href="#comodo" aria-controls="comodo" role="tab" data-toggle="tab">Comodo Rules</a></li>
    <li role="presentation" <?=$ptap_messages?> ><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Create Rules</a></li>
    <li role="presentation" <?=$ptap_data?> ><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Data</a></li>
    <li role="presentation"><a href="#aktif" aria-controls="aktif" role="tab" data-toggle="tab">Activated Rules</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane <?=$itap_home?>" id="home">
    	

		
		<table class='table table-bordered'>
			<tr>
				<th>Mod Security Config Files</th><th>Edit Config File</th><th>Status</th>
			</tr>
			<?php
			foreach($baseRules as $file) {
			?>
			<tr >
                            <td onclick="readfile('a','<?=$file?>');"><?=str_replace('_',' ',substr($file,19,-5))?></td>
				<td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('a','<?=$file?>')">Edit</button></td>
				<td width="5%">
				<?php if (in_array($file, $activatedRules)){ ?>
		
			
				   	<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('a','<?=$file?>',1)" id="skip-validation" type="checkbox" checked="true"  class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
		
				<?php } else { ?> 
					
					<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('a','<?=$file?>',0)" id="skip-validation" type="checkbox"   class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } ?>
				

				</td>
			</tr>
			<?php } ?>
			
		</table>

</div>
    <div role="tabpanel" class="tab-pane <?=$itap_anomaly?>" id="anomaly"> 
    	
    	<!-- rulse exp -->

		
		<table class='table table-bordered'>
			<tr>
				<th>Mod Security Config Files</th><th>Edit Config File</th><th>Status</th>
			</tr>
			<?php
			foreach($anomalyProtocol as $file) {
			?>
			<tr >

				<td><?=str_replace('_',' ',substr($file,19,-5))?></td>
				<td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('c','<?=$file?>')">Edit</button></td>
				<td width="5%">
								<!---muiz-->
				
						

				<?php if (in_array($file, $activatedRules)){ ?>
		
		
				   	
				   	<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('c','<?=$file?>',1)" id="skip-validation" type="checkbox" checked="true"  class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
		
				<?php } else { ?> 
	
		    			
		    		<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('c','<?=$file?>',0)" id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } ?>
				
				<input type="checkbox" class="ace ace-switch ace-switch-3" />

				</td>
			</tr>
			<?php } ?>
			
		</table>


    </div>
    <div role="tabpanel" class="tab-pane <?=$itap_profile?>" id="profile">
    	
    	<!-- rulse exp -->

		
		<table  class="table table-bordered">
			<tr>
				<th>Mod Security Config Files</th><th>Edit Config File</th><th>Status</th>
			</tr>
			
			<?php foreach($experimentalRules as $file) { ?>
			
			<tr>
				<td><?=str_replace('_',' ',substr($file,19,-5))?></td>
				<td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('b','<?=$file?>')">Edit</button></td>
				<td width="5%">
				<?php if (in_array($file, $activatedRules)){ ?> 
			
				<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('b','<?=$file?>',1)" id="skip-validation" type="checkbox" checked="true"   class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } else { ?> 
					
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('b','<?=$file?>',0)" id="skip-validation" type="checkbox"   class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } ?>
				</td>
			</tr>
			<?php } ?>
			
		</table>


	</div>
  <div role="tabpanel" class="tab-pane <?=$itap_comodo?>"   id="comodo">
    	
    	<table class='table table-bordered'>
			<tr>
				<th>Mod Security Config Files</th><th>Edit Config File</th><th>Status</th>
			</tr>
			<?php
			foreach($comodoRules as $file) {
			?>
			<tr >
				<td><?=str_replace('_',' ',substr($file,3,-5))?></td>
				<td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('e','<?=$file?>')">Edit</button></td>
				<td width="5%">
				<?php if (in_array($file, $activatedRules)){ ?>
		
			
				   	<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('e','<?=$file?>',1)" id="skip-validation" type="checkbox" checked="true"  class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
		
				<?php } else { ?> 
					
					<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('e','<?=$file?>',0)" id="skip-validation" type="checkbox"   class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } ?>
				

				</td>
			</tr>
			<?php } ?>
			
		</table>
    	
    </div>
    <div role="tabpanel" class="tab-pane <?=$itap_messages?>"   id="messages">
    	
    	<table class='table table-bordered'>
			<tr>
				<th>Mod Security Config Files</th><th>Edit Config File</th><th>Status</th>
			</tr>
			<?php
			foreach($rimauRules as $file) {
			?>
			<tr >
				<td><?=str_replace('_',' ',substr($file,19,-5))?></td>
				<td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('d','<?=$file?>')">Edit</button></td>
				<td width="5%">
				<?php if (in_array($file, $activatedRules)){ ?>
		
			
				   	<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('d','<?=$file?>',1)" id="skip-validation" type="checkbox" checked="true"  class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
		
				<?php } else { ?> 
					
					<div class="widget-toolbar">
					<label> <small class="green"> <b>Filter</b> </small>
						<input onclick="aktif('d','<?=$file?>',0)" id="skip-validation" type="checkbox"   class="ace ace-switch ace-switch-4" />
						<span class="lbl middle"></span> </label>
					</div>
				<?php } ?>
				

				</td>
			</tr>
			<?php } ?>
			
		</table>
    	
    </div>
    <div role="tabpanel" class="tab-pane <?=$itap_data?>"   id="data">

        <table class='table table-bordered'>
                        <tr>
                                <th>Mod Security Config Files</th><th>Edit Data</th>
                        </tr>
			<tr>
                                <td></td>
                                <td width="10%"><button data-toggle="modal" data-target="#adddata" style="width:100%">Add</button></td>
                        </tr>
                        <?php
                        foreach($data as $file) {
                        ?>
                        <tr >
                                <td><?=$file?></td>
                                <td width="10%"><button data-toggle="modal" data-target="#editconfig" style="width:100%" onclick="editconfigfile('f','<?=$file?>')">Edit</button></td>
                        </tr>
                        <?php } ?>
			<!--<tr>
				<td></td>
				<td width="10%"><button data-toggle="modal" data-target="#adddata" style="width:100%">Add</button></td>
			</tr> -->

                </table>

    </div>
    <div role="tabpanel" class="tab-pane " id="aktif">
    	
		
		
		<table class='table table-bordered'>
			<tr>
				<th>Mod Security Config Files</th><th>Status</th>
			</tr>
			<?php foreach($activatedRules as $file) { ?>
			
			<tr>
				<td><?=str_replace('_',' ',substr($file,3,-5))?></td><td>Enabled</td>
			</tr>
			<?php } ?>
			
		</table>
    	
    </div>
  </div>

</div>
<div class="modal fade" id="editconfig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:750x">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Config File</h4>
      </div>
      <div class="modal-body" >
        <div id="popedit">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="saveedit();" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="adddata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:750x">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Data file</h4>
      </div>
      <div class="modal-body" >
        <div id="popadd">
		<div class="form-group">
    			<input type="hidden" id="id3" value="f">
    			<label for="rules">File Name :</label>
    			<input type="text" class="form-control" id="nameee" value="">
    			<label for="rules">Rules :</label>
    			<textarea id="rulesee" rows="20" class="form-control" value=""></textarea>
  		</div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="add();" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<script>
	function aktif(id,fail,ack){
		
		var url = 'panel/actif_rules_per_server'
		
                    $.post(url,{id:id,fail:fail,ack:ack,host:"<?=$host?>"},function(data){
			
			var link = $('li.active a[data-toggle="tab"]');
			link.parent().removeClass('active');
			var tabLink = link.attr('href');
			
			$('#paparx').load('panel/rules_per_server',{stab:tabLink,host:"<?=$host?>"}).show();
			

			

			

		});
	}
        function readfile(id,file){
            $('#paparx').load('panel/rulesfail',{id:id,file:file,host:"<?=$host?>"}).show();
        }
	

	function editconfigfile(id,file) {
		$.post('panel/editconfigrule',{id:id,file:file,host:"<?=$host?>"},function(data){
			$("#popedit").html(data);
		});
	}
	
	function saveedit() {
		if ($("#id2").val()=="d") alert("This file can't be edited");
		//console.log("This file can't be edited" + $("#id2").val());	
		else {
			let dataserver = {id:$("#id2").val(),name:$("#namee").val(),rules:$("#rulese").val(),host:"<?=$host?>"};
			
			$.post("panel/editconfigfiledetail",dataserver,function(data){
				var link = $('li.active a[data-toggle="tab"]');
                        	link.parent().removeClass('active');
                        	var tabLink = link.attr('href');
				$('#paparx').load('panel/rules_per_server',{stab:tabLink,host:"<?=$host?>"}).show();
			});
		}
	}

	function add() {
                //if ($("#id2").val()=="d") alert("This file can't be edited");
                //console.log("This file can't be edited" + $("#id2").val());
                //else {
                        let dataserver = {id:$("#id3").val(),name:$("#nameee").val(),rules:$("#rulesee").val(),host:"<?=$host?>"};

                        $.post("panel/editconfigfiledetail",dataserver,function(data){
                                var link = $('li.active a[data-toggle="tab"]');
                                link.parent().removeClass('active');
                                var tabLink = link.attr('href');
                                $('#paparx').load('panel/rules_per_server',{stab:tabLink,host:"<?=$host?>"}).show();
                        });
                //}
        }
	$('#dimana').click(function() {
        	let text = $('#dimana').text();
        	let id = parseInt(text.split(" >")[3]);
        	$('#paparx').load('panel/confadvance',{id:id}).show();
	});	
</script>

<script>
$(document).ready(function() {
    clearTimeout(lari);
    clearTimeout(livelog);
    		
});
</script>

		
