<div class="md-whiteframe-z0 bg-white">
<div class="container">
<section class="align-center">
	<div class="title title--big">
	<h1><a href="#">POPULAR STAGE</a></h1>
	</div>
	<p class="title--sub">
		As you know, you can help them by attending their stage
	<br>keep the crowds on !
	<br>
	<br>
	</p>
</section>

<div ui-view="" class="ng-scope">
	<div class="row ng-scope popular-stage">

	@for ($i = 0; $i < 12 ; $i++)
		
		<div class="col-sm-4">
			<div class="panel panel-card">
				<div class="item">
					<img src="{{ asset('uploads/vendors/v1.jpg') }}" class="w-full r-t" alt="Bear">
				</div>
				<button md-ink-ripple="" class="md-btn md-fab md-raised pink m-r md-fab-offset pull-right"><i class="fa fa-ticket i-24"></i></button>
				<div class="p">
					<h3><a href="#">Reeva Schematics 2016</a></h3>
					<div class="m-b">
					<span class="details"><i class="glyphicon glyphicon-map-marker text-md"></i><a href="#" class="details-link">. Surabaya</a></span>

					<span class="details"><i class="glyphicon glyphicon-eye-open text-md"></i><a href="#" class="details-link">. 1250 views</a></span>

					<span class="details"><i class="glyphicon glyphicon-thumbs-up text-md"></i><a href="#" class="details-link">. 700 likes</a></span>
				</div>
					<p class="content-card">Merupakan acara yang menghadirkan artis papan atas Indonesia</p>
				</div>

				<div class="card-body">
				<div class="progress progress-striped progress-md active">
        			<div class="progress-bar progress-bar-info" style="width:100%">9 days to go</div>
      			</div>
      			</div>
			</div>
		</div>
	@endfor
	</div>

	<div class="btn-groups row" style="margin-bottom: 10px">
		<div class="align-center">
		<button class="btn btn-fw btn-stroke pink b-2x">All Popular Stage</button>
		</div>
	</div>

</div>
</div>
</div>