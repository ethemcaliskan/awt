

function incrementAnswers(){
var number=$('#answers>div').length
$('#answers').append('  <div class="bounceIn animated md-form input-group input-group-sm mb-3">  <div class="input-group-prepend">    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Answer '+(number+1)+':</span>  </div>  <input type="text" class="form-control answers" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-sm"></div>')
	
}

function save(){
var answers=[];
$.each($('.answers'),function(i,e){
answers.push($(e).val());
});
question=$('#question').val();
$.ajax({
method:"post",
url:"/create/add",
data:{question:question,answers:answers},
	success:function(response){
		
		$('.card').addClass('fadeOut animated');
		setTimeout(function(){
		window.location="/homePage";
			console.log(response);
		},1000)
	}
})
}