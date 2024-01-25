<div class="col-md-3 country-card p-2">
    <!-- Card -->
    <div class="card card-image zoom-box" style="background-image: url({{ $url }}); ">

    <!-- Content -->
    <div class=" text-white text-center d-flex justify-content-center align-items-center  py-5 px-4" style="background-color: rgba(0, 0, 0, 0.45)">
        <div>
        
            <h3 class="card-title pt-2" style="font-size: 1.2rem;"><strong>{{ $pais }}</strong></h3>
        
            <a class="btn blue-gradient" href="/{{strtolower( str_replace(' ', '',$pais)) }}"><b>Acceder</b></a>
        </div>
    </div>

    </div>
    <!-- Card -->
</div>