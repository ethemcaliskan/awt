function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

function getResult(question_id){

	$.getJSON('/result/rates/'+question_id,function(result){
	   labels=[];
	   backgroundColors=[];
		numbers=[];
		$.each(result,function(i,e){
		
			labels.push(e.text);
			backgroundColors.push(getRandomColor());
			numbers.push(e.number);
		
		})
		$('#pieChart').html("");
		ctxP=null;
		myPieChart=null;

		var ctxP = document.getElementById("pieChart").getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
      labels: labels,
      datasets: [{
        data:numbers,
        backgroundColor: backgroundColors,
        hoverBackgroundColor: backgroundColors
      }]
    },
    options: {
      responsive: true
    }
  });
	
	});
	$('#myModal').modal("toggle");

}