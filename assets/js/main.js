var INTERVAL;
$(document).ready(function(){
$('#loader').show();
INTERVAL=setInterval(getQuestion,5000);

})

function getAnswerDiv(answer){

	return '<div  onclick="answer(this)" class="col"><input type="hidden" value="'+answer.id+'" />'+
		'<div style="width:100%;cursor:pointer" class="card">'+
		' <div style="height:30%;width:100%;text-align:center;cursor:pointer" class="view overlay">'+
		' <img class="card-img-top" style="width:40%;margin-left:30%;" src="/assets/img/radio.png" alt="Card image cap">'+
		' <h5 style="text-align:center">'+answer.text+'</h5>'+
		'	</div>		</div>		</div>';

}
function getQuestion(){
	
	
	$.getJSON("/homePage/getQuestion",function(response){
		if(response.message=="full"){
			clearInterval(INTERVAL);
		$('#question_id').val(response.question.id);
			$('#question').text(response.question.text);
			$('#answers').html("");
			$.each(response.answers,function(i,e){
			
				$('#answers').append(getAnswerDiv(e));
				
			});
			$('#loader').addClass('fadeOut animated');
			setTimeout(function(){
			$('#loader').hide();
				$('#questionRow').show();
			$('#questionRow').addClass("fadeInLeft animated");
			
			$('#answers').show();
			$('#answers').addClass("fadeInRight animated");
			}
					  ,1000);
			
			
			
		}
		
		
		
	}
	
		
		
	);

}

function answer(e){
answer_id=$(e).children('input').val();
question_id=$('#question_id').val();
	$.ajax({
	method:'post',
	url:'/homePage/answer',
		data:{question_id:question_id,answer_id:answer_id}
,success:function(response){
    $('#questionRow').hide(1000);
	$('#answers').hide(1000);
	$('#loader').show(1000);
	$('#loader').removeClass('fadeOut animated');
	INTERVAL=setInterval(getQuestion,5000);
		
		}
	
	})
}