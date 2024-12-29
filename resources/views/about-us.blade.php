<x-layout>
    <div class="container mt-4">
        <div class="d-flex align-items-center mb-4 mt-4">
            <a href="/" class="btn btn-dark me-2">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
        </div>

        <h1 class="mb-4 mt-4 fs-3">
            <span class="badge text-dark cus-badge">Tentang Kami</span>
        </h1>
        <div class="row mb-4">
            <div class="col-lg-12">
                <img src="/img/heroo.jpg" class="card-img img-fluid custom-hero" alt="..." style="height: 400px">
            </div>
        </div>
        <br>
        <p>
            Perihal kami sendiri, sebuah coffee shop yang masih dalam tahap berkembang, yang berdiri sejak tahun 2021
            dengan konsep rumahan dan cukup simpel, kami menyediakan beberapa produk serta pelayanan untuk memenuhi
            kebutuhan para customer kami. Dengan single origin dari kebun kami sendiri, Ammo Coffee mencoba memberikan
            produk-produk kopi dan olahan-olahan lain yang terbaik. Tak ada apapun yang dapat kami lakukan selain
            membuat kawan kawan ammo coffee selalu merasa senang dan nyaman.
        </p>

        <br><br>
        <hr>

        <div class="row align-items-center text-center">
            <h2 class="mb-4">
                <span class="badge text-dark cus-badge">Barista</span>
            </h2>
            <div class="col-lg-3 mt-4">
                <div class="ratio ratio-1x1">
                    <img src="/img/fadil.jpg" class="img-fluid rounded object-fit-cover" alt="...">
                </div>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <br>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Fadil</cite>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 mt-4">
                <div class="ratio ratio-1x1">
                    <img src="/img/deswita.jpg" class="img-fluid rounded object-fit-cover" alt="...">
                </div>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <br>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Deswita</cite>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 mt-4">
                <div class="ratio ratio-1x1">
                    <img src="/img/farah.jpg" class="img-fluid rounded object-fit-cover" alt="...">
                </div>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <br>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Farah</cite>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 mt-4">
                <div class="ratio ratio-1x1">
                    <img src="/img/yazid.jpg" class="img-fluid rounded object-fit-cover" alt="...">
                </div>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <br>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Yazid</cite>
                    </figcaption>
                </figure>
            </div>
        </div>



        <br><br>
        <hr>

        <div id="modal01"
            style="display:none;position:fixed;z-index:3;padding-top:100px;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.5);"
            onclick="this.style.display='none'">
            <span
                style="position:absolute;top:10px;right:25px;color:#f1f1f1;font-size:35px;font-weight:bold;transition:0.3s;margin-top:25%;margin-right:5%;"
                onmouseover="this.style.color='red'" onmouseout="this.style.color='#f1f1f1'">&times;</span>
            <div style="margin:auto;display:block;width:80%;max-width:700px;animation:zoom 1s;">
                <img id="img01" style="width:100%; padding-top:45%;padding-bottom:20%;">
            </div>
        </div>
        <div class="row">
            <h2 class="mb-4 mt-4 fs-3 text-end">
                <span class="badge text-dark cus-badge">Galeri</span>
            </h2>
            @foreach ($images as $image)
                <div class="col-lg-3 mt-2">
                    <img src="{{ $image }}" class="img-fluid rounded object-fit-cover" alt="Gallery Image"
                        style="height:250px; width:100%;" onclick="onClick(this)">
                </div>
            @endforeach

        </div>

        <br><br><br>
    </div>

    <script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script>
</x-layout>
