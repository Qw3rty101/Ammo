<x-layout>


    <!-- hero -->
    <div class="card text-bg-dark">
        <img src="/img/heroo.jpg" class="card-img img-fluid custom-hero" alt="...">
        <div class="card-img-overlay">
            <div>
                <h1 class="card-title tltcus animate__animated animate__pulse animate__slow animate__infinite">Ammo Coffee</h1>
                <p class="card-text">Reload your happiness</p>
                <a href="/about-us" class="btn btn-outline-light">Tentang kami</a>
                <a href="/menu" class="btn btn-outline-light">Menu</a>
            </div>
        </div>
    </div>
    <!-- hero-end -->

    {{-- Quote --}}
    <div class="container mt-4 animate-o opacity-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mt-4">
                <img src="/img/opik.jpg" class="img-fluid imgmycus" alt="...">
            </div>
            <div class="col-lg-6 mt-4">
                <figure>
                    <blockquote class="blockquote">
                        <p>
                            kopi dari sudut pandang saya adalah seni yang nikmat dan belum pernah dirusak realita
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-2">
                        <cite title="Source Title">Opik (Manager)</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    {{-- Quote-end --}}

    <!-- vm -->
    <div class="container mt-4 animate-a opacity-0">
        <div class="row align-items-center" id="about">
            <div class="col-lg-6 mt-4">
                <h2>
                    <span class="badge text-dark cus-badge">Visi & Misi</span>
                </h2>
                Menjadi coffee shop terkemuka yang memberikan pengalaman kopi berkualitas dengan sentuhan kenyamanan dan
                kreativitas, serta menjadi bagian dari gaya hidup pelanggan..
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double"></i>
                        Menyajikan kopi terbaik dengan bahan berkualitas dan proses yang sempurna.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double"></i>
                        Menciptakan suasana nyaman dan ramah bagi setiap pelanggan.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double"></i>
                        Mendukung komunitas lokal melalui kolaborasi dan pemberdayaan.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double"></i>
                        Inovatif dalam menyediakan menu yang beragam sesuai tren dan kebutuhan pelanggan.
                    </li>
                    <li class="list-group-item">
                        <i class="fa-solid fa-check-double"></i>
                        Mengedepankan pelayanan profesional untuk menciptakan kepuasan pelanggan.
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 mt-4">
                <img src="/img/visimisi.jpg" class="img-fluid custom-hero rounded" alt="..." style="height: 500px">
            </div>
        </div>
    </div>
    <!-- vm-end -->

    <br><br>
    <hr>

    <!-- menu -->
    {{-- <div class="container mt-4 animate-m opacity-0">
        <div class="row align-items-center">
            <div class="col-lg-6 mt-4">
                <img src="/img/hero.jpg" class="img-fluid custom-hero rounded" alt="...">
            </div>
            <div class="col-lg-6 mt-4">
                <h2>
                    <span class="badge text-dark cus-badge">Menu</span>
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, a. Dolorem dolor animi pariatur
                    neque.</p>
                <div class="d-grid gap-2">
                    <a href="/menu" class="btn btn-outline-dark">Go to Menu</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- menu-end -->

    {{-- <br><br>
    <hr> --}}

    <div class="container mt-4 animate-e opacity-0">
        <div class="row align-items-center text-center">
            <h2 class="mb-4">
                <span class="badge text-dark cus-badge">Lokasi</span>
            </h2>
            <div class="col-lg-12 mt-4">
                <iframe style="width: 100%; height: 400px; border: none;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.553495950995!2d107.3044492!3d-6.3222257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977635ee9ca9d%3A0x834e99624630f13f!2sAmmo%20Coffee!5e0!3m2!1sen!2sid!4v1734539839106!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <br><br>




    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const animateSection = document.querySelector('.animate-a');

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0');
                            entry.target.classList.add('animate__animated', 'animate__backInRight');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5,
                }
            );

            observer.observe(animateSection);

        });

        document.addEventListener("DOMContentLoaded", () => {
            const animateSection = document.querySelector('.animate-m');

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0');
                            entry.target.classList.add('animate__animated', 'animate__backInUp');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5,
                }
            );

            observer.observe(animateSection);

        });

        document.addEventListener("DOMContentLoaded", () => {
            const animateSection = document.querySelector('.animate-o');

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0');
                            entry.target.classList.add('animate__animated',
                                'animate__backInUp');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5,
                }
            );

            observer.observe(animateSection);
        });

        document.addEventListener("DOMContentLoaded", () => {
            const animateSection = document.querySelector('.animate-e');

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0');
                            entry.target.classList.add('animate__animated',
                                'animate__backInLeft');
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.5,
                }
            );

            observer.observe(animateSection);
        });
    </script>



</x-layout>
