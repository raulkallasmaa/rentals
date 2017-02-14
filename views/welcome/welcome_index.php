<form method="POST" role="form">

	<div class="form-group">
		<input type="text" class="form-control" name="" id="" placeholder="Destination">
        <input type="text" id="datepicker">
	</div>



	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="pikaday.js"></script>
<script>
    var picker = new Pikaday({ field: document.getElementById('datepicker') });
</script>