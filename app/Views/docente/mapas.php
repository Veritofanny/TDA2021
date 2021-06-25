<div class="container-fluid p-0">

<h1 class="h3 mb-3">Google Maps</h1>

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Mapa Predeterminado</h5>
                <h6 class="card-subtitle text-muted">Muestra la vista predeterminada del mapa de carreteras.</h6>
            </div>
            <div class="card-body">
                <div class="content" id="default_map" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Mapa Híbrido</h5>
                <h6 class="card-subtitle text-muted">Muestra una mezcla de vistas normal y satélite.</h6>
            </div>
            <div class="card-body">
                <div class="content" id="hybrid_map" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

	<script>
		function initMaps() {
			var defaultMap = {
				zoom: 14,
				center: {
					lat: 40.712784,
					lng: -74.005941
				},
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			new google.maps.Map(document.getElementById("default_map"), defaultMap);
			var hybridMap = {
				zoom: 14,
				center: {
					lat: 40.712784,
					lng: -74.005941
				},
				mapTypeId: google.maps.MapTypeId.HYBRID
			};
			new google.maps.Map(document.getElementById("hybrid_map"), hybridMap);
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-aWrwgr64q4b3TEZwQ0lkHI4lZK-moM4&callback=initMaps" async defer></script>