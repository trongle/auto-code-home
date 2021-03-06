 			<?php if(count(@$value['validate']['option']) > 0 ): ?>
				<?php  foreach(@$value['validate']['option'] as $key => $val): ?>
					var idTem = "#<?php echo $key ?>";
					$("a[href=" + idTem+ "]").trigger("click");
						<?php foreach($val as $key2 => $val2): ?>
							$("#<?php echo $key ?>-<?php echo $key2 ?>").val("<?php echo $val2 ?>");
							<?php if($val2 == 'on'): ?>
								$("#<?php echo $key ?>-<?php echo $key2 ?>").attr("checked","checked");
							<?php endif; ?>
						<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endif; ?>

			<?php if(count(@$value['filter']['option']) > 0 ): ?>
				<?php  foreach(@$value['filter']['option'] as $key => $val): ?>
					var idTem = "#<?php echo $key ?>";
					$("a[href=" + idTem+ "]").trigger("click");
						<?php foreach($val as $key2 => $val2): ?>
							$("#<?php echo $key ?>-<?php echo $key2 ?>").val("<?php echo $val2 ?>");
							<?php if($val2 == 'on'): ?>
								$("#<?php echo $key ?>-<?php echo $key2 ?>").attr("checked","checked");
							<?php endif; ?>
						<?php endforeach; ?>

				<?php endforeach; ?>
			<?php endif; ?>


				var option2 = val.split('][');
				console.log("."+option2[1]+"-"+option2[2].replace("]=",""));
				$(".hidden-edit ."+option2[1]+"-"+option2[2].replace("]=","")).val(option[1]);




