<form id="bitwise">	
	<div class="form-group col-md-6">
		<label for="adapter">Control:</label>
		<input type="number" id="bitwise-control" name="my_element[validateOption][bitwise][control]" class="form-control" />
	</div>
	          
	<div class="form-group col-md-6">
		<label for="length">Operator:</label>
		<input type="text" id="bitwise-operator" name="my_element[validateOption][bitwise][operator]" placeholder="xor | and" class="form-control" />
	</div>

	<div class="form-group col-md-12">
		Strict: <input type="checkbox" id="bitwise-strict" name="my_element[validateOption][bitwise][strict]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form> 
<div class="hidden-edit">
	<input type="hidden" class="bitwise-control" name="my_element[validateOption][bitwise][control]" class="form-control" />
	<input type="hidden" class="bitwise-operator" name="my_element[validateOption][bitwise][operator]" placeholder="xor | and" class="form-control" />
	<div class="hide">
		<input type="checkbox" class="bitwise-strict" name="my_element[validateOption][bitwise][strict]" />
	</div>
</div>