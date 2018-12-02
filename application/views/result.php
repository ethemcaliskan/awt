<script src="/assets/js/result.js"></script>	

<script>
  //pie
		


</script>

<div class="container">

	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      <th scope="col">See Result</th>

    </tr>
  </thead>
  <tbody>
	  <?php foreach($questions as $question){ ?>
    <tr>
      <th scope="row"><?php echo $question->id; ?></th>
      <td><?php echo $question->text; ?></td>
		<td><button onclick="getResult(<?php echo $question->id; ?>)" class="btn btn-success btn-sm">See Result</button></td>

    </tr>
	  
	  <?php } ?>
    
  </tbody>
</table>
	

<!-- <canvas id="pieChart"></canvas> -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Launch demo modal
</button>
	<div class="modal fade right  " id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <canvas id="pieChart"></canvas>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
</div>