<div class="container">
	<!-- ADD NEW FORM -->
	<form id="addNameForm" action="post">
		<div class="row box" id="addNameForm">
			<div class="col-md-12 ">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">					
							<label for="type">Name Form</label>
							<input type="text" value="<?php echo @$infoForm->name ?>" class="form-control" name="inputNameForm" />
							<!-- class="hide alert alert-danger alert-dismissable" -->
							<p class="hide text-danger" id="errorNameForm">
                            	Nhập tên Form để tiếp tục !
                            </p>
						</div>
					</div>
					<div class="col-md-4">
					 	<div class="form-group">
					 		<label>&nbsp;</label><br/>
					    	<button class="btn btn-primary" type="button" id="createForm">Create Form</button>
					    </div>
					</div>
				</div>
			</div>
		</div>	
	</form>
	<!-- END ADD NEW FORM  -->

	<!-- ADD NEW ELEMENT -->
	<form id="validateForm" class="<?php echo $classHide  ?>" method="post" action ="<?php echo $urlActionValidateForm ?>">
		<div class="row box" id="addNew">
			<div class="col-md-12">
				<div class="row">					 
					 <div class="col-md-4">
					 	<div class="form-group">
					    	<label for="name">Name Element</label>
					    	<input type="text" id="nameElement" value="" name="nameElement" class="form-control"/>
					    </div>
					 </div>
					 
					 <div class="col-md-4">
					 	<div class="form-group">
					 		<label>&nbsp;</label><br/>
					    	<button class="btn btn-primary" type="button" id="addNewElement">Add new element</button>
					    </div>
					 </div>
				    	
				</div>
				
			</div>
		</div>
		<!-- END ADD NEW ELEMENT -->
		<?php foreach($infoForm->content as $nameElement => $value): ?>
		<div class="row box <?php echo $classHide  ?>" id="elementAttrs">
			<input class="nameElement" name="nameElement" type="hidden" value="<?php echo $nameElement ?>"></input>
			<div class="col-md-6">
				<h3> [...] Element</h3>
				<div class="row" style="margin-bottom: 30px;">
					<div class="col-md-6 tab" id="tabAttribute">
						<h4>Attributes</h4>
					</div>
					<div class="col-md-6 tab" id="tabOption">
						<h4>Options</h4>
					</div>
				</div>
				<!-- ATTRIBUTES -->
				<div class="row" id="attribute">
					<div class="col-md-4">
						<div class="form-group">					
						    <label for="type">Type</label>
						    <select class="form-control" name="typeElement" id="typeElement">
						    	<option value="button">Button</option>
						    	<option value="checkbox">Checkbox</option>
						    	<option value="color">Color</option>
						    	<option value="date">Date</option>
						    	<option value="datetime">Datetime</option>
						    	<option value="dateime-local">Datetime-local</option>
						    	<option value="email">Email</option>
						    	<option value="file">File</option>
						    	<option value="hidden">Hidden</option>
						    	<option value="image">Image</option>
						    	<option value="month">Month</option>
						    	<option value="number">Number</option>
						    	<option value="password">Pasword</option>
						    	<option value="radio">Radio</option>
						    	<option value="range">Range</option>
						    	<option value="reset">Reset</option>
						    	<option value="search">Search</option>
						    	<option value="select">Select</option>
						    	<option value="Submit">Submit</option>
						    	<option value="Tel">Tel</option>
						    	<option value="text">Text</option>
						    	<option value="time">Time</option>
						    	<option value="url">Url</option>
						    	<option value="week">Week</option>
						    </select>
					    </div>
					 </div>
					<div class="col-md-4">
						<div class="form-group">					
						    <label for="id">ID</label>
						    <input type="text" value="<?php echo @$value['attribute']['id'] ?>" id="idElement" name="idElement" class="form-control"/>
					    </div>
					 </div>
					 
					 <div class="col-md-4">
					 	<div class="form-group">
					    	<label for="class">Class</label>
					    	<input type="text" value="<?php echo @$value['attribute']['class'] ?>" id="classElement" name="classElement" class="form-control"/>
					    </div>
					 </div>
					 
					 <div class="col-md-4">
					 	<div class="form-group">
					 		<label for="placeElement">Placeholder</label><br/>
					    	<input type="text" value="<?php echo @$value['attribute']['placeholder'] ?>" name="placeElement" id="placeElement" class="form-control"/>
					    </div>
					 </div>
					 
					 <div class="col-md-4">
					 	<div class="form-group">
					 		<label for="valueElement">Value</label><br/>
					    	<input type="text" value="<?php echo @$value['attribute']['value'] ?>" name="valueElement" id="valueElement" class="form-control"/>
					    </div>
					 </div>

					 <div class="col-md-4">
					 	<div class="form-group">
					 		<label for="requiredElement">Required</label><br/>
					 		<?php  $checked = (@$value['requiredElement'] == 'on')? "checked" : ""; ?>
					    	<input type="checkbox" <?php echo $checked ?> name="requiredElement" id="requiredElement"/>
					    </div>
					 </div>
					 
					 <div class="col-md-4">
					 	<div class="form-group">
					 		<label for="attrElement">Attributes</label><br/>
					    	<textarea class="form-control" value="<?php echo @$value['attribute']['attr'] ?>" name="attrElement" placeholder="onclick : function()" id="attrElement" cols="30" rows="5"></textarea>
					    </div>
					 </div>
					 

				</div>
				<!-- END ATTRIBUTES -->

				<!-- OPTIONS -->
				<div class="row hide" id="option">
					<div class="col-md-4">
						<div class="form-group">					
						    <label for="id">Label name</label>
						    <input type="text" value="<?php echo @$value['option']['nameLabel'] ?>" id="nameLabel" name="nameLabel" class="form-control"/>
					    </div>
					</div>
					 
					<div class="col-md-4">
					 	<div class="form-group">
					    	<label for="class">Label class</label>
					    	<input type="text" value="<?php echo @$value['option']['classLabel'] ?>" id="classLabel" name="classLabel" class="form-control"/>
					    </div>
					</div>
					 
					<div class="col-md-4">
					 	<div class="form-group">
					 		<label for="placeElement">For</label><br/>
					    	<input type="text" value="<?php echo @$value['option']['forLabel'] ?>" name="forLabel" id="forLabel" class="form-control"/>
					    </div>
					</div>
					 
					
					
					<div id="selectbox" class="hide">
						<div class="col-md-4">
						 	<div class="form-group">
						 		<label for="emptyOption">Empty option</label><br/>
						    	<input type="text" value="<?php echo @$value['option']['emptyOption'] ?>"  name="emptyOption" id="emptyOption" class="form-control"/>
						    </div>
						</div>

						<div class="col-md-4">
						 	<div class="form-group">
						 		<label for="valueOption">Value option</label><br/>
						    	<input type="text" value="<?php echo @$value['option']['valueOption'] ?>"  name="valueOption" id="valueOption" placeholder="1,2,3,4" class="form-control"/>
						    </div>
						</div>

						<div class="col-md-4">
						    <div class="form-group">
						 		<label for="nameOption">Name option</label><br/>
						    	<input type="text" value="<?php echo @$value['option']['nameOption'] ?>" name="nameOption" placeholder="name1,name2,name3,name4" id="nameOption" class="form-control"/>
						    </div>
						</div>
					</div>
				</div>
				<!-- END OPTIONS -->
				<hr />

				<div class="row">
					<div style="margin-bottom: 30px;">
						<div class="col-md-6 tab" id="tabValidate">
							<h4>Validate</h4>
						</div>
						<div class="col-md-6 tab" id="tabFilter">
							<h4>Filter</h4>
						</div>
					</div>
				</div>
				<!-- VALIDATE AREA -->
				<div class="row " id="validateArea">
					<div class="col-md-10">
					 	<div class="form-group" >
					 		<label>&nbsp;</label><br/>
					    	<select name="validateElement" id="validateElement" class="form-control">
					    		<?php							
					    		 	$list = "<option value='not-validate'>Choose Validate Type</option>";
					    		 	foreach($this->validateElement as $vali){
					    		 		$list .= '<option value="'. ($vali['name']) .'">'. $vali['name'] .'</option>';
					    		 	}
					    		 	echo $list;
					    		?>
					    	</select>
					    </div>
					    <ul id="validateList"> </ul>    
					</div>				 
					<div class="col-md-2">
					 	<div class="form-group ">
					 		<label>&nbsp;</label><br/>
					    	<button class="btn btn-primary" type="button" id="setValidate">Set validate</button>
					    </div>
					</div> 					 
				</div>
				<!-- END VALIDATE AREA -->

				<!-- FILTER AREA -->
				<div class="row hide" id="filterArea">
					<div class="col-md-10">
					 	<div class="form-group" >
					 		<label>&nbsp;</label><br/>
					    	<select name="filterElement" id="filterElement" class="form-control">
					    		<?php				    			
					    		 	$list = "<option value='not-filter'>Choose Filter Type</option>";
					    		 	foreach($this->filterElement as $vali){
					    		 		$list .= '<option value="'. ($vali['name']) .'">'. $vali['name'] .'</option>';
					    		 	}
					    		 	echo $list;
					    		 ?>				    	
					    	</select>
					    </div>
					    <ul id="filterList"> </ul>    
					</div>					 
					<div class="col-md-2">
					 	<div class="form-group ">
					 		<label>&nbsp;</label><br/>
					    	<button class="btn btn-primary" type="button" id="setFilter">Set filter</button>
					    </div>
					</div> 					 
				</div>
				<!-- END FILTER -->

			</div>

			<div class="pull-right col-md-6 display-code">
				<h3>Code</h3>
				<div class="row-show-code hide" style="margin-bottom: 70px;">
					<div class="col-md-6 tab" id="elementForm">
						<h4>Element Form</h4>
					</div>
					<div class="col-md-6 tab" id="filterValidate">
						<h4>Filter &amp; Validate</h4>
					</div>
				</div>

				<div  name="code" id="code" class="form-control">
				
				</div>
			</div>
			 <!-- onclick="submitValidateForm()" -->
			<div class="col-md-6 col-md-offset-3 text-center" style="margin-top:80px;margin-bottom:20px">
				<button type="button" class="btn btn-success" onclick="submitValidateForm()" id="create">Save</button>
				<button type="button" class="btn btn-primary" onclick="previewValidateForm()" id="preview">Preview Code</button>
			</div>
		</div>
	<?php endforeach; ?>
	</form>
	<input type="hidden" name="formId" />
