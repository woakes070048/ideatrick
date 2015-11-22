<div class="bg-white">
<div class="container">

<div class="row">
<div class="col-md-6">
	<div class="title title--big" style="padding-top: 20px;">
		<h3><a href="#" class="hidden-xs">FRESH STAGES</a></h3>
		<h4><a href="#" class="visible-xs align-center">NEW EVENT</a></h4>
	</div>
</div>
<div class="col-md-6 hidden-xs">
	<div class="more ">
		<button class="btn btn-sm btn-addon btn-stroke pink"><i class="fa fa-expand "></i>Discover more</button>
	</div>
</div>
</div>

<div ui-view="" class="ng-scope">
	<div class="row ng-scope fresh-stage">

	@for ($i = 0; $i < 12 ; $i++)
		
		<div class="col-sm-4">
			<div class="panel panel-card">
				<div class="item">
					<img src="{{ asset('uploads/vendors/v1.jpg') }}" class="w-full r-t" alt="Bear">
				</div>
				<button md-ink-ripple="" class="md-btn md-fab md-raised pink m-r md-fab-offset pull-right"><i class="fa fa-ticket i-24"></i></button>
				<div class="p">
				<br>
					<h4><a href="#">Reeva Schematics 2016</a></h4>
					<div class="m-b">
					<span class="details"><i class="glyphicon glyphicon-map-marker text-md"></i><a href="#" class="details-link">. Surabaya</a></span>

					<span class="details"><i class="glyphicon glyphicon-eye-open text-md"></i><a href="#" class="details-link">. 1250 views</a></span>

				</div>
					<p class="content-card">Merupakan acara yang akan menghadirkan artis papan atas Indonesia</p>
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

</div>

</div>
</div>