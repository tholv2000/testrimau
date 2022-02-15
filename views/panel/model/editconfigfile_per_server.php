<div class="form-group">
    <input type="hidden" id="id2" value="<?=$id?>">
    <label for="rules">File Name :</label>
    <input type="text" class="form-control" id="namee" value="<?=$filename?>" disabled>
    <label for="rules">Rules :</label>
    <textarea id="rulese" rows="20" class="form-control" <?php if (in_array("disable",explode("_",$filename))) echo "disabled";?>><?=$filecontent?></textarea>
  </div>
  