</div>






<script type="text/javascript">
	$(document).ready(function(){
		// EDIT FORM
		checkSelected();
		editFunction();
		// END EDIT FORM
		
		$("#createForm").click(function(){
			if($("input[name=inputNameForm]").val() === ""){
				$("#errorNameForm").removeClass("hide");
			}else{
				$("#errorNameForm").addClass("hide");
				$.ajax({
					url  : "<?php echo $this->url('form/default',array('action' => 'addFormDraf')) ?>",
					type : 'POST',
					data : {
						'nameForm' : $("input[name=inputNameForm]").val(),
						'user_id'  : "<?php echo $userInfo->id ?>"
					},
					success : function(id){
						if(id !== ''){
							if($("#validateForm").hasClass("hide")){
								$("#validateForm").removeClass("hide");
							}
							$("input[name=formId]").val(id);
						}
					}
				})
			}
		})

		openTab();
		showOptionSelectBox();

		var nameElement,typeElement;

		$("#addNewElement").on("click",function(){
			nameElement = $("input[name=nameElement]").val();
			typeElement = $("#typeElement").val();
			
			//show form Add Atrributes Element
			$("#elementAttrs").removeClass("hide");
			changeIdInput(nameElement);			
		})
		
		$("#setValidate").on("click",function(){
			HandleFormOption("#validateElement",$("input.nameElement").val(),"#validateList",'.showTemplateValidate','validate');
		})

		$("#setFilter").on("click",function(){
			HandleFormOption("#filterElement",$("input.nameElement").val(),"#filterList",'.showTemplateValidate','filter');
		})

	})

	function editFunction(){
		<?php foreach($infoForm->content as $nameElement => $value): ?>
			nameElement = "<?php echo $nameElement ?>";			
			changeIdInput(nameElement);
		<?php endforeach; ?>

		<?php if(count(@$value['validate']['name']) > 0 ): ?>
			<?php foreach(@$value['validate']['name'] as $key => $val): ?>
				HandleFormOption("<?php echo $val ?>",nameElement,"#validateList",'.showTemplateValidate','validate','edit');
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if(count(@$value['filter']['name']) > 0 ): ?>
			<?php foreach(@$value['filter']['name'] as $key => $val): ?>
				HandleFormOption("<?php echo $val ?>",nameElement,"#filterList",'.showTemplateValidate','filter','edit');
			<?php endforeach; ?>
		<?php endif; ?>
	}

	
	function bindValidateForm(){
		<?php foreach($infoForm->content as $nameElement => $val): ?>
			<?php if(count(@$val['validate']['option']) > 0): ?>
				<?php foreach($val['validate']['option'] as $key => $value): ?>
					<?php foreach($value as $key2 => $value2): ?>
						<?php if($value2 == 'on'): ?>
							$(".<?php echo $key ."-". $key2 ?>").attr("checked","checked");
							$("#<?php echo $key ."-". $key2 ?>").attr("checked","checked");
						<?php else: ?>
							$(".<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
							$("#<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	}

	function bindFilterForm(){
		<?php foreach($infoForm->content as $nameElement => $val): ?>
			<?php if(count(@$val['filter']['option']) > 0): ?>
				<?php foreach($val['filter']['option'] as $key => $value): ?>
					<?php foreach($value as $key2 => $value2): ?>
						<?php if($value2 == 'on'): ?>
							$(".<?php echo $key ."-". $key2 ?>").attr("checked","checked");
							$("#<?php echo $key ."-". $key2 ?>").attr("checked","checked");
						<?php else: ?>
							$(".<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
							$("#<?php echo $key ."-".$key2 ?>").val("<?php echo $value2 ?>");
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	}

	function HandleFormOption(selectorMain,nameElement,selectorList,selectorTemplate,type,typeForm = ''){

			var validateValue = $(selectorMain + " :selected").val();
			var validateName  = $(selectorMain + " :selected").text();
			if(typeForm === 'edit'){
				var validateValue = selectorMain;
				var validateName  = selectorMain;
			}
			var fileName      = validateValue.toLowerCase() + '.php';
	
		   	$.ajax({
				url  	 : "<?php echo BASE_URL .  $url ?>",
				data 	 : { 
					fileName : fileName ,
					type 	 : type
				},
				type 	 : 'GET',
				dataType : 'json',
				success  : function(data){
					// console.log(data);
					if(data.template === 'no'){
						var haveTemplate = 'no';
		    			addValidateRow(selectorList,validateValue,validateName,nameElement,haveTemplate,type);
					}else{
						var haveTemplate = 'yes';
		    			addValidateRow(selectorList,validateValue,validateName,nameElement,haveTemplate,type);
		    			
						var templateFormated = data.template.replace(/my_element/g,nameElement);
						$("li[name=" + validateValue + "] " + selectorTemplate).append(templateFormated);

						bindValidateForm();
						bindFilterForm();	

						$(".show-option-validate").on('click',function(){
						    var self = this;
						    $(self).prev('span').removeClass('glyphicon-plus').addClass('glyphicon-minus');

						   	var idTemplate = $(self).attr('href');
						   	// console.log(idTemplate)
						   	idTemplate = idTemplate.toLowerCase();
						   
						    showValidateTemplate(idTemplate);
							
							$(".cancel").on('click',function(){
								hideValidateTemplate(this,self);

								return false;
							})

							var str = $(idTemplate).serialize();	

							createSerializeString(self,str,idTemplate)		
							hideValidateTemplate(this,self);

							$(".accept").on('click',function(e){
								var str = $(idTemplate).serialize();	
							
								createSerializeString(self,str,idTemplate)		
								hideValidateTemplate(this,self);

								// $(this).parent().parent().parent().find('div.hidden-edit:first').remove();
								self = null;

								return false;	
							})
						})
					}
		    		$(".removeVal").on('click',function(){
					    removeOption(this);
					})
							
				},
			})	
	}

	function showOptionSelectBox(){
		$("#typeElement").change(function(){
			if($(this).val() === 'select'){
				$("#selectbox").removeClass('hide').addClass('animated bounce');
			}else{
				$("#selectbox").addClass('hide').removeClass('animated bounce');
			}
		})
	}

	function openTab(){
		$("#tabAttribute").click(function(){
			$("#attribute").removeClass('hide');
			$("#option").addClass('hide');
		})
		$("#tabOption").click(function(){
			$("#option").removeClass('hide');
			$("#attribute").addClass('hide');
		})

		$("#tabValidate").click(function(){
			$("#validateArea").removeClass('hide');
			$("#filterArea").addClass('hide');
		})
		$("#tabFilter").click(function(){
			$("#filterArea").removeClass('hide');
			$("#validateArea").addClass('hide');
		})
	}

	function submitValidateForm(){
		$.ajax({
			url  : "<?php echo $this->url("form/default" , array('action' => 'addForm')) ?>",
			type : 'POST',
			data : {
				element : $("#validateForm").serialize(),
				formId : <?php echo $infoForm->id ?>
			},	
			success : function(data){
				 window.location.href = "<?php echo $this->url("form") ?>"
			}
		})
	}

	function previewValidateForm(){
		var action = $("#validateForm").attr('action');

		$.ajax({
			url  : action,
			type : 'POST',
			data : $("#validateForm").serialize(),
			success : function(data){
				var source = data.split('<div class="hide">superman</div>');
				// console.log(source);
				$('.row-show-code').removeClass('hide').addClass('animated flipInX');
				
				$("#code").html(source[0]);
				
				$('#filterValidate').click(function(){
					$("#code").html(source[1]);
				});

				$('#elementForm').click(function(){
					$("#code").html(source[0]);
				});
			}
		})

	}

	function createSerializeString(selector,str,idTemplate = null){
		createRowValidateHidden(str,'yes',idTemplate,selector);
		
		serializeString = createPrettySerializeString(str);

		$(selector).next().next().next().next().html(serializeString);
	}

	function createPrettySerializeString(str){
		str = str.replace(/([^(%5BD\s)])/g,function(match,p1,p2,p3){
				if(match === '&') {
					return '<span class="blue">' + match + '</span>';
				}else{
					return '<span class="red">' + match + '</span>';
				}
			});

		return str;
	}

	function addValidateRow(selector,validateValue,validateName,nameElement,haveTemplate,type){
		$(selector).append(addOptionValidate(validateValue,validateName,nameElement,haveTemplate,type) );
	}

	function removeOption(selector){	
		$(selector).parents('li').remove();
	}

	var tem = '';
	function createRowValidateHidden(str,haveTemplate = 'yes',idTemplate = null,selector = null){
		if(tem == '' ){
			tem = idTemplate;
			$('[name=' + tem + ']').first().remove();
		}

		if(haveTemplate === 'yes'){
			var newArr = str.split('&');
			// var html = '<div name="' + idTemplate + '">'
			var html = ''
			$.each(newArr,function(index,val){
				val         = val.replace(/%5B/g,'[');
				val         = val.replace(/%5D/g,']');

				// console.log(val)
				var option  = val.split('=');
				html += '<input class="" type="hidden" name="' + option[0] + '" value="' + option[1] + '" />';
			})
			// html += '</div>';
			$(selector).parent('li').find('.hidden-edit').html(html)
			$(selector).parent('li').find('div[name='+ idTemplate +']').html(html);
		}	
	}

	function addOptionValidate(validateValue,validateName,nameElement,haveTemplate,type){
		var hiddenInputName = 'filterName';
		var validateBreakChain = '';

		if(type === 'validate'){
			var hiddenInputName = 'validateName';
			var validateBreakChain = '<label class="checkbox-inline">Break chain on failure<input type="checkbox" checked name="' + nameElement + '[validateBreakChain][' + validateValue + ']"/></label>';
		}
		
		if(haveTemplate === 'yes'){
			return 	'<li name="' + validateValue +'">'+
						'<span class="glyphicon glyphicon-plus"></span><a class="show-option-validate" href="#' + validateValue.toLowerCase() + '">' + validateName + '</a>' + 
						'<span class="removeVal glyphicon glyphicon-remove"></span>' + 
						validateBreakChain + 
						'<div class="showTemplateValidate col-md-12 hide" > </div>' + 
						'<i class="hide"></i>' + 
						'<input type="hidden" value="' + validateValue + '" name="' + nameElement + '[' + hiddenInputName + '][' + validateValue + ']"/>' + 
						'<div name="#'+ validateValue.toLowerCase() +'"></div>' +
					'</li>';
		}else{
			return 	'<li name="' + validateValue +'">' + 
						'<span class="glyphicon glyphicon-plus"></span><a class="a-normal" href="#' + validateValue + '">' + validateName + '</a>' + 
						'<span class="removeVal glyphicon glyphicon-remove"></span>' + 
						validateBreakChain + 
						'<div class="showTemplateValidate col-md-12 hide" > </div>'  +
						'<input type="hidden" value="' + validateValue + '" name="' + nameElement + '[' + hiddenInputName + '][' + validateValue + ']"/>' +
						'<div name="#'+ validateValue.toLowerCase() +'"></div>' +
					'</li>';
		}
	}
	
	function changeIdInput(nameElement){
		$("#elementAttrs h3:first").text("[" + nameElement + "] Element")
		$("#idElement").attr('name',nameElement + "[attribute][id]");
		$("#classElement").attr('name',nameElement + "[attribute][class]");
		$("#placeElement").attr('name',nameElement + "[attribute][placeholder]");
		$("#valueElement").attr('name',nameElement + "[attribute][value]");
		$("#attrElement").attr('name',nameElement  + "[attribute][attr]");
		$("#nameLabel").attr('name',nameElement  + "[option][nameLabel]");
		$("#classLabel").attr('name',nameElement  + "[option][classLabel]");
		$("#forLabel").attr('name',nameElement  + "[option][forLabel]");
		$("#emptyOption").attr('name',nameElement  + "[option][emptyOption]");
		$("#valueOption").attr('name',nameElement  + "[option][valueOption]");
		$("#nameOption").attr('name',nameElement  + "[option][nameOption]");
	}
	
	function showValidateTemplate(selector){
		// selector = selector.replace("#","#filter-");
		$(selector).parents('.showTemplateValidate').removeClass('hide').addClass("animated zoomIn");
	}
	
	function hideValidateTemplate(selector,tagA){
		$(selector).parents('.showTemplateValidate').removeClass("animated zoomIn").addClass('hide');
		$(tagA).prev('span').removeClass('glyphicon-minus').addClass('glyphicon-plus');
	}

	function checkSelected(){
		$("#typeElement option").each(function(index,val){
			<?php foreach($infoForm->content as $nameElement => $value): ?>
				if($(val).val() === "<?php echo $value['type'] ?>"){
					$(val).attr("selected","selected");
				}
			<?php endforeach; ?>
		})
	}
	

		$.ajax({
					url  : "<?php echo BASE_URL . $this->url("form/default",["action" => "rename"]) ?>",
					type :"POST",
					data : {
						newName : newName,
						oldName : oldName,
						formId  : "<?php echo $infoForm->id ?>",
						element : decodeURI($("#validateForm").serialize())
					},
					success : function(data){
						var newName = $(this).val();
						$(prevElement).text("[" + newName + "] Element");// sua lai ten input
						var oldName       = selectorParentOfParent.split("-")[1];
						// location.reload();
					} 
				})
</script>