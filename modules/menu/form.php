<?php
$obj=DB('menu');
if($uid){
   $info=$obj->find($uid);
   print_r($info);
}
if(isset($_POST['item'])){
   $info=[
      'item'=>$_POST['item'],
      'description'=>$_POST['description'],
      'category'=>implode($_POST['category']),
      'status'=>$_POST['status'],
   ];

  if($obj->save($info,$uid)){
   Session::set('gt',"Data".($uid?"Updated": "Saved"). "Successfully");
   redirect("menu");
  }else{
   echo "Something went wrong";
  }
}


?>
<div class="alert alert-primary h3 text-center">
   Item <?=$uid?"Edit":'Add'?> Form
</div>
<form method="POST">
     <div class="mb-3">
        <label for="item"> Item Name</label>
        <input type="text" class="form-control" id="item" placeholder="Enter Items Name"
        value="<?=$info['item']??''?>" require name="item">
     </div>
     <div class="mb-3">
        <label for="description"> Description</label>
        <textarea  class="form-control" id="description" rows="10" placeholder="Enter Item description" 
         name="description"><?=$info['item']??''?></textarea>
     </div>
     <div class="mb-3">
        <label >Select Category</label>
        <?php $cats=explode(',',$info['category']??'');?>
        <select name="category[]" class="form-select" multiple>
          <option value="Starter" <?= (in_array('Starter',$cats))?'selected':'';?>>Starter</option>
          <option value="Main Course" <?= (in_array('Main Course',$cats))?'selected':'';?>>Main Course</option>
          <option value="Fast food" <?= (in_array('Fast food',$cats))?'selected':'';?>>Fast food</option>
          <option value="Dessert" <?= (in_array('Dessert',$cats))?'selected':'';?>>Dessert</option>
          <option value="Sweets" <?= (in_array('Sweets',$cats))?'selected':'';?>>Sweets</option>
      
        </select>
</div>
     <div class="mb-3">
        <label>Status</label>
        <select  name="status" class="form-control">
         <option value="yes">Yes</option>
         <option value="no" <?=($info['status']??""=='no')? 'selected':'';?>>No</option>
        </select>
        </div> 
     <div class="text-center">
      <button class="btn btn-success"><?=$uid?"Update":'Save'?></button>
     </div>
  
 </form>