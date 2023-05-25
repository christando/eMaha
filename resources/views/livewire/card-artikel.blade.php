<div>
    @foreach ($art as $a)
    <div class="card border-info">
        <div class="card-header bg-info text-light justify-content-center d-flex">
            <Strong>Artikel Terbaru</Strong>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$a->judul}}</h5>
            <p class="card-text">{{$a->deskripsi}}</p>
        </div>
    </div>
    @endforeach
</div>