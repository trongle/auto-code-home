<form class="sitemaplastmod">
	<div class="form-group col-md-12">
		<label>Message error:</label><br/>
		<ul class="messageError list-group">
			<li class="list-group-item">NOT_VALID => "The input is not a valid sitemap lastmod"<br/>=> 
				<input type="text" name="my_element[messageError][sitemaplastmod][Zend\Validator\Sitemap\Lastmod::NOT_VALID]" 
						class="form-control input-small sitemaplastmod-NOT_VALID">
			</li>
			<li class="list-group-item">INVALID => "Invalid type given. String expected"<br/>=> 
				<input type="text" name="my_element[messageError][sitemaplastmod][Zend\Validator\Sitemap\Lastmod::INVALID]" 
						class="form-control input-small sitemaplastmod-INVALID">
			</li>
		</ul>
	</div>
	<div class="form-group col-md-12">	   
    	<button class="btn btn-primary accept" >Accept</button>
    	<button class="btn btn-info cancel" >Cancel</button>		        			    
    </div>
     
</form>
<div class="hidden-edit">
	<input type="hidden" name="my_element[messageError][sitemaplastmod][Zend\Validator\Sitemap\Lastmod::NOT_VALID]" class="sitemaplastmod-NOT_VALID">
	<input type="hidden" name="my_element[messageError][sitemaplastmod][Zend\Validator\Sitemap\Lastmod::INVALID]" class="sitemaplastmod-INVALID">
</div>