<form class="datestep" >
	<div class="form-group col-md-6">
	    <label for="min">Base value:</label>
	    <input type="text" class="datestep-baseValue form-control" name="my_element[validateOption][datestep][baseValue]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Step:</label>
	    <input type="text" class="datestep-step form-control" name="my_element[validateOption][datestep][step]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Format:</label>
	    <input type="text" class="datestep-format form-control" name="my_element[validateOption][datestep][format]" />
	</div>

	<div class="form-group col-md-6">
	    <label for="min">Timezone:</label>
	    <input type="text" class="datestep-timezone form-control" name="my_element[validateOption][datestep][timezone]" />
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div> 
</form>
<div class="hidden-edit">
	<input type="hidden" class="datestep-baseValue" name="my_element[validateOption][datestep][baseValue]" class="form-control" />
	<input type="hidden" class="datestep-step" name="my_element[validateOption][datestep][step]" class="form-control" />
	<input type="hidden" class="datestep-format" name="my_element[validateOption][datestep][format]" class="form-control" />
	<input type="hidden" class="datestep-timezone" name="my_element[validateOption][datestep][timezone]" class="form-control" />
</div>