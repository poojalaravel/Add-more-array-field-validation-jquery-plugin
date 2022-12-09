<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="validation.js"></script>
<style>

.error{
    color:red;
}
</style>
<form name="checkform" class="form-control" id="checkform" method="post" action="">
    <select name="field_name[]" id="field_1">
        <option value="">Select any</option>
        <option value="1">abc</option>
        <option value="2">abc</option>
        <option value="3">abc</option>
        <option value="4">abc</option>
    </select>
  
    <select name="field_name[]" id="field_2">
        <option value="">Select any</option>
        <option value="5">xyz</option>
        <option value="6">xyz</option>
        <option value="7">xyz</option>
        <option value="8">xyz</option>
    </select>
  
    <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="addmore[]" id="addmore" placeholder="Enter your Name" class="form-control" /></td>  
                <td><input type="text" name="Qty[]" id="Qty" placeholder="Enter your Qty" class="form-control" /></td>  
                <td><input type="text" name="Price[]" id="Price" placeholder="Enter your Price" class="form-control" /></td>  
                
                <!-- <td><input type="text" name="addmore[]" id="addmore1" placeholder="Enter your Name" class="form-control" /></td>  
                <td><input type="text" name="Qty[]" id="Qty1" placeholder="Enter your Qty" class="form-control" /></td>  
                <td><input type="text" name="Price[]" id="Price1" placeholder="Enter your Price" class="form-control" /></td> --> 
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>   
            </tr>  
        </table> 

<input class="submit" value="Submit" type="submit">
</form>
<script type="text/javascript">
    $().ready(function() {
        $("#checkform").validate({
            rules: {
                "field_name[]": "required",
                "addmore[]":"required",
                "Qty[]":"required",
                "Price[]":"required",

            },
            
            messages: {
                "field_name[]": "Please select field option",
                "addmore[]":"Please select field option",
                "Qty[]":"Please select field option",
                "Price[]":"Please select field option",
            }
        });

        var i = 0;
       
       $("#add").click(function(){
      
           ++i;
      
           $("#dynamicTable").append('<tr><td><input type="text" name="addmore[]" id="addmore'+i+'" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="Qty[]" id="Qty'+i+'" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="Price[]" id="Price'+i+'" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
       });
      
       $(document).on('click', '.remove-tr', function(){  
            $(this).parents('tr').remove();
       });
    });
</script>
