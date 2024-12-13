<?php
$data=DB('menu')->all();
if(isset($_POST['del'])){
    $delid=implode(",",$_POST['del']);
    DB('menu')->delete($delid);
    redirect('menu');
}


?>
<form method="post" >
<table class="table table-striped border" id="list">
    <thead class="table-dark">
        <tr>
            <th>S.no</th>
            <th> <input type="checkbox" id="all" onclick="checkdel(this)"><label for="all">all</label></th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Status</th>
            <th>Item Inserted</th>
            <th>Item Updated</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $index=0;
        foreach($data as $info){?>
    
        <tr>
            <td><?=++$index?></td>
            <td><input type="checkbox"   name="del[]" class="delc" value="<?=$info['id'];?>"></td>
            <td><?=$info['item'];?></td>
            <td><?=$info['category'];?></td>
            <td><?=$info['status'];?></td>
            <td><?=date('d-M-Y h:i A' ,strtotime($info['created_at']));?></td>
            <td><?=date('d-M-Y h:i A' ,strtotime($info['updated_at']));?></td>
        </tr>
        <?php } ?>
        
    </tbody>
</table>
<div id="ditem" style="display: none;">
      <button class="btn btn-danger">Delete Selected Items</button>
</div>
</form>