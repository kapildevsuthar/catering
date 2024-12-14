<?php
$obj=DB('menu');
if(isset($_POST['item'])){
   $info=[
      'item'=>$_POST['item'],
      'description'=>$_POST['description'],
      'category'=>implode($_POST['category']),
      'status'=>$_POST['status'],
   ];
//   $_POST['category']=implode(',',$_POST['category']);
  if($obj->save($info)){
   redirect("menu");
  }else{
   echo "Something went wrong";
  }
}
// echo $obj->save($x);


?>
<form method="POST">
     <div class="mb-3">
        <label for="item"> Item Name</label>
        <input type="text" class="form-control" id="item" placeholder="Enter Items Name" require name="item">
     </div>
     <div class="mb-3">
        <label for="description"> Description</label>
        <textarea  class="form-control" id="description" rows="10" placeholder="Enter Item description"  name="description"></textarea>
     </div>
     <div class="mb-3">
        <label >Select Category</label>
        <select name="category[]" class="form-select" multiple>
          <option value="Starter">Starter</option>
          <option value="Main Course">Main Course</option>
          <option value="Fast food">Fast food</option>
          <option value="Dessert">Dessert</option>
          <option value="Sweets">Sweets</option>
      
        </select>
</div>
     <div class="mb-3">
        <label>Status</label>
        <select  name="status" class="form-control">
         <option value="yes">Yes</option>
         <option value="no">No</option>
        </select>
        </div> 
     <div class="text-center">
      <button class="btn btn-success">Save</button>
     </div>
  
 </form>