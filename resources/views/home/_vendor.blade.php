<div class="bg-white">
<div class="container">
<div class="row">
<div class="col-md-6">
	<div class="title title--big" style="padding-top: 20px;">
		<h3><a href="#" class="hidden-xs">YOUR VENDORS</a></h3>
		<h4><a href="#" class="visible-xs align-center varela">VENDORS</a></h4>
	</div>

</div>
<div class="col-md-6 hidden-xs">
	<div class="more ">
		<button class="btn btn-sm btn-addon btn-stroke pink"><i class="fa fa-expand "></i>Discover more</button>
	</div>
</div>
</div>

	<div class="row the-community">
	@for ($i = 0; $i < 8; $i++)
		<div class="col-md-3">
			<div class="panel panel-card uk-overlay uk-overlay-hover">
        		<div class="item">
          			<img alt="" class="w-full r-t" src="{{ asset('uploads/vendors/v1.jpg') }}">
        		</div>
        		<div class="uk-overlay-panel uk-overlay-fade uk-overlay-background">
        		<h3>HMTC ITS</h3>
				<span class="details"><i class="glyphicon glyphicon-map-marker text-md"></i><b>.Surabaya</b></span>
				<span class="details"><i class="glyphicon glyphicon-map-marker text-md"></i><b>.Surabaya</b></span>
        		</div>
        		<a class="uk-position-cover" href="#"></a>
      		</div>
		</div>
	@endfor
	</div>
	</div>
</div>