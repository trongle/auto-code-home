<form id="filefilessize" >
	<div class="form-group col-md-6">
		<label>Min:</label>
		<input type="number" id="filefilessize-min"  name="my_element[validateOption][filefilessize][min]" class="form-control" />
	</div>  

	<div class="form-group col-md-6">
		<label>Max:</label>
		<input type="number" id="filefilessize-max" name="my_element[validateOption][filefilessize][max]" class="form-control"/>
	</div>

	<div class="form-group col-md-12">
		Use byte string: <input type="checkbox" id="filefilessize-useByteString" name="my_element[validateOption][filefilessize][useByteString]" checked/>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="filefilessize-min"  name="my_element[validateOption][filefilessize][min]" class="form-control" />
	<input type="hidden" class="filefilessize-max" name="my_element[validateOption][filefilessize][max]" class="form-control"/>
	<div class="hide">
		<input type="checkbox" class="filefilessize-useByteString" name="my_element[validateOption][filefilessize][useByteString]" checked/>
	</div>
</div>