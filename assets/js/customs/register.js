function swalert(type,message,time){
	if(time!=undefined) time = time;
	else time = 2000;
	if(type=="success"){
		Swal.fire({
			title: 'Logol',
			icon: 'success',
			html: message,
			timer:time,
			animation: true,
			allowOutsideClick: false,
			customClass: 'animated bounceIn'
		});
	}
	else if(type=="error"){
		Swal.fire({
			title: 'Logol',
			html: message,
			icon: 'error',
			animation: true,
			allowOutsideClick: false,
			customClass: 'animated shake'
		});
	}
}

function validation(form){
	var notvalid 	= 0;
	var notnumber 	= 0;
	var notemail 	= 0;
	var regnumber 	=/^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/;
	var regemail 	= /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	$.each($('#'+form+" input, #"+form+" textarea, #"+form+" select"), function(n,element){
		if($(this).attr('wajib')=="yes"){
			$(this).addClass('wajib');
			if($('#'+element.id).val()==""){
				$("#"+element.id).addClass('is-invalid');
				notvalid++;
			}else{
				$("#"+element.id).removeClass('is-invalid');
			}
		}
		if($(this).attr('format')=="number" && (!regnumber.test($(this).val()) && $(this).val()!="")){
			$(this).addClass('format');
			notnumber++;
		}
		if($(this).attr('format')=="email"){
			if(regemail.test($(this).val()) == false){
				$("#"+element.id).addClass('is-invalid');
				notemail++;
			}else{
				$("#"+element.id).removeClass('is-invalid');
			}
		}
	});
	if(notvalid > 0 || notnumber > 0 || notemail > 0){
		var errorString = "";
		if(notvalid > 0){
		 	errorString += 'There are required fields\n';
		}else if(notnumber > 0){
			errorString += 'Please check the number format\n';
		}else if(notemail > 0){
			errorString += 'Please check the email format\n';
		}
		swalert('error',errorString);
		return false;
	}else{
		return true;	
	}
	return false;
}

function doRegister(form){
	if(validation(form)){
		Swal.fire({
			title: 'Confirm Form',
			text:'Do you want to process the data ?',
			icon: 'info',
			showCancelButton: true,
			closeOnConfirm:true,
			showLoaderOnConfirm:true,
			animation: false,
			customClass: 'animated bounceIn'
		}).then(function(result){
			if(result.value){
				var arrform = new FormData(document.getElementById(form));
				arrform.append("csrf_v4kalibaru", $('meta[name="csrf_v4kalibaru"]').attr('content'));
				$.ajax({
					type: 'POST',
					url : $('[name="'+form+'"]').attr('action'),
					data: arrform,
					dataType : 'json',
					enctype: 'multipart/form-data',
					processData: false,
					contentType: false,
					cache: false,
					beforeSend: function(){
						$(".v4-loading").show();
					},
					complete: function(){
						$(".v4-loading").hide();
					},
					success: function(data){
						var header = data.header,
							dataInfo = data.data;
						if(header.error){
							swalert('error',header.message);
							return false;
						} else {
							$(".v4-loading").hide();
							if(dataInfo.status.code == 200){
								if(dataInfo.redirect.action){
									swalert('success',header.message);
									setTimeout(function(){
										location.href = dataInfo.redirect.callBack;
									}, 2000);
									return false;
								}
							} else {
								swalert('error',message);
								return false;
							}
						}
					}
				});	
			}else{
				return false;
			}
		});
	}
}

function cardCheck(id,name){
	
	$('#'+id).prop('checked', !$('#'+id).prop('checked'));
    if(!$("input[id="+id+"]").is(":checked")){
		if(id == "9"){
			$('#SERVICE_OTHERS_NAME').css({'display':'none'});
			$('#SERVICE_OTHERS_NAME').val("");
		}
        $("#card_"+id).css("border-color","#e9e9ef");
    }else{
		if(id == "9"){
			$('#SERVICE_OTHERS_NAME').css({'display':''});
			$('#SERVICE_OTHERS_NAME').focus();
			$('#SERVICE_OTHERS_NAME').val("");
		}
        $("#card_"+id).css("border-color","#0D51F1");
    }
	
	var selected = 0;
	$('input[name="SERVICE[]"]:checked').each(function(){
		selected++;
	});
	
	if(selected > 0){
		$("#v4-product").fadeIn(500);
	}else{
		$("#v4-product").fadeOut(500);
	}
	
}

function cardCheckRadio(id,name){
    $('#'+id).prop('checked', !$('#'+id).prop('checked'));
    if(!$("input[id="+id+"]").is(":checked")){
        $(".card").css("border-color","#e9e9ef");
        $("#card_"+id).css("border-color","#e9e9ef");
        $("input[id="+id+"]:checked")[0].checked = false;
    }else{
        $(".card").css("border-color","#e9e9ef");
        $("#card_"+id).css("border-color","#0D51F1");
        $("input[id="+id+"]:checked")[0].checked = true;
    }
}

function showPwd(id, eyeId){
	var myInput = document.getElementById(id),
		myIcon  = document.getElementById(eyeId);
		myIcon.onclick = function () {
			if (myIcon.classList.contains('v4-eye')) {
				this.classList.toggle('v4-eye-slash');
				this.classList.toggle('v4-eye');
				myInput.setAttribute('type', 'text');
			} else {
				myInput.setAttribute('type', 'password');
				this.classList.toggle('v4-eye');
				this.classList.toggle('v4-eye-slash');
			};
		}
}

	