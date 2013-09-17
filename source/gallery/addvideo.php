<?php
if( !empty($_REQUEST{'cid'} ) )
	{
		$cid = $_REQUEST['cid'];
	}

//Checking for tampered link

?>

<section class="container">
	<div class="page-header">
		<h1>Add video to <span class="text-info">Trailers</span></h1>
	</div>
</section>

<section class="container photoUpload">
<div class="row">
	<div class="col-md-6 hidden-xs  text-center">
		<iframe class="showVideo" width="420" height="315" src="//www.youtube.com/embed/YE7VzlLtp-4" frameborder="0" allowfullscreen></iframe>
	</div>
	<div class="col-md-6">
		<form role="form">
			<div class="form-group">
				<label for="videoUrl">Youtube Video Code</label>
				<div class="hidden-xs">
					<div class="input-group">
					  <span class="input-group-addon">http://www.youtube.com/watch?v=</span>
					  <input type="text" id="videoUrl1" class="form-control videoUrl" placeholder="YE7VzlLtp-4">
					</div>
				</div>
				<input type="text" id="videoUrl2" class="form-control videoUrl visible-xs" placeholder="YE7VzlLtp-4">
				<span class="help-block visible-xs">Ex: http://www.youtube.com/watch?v=<span class="text-success"><strong>YE7VzlLtp-4</strong></span></span>
			</div>
		  <div class="form-group">
			<label for="videoName">Name</label>
			<input type="email" class="form-control" id="videoName" placeholder="Video Name">
		  </div>
		  <div class="form-group">
			<label for="videoDesc">Description</label>
			<textarea rows="4" class="form-control" id="videoDesc" placeholder="Video Description"></textarea>
		  </div>
		  <button type="button" class="btn btn-primary addVideoBtn" data-cid="<?php echo $cid; ?>">Add Video</button>
		</form>
		<div class='alert alert-dismissable systemAlert'>
		  <button type='button' class='close hideBtn'>&times;</button>
		  <h3 class='alertHead'></h3><p class='alertBody'></p>.
	  </div>
	</div>
</div>
</section>