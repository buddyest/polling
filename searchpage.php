<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="includes/css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<script type="text/javascript">
	function state(){
		$('#state').empty();
		$('#state').append("<option>Loading... </option>");
		$('#constituency').append("<option>Loading... </option>");
		$.ajax({
			type:"POST",
			url:"states.php",
			contentType:"application/json; chareset=utf-8",
			dataType:"json",
			success: function(data){
				$('#state').empty();
				$('#state').append('<option disabled selected="selected">Select State</option>');
				$.each(data,function(i,item){
					$('#state').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
							   });
			},
		complete: function(){
		}
		});
	}
	
	function constituency(sid){
		$('#constituency').empty();
		$('#constituency').append("<option>Loading... </option>");
		$.ajax({
			type:"POST",
			url:"constituency.php?sid="+sid,
			contentType:"application/json; chareset=utf-8",
			dataType:"json",
			success: function(data){
				$('#constituency').empty();
				$('#constituency').append('<option disabled selected="selected">Select Constituecy</option>');
				$.each(data,function(i,item){
					$('#constituency').append('<option value="'+data[i].cid+'">'+data[i].cname+'</option>');
							   });
			},
		complete: function(){
		}
		});
	}
	
			  
	  $(document).ready(function(){
		  state();
		  constituency();
		  
		  $("#state").change(function(){
	var stateid = $("#state").val();
	constituency(stateid);
		  });
	  });
	</script>
	
</head>

<body>
<section id="search">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 search-place text-center">
        <select name="State" class="form-control col-md-3 d-inline-block" id="state">
        
        </select>
        
        <select name="Constituency" class="form-control col-md-3 d-inline-block" id="constituency">
         <option disabled selected="selected">Select Constituency</option>
        </select><br>
		  
        <button class="btn btn-primary font-weight-bold m-4 p-2 w-25 btn-outline-secondary">Search</button>
    </div>
    </div>
  </div>
</section>
</body>
</html>