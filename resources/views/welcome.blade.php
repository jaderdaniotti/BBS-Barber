<x-layout>

    <section class="hero-section min-vh-100 d-flex align-items-center justify-content-center bg-grigio text-center">
        <div class="container animate__animated animate__zoomInDown">

            <h1 class="display-max bangers text-sabbia">BBS <span class="text-nero"></span> BARBER SHOP</h1>
            <p class="lead montserrat text-sabbia mb-4 fs-4">Il tuo look, la mia arte. Prenota il tuo appuntamento!</p>
            <a href="#contact" class="btn btn-custom-filled rounded-pill montserrat">PRENOTA ORA <i
                    class="bi bi-scissors ms-2"></i></a>
        </div>
    </section>

    <section id="about" class=" py-5 ">
        <div id="particles-js"></div>
        <div class="container ">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-5 text-center mb-4  mb-lg-0">
                    <img src="\immagini\fabio-senza-sfondo2.png" class="rounded img-fluid "  id="foto-logo-about"
                        alt="Foto del Barbiere">
                </div>
                <div class="col-lg-7 px-3">
                    <span id="aboutSpan" class="fw-bold"></span>
                    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                    <script>
                        let animazioneTestoAbout = document.getElementById('aboutSpan');
                        // let fotoLogoAbout = document.getElementById('foto-logo-about');

                        function animTestoAbout(animazioneTestoAbout) {
                            const observer = new IntersectionObserver(entries => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        var typed = new Typed(animazioneTestoAbout, {
                                            strings: [
                                                '<h2 class="bangers fw-bold display-2 text-center text-nero section-title mb-3">CHI SONO</h2><p class="montserrat fs-5 text-nero mb-3">Ciao! Sono <strong> Fabio De Lucia </strong> , e la mia passione è trasformare i capelli in vere e proprie opere d&#39;arte. Con anni di esperienza e un occhio attento ai dettagli e alle ultime tendenze, offro un servizio personalizzato per esaltare il tuo stile unico.</p><p class="montserrat fs-5 text-nero mb-4">Dal taglio classico alla sfumatura più moderna, dalla cura della barba al trattamento rilassante, ogni servizio è pensato per farti sentire al meglio. Il mio salone è un luogo dove la tradizione della barberia incontra l&#39;innovazione.</p><a href="#gallery" class="btn btn-custom rounded-pill  montserrat">VEDI I MIEI LAVORI <i class="bi bi-images ms-2"></i></a>'
                                            ],
                                            typeSpeed: 5,
                                        });
                                        observer.unobserve(
                                            animazioneTestoAbout); // Smette di osservare l'elemento dopo l'intersezione
                                    }
                                });
                            });
                            observer.observe(animazioneTestoAbout);
                        }

                        function animFotoAbout(fotoLogoAbout) {
                            const observer = new IntersectionObserver(entries => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        fotoLogoAbout.classList.add('animate__animated', 'animate__zoomIn', 'opacity-100');
                                        observer.unobserve(fotoLogoAbout); // Smette di osservare dopo l'intersezione
                                    }
                                });
                            });

                            observer.observe(fotoLogoAbout);
                        }

                        animTestoAbout(animazioneTestoAbout);
                        animFotoAbout(fotoLogoAbout);
                    </script>

                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-grigio">
        <div class="container">
            <div class="text-center mt-3" id="titleServices">

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100" id="card1">
                        <i class="bi bi-scissors display-3 mb-3"></i>
                        <h4 class="bangers fs-2">TAGLIO UOMO</h4>
                        <p class="montserrat">Classico, moderno, sfumato. Consulenza personalizzata per il taglio
                            perfetto.</p>
                        <p class="bangers fs-4 mt-auto">€20</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100" id="card2">
                        <i class="bi bi-person-workspace display-3 mb-3"></i>
                        <h4 class="bangers fs-2">CURA BARBA</h4>
                        <p class="montserrat">Regolazione, modellatura, olio e balsamo per una barba impeccabile.</p>
                        <p class="bangers fs-4 mt-auto">€10</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100" id="card3">
                        <i class="bi bi-droplet-half display-3 mb-3"></i>
                        <h4 class="bangers fs-2">RASATURA TRADIZIONALE</h4>
                        <p class="montserrat">Panni caldi, rasoio e prodotti specifici per una pelle liscia e curata.
                        </p>
                        <p class="bangers fs-4 mt-auto">€15</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let TitoloServizi = document.getElementById('titleServices');
            let card1 = document.getElementById('card1');
            let card2 = document.getElementById('card2');
            let card3 = document.getElementById('card3');

            function animTitoloServizi(TitoloServizi) {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            var typed2 = new Typed(TitoloServizi, {
                                strings: [
                                    '<span class="bangers display-4 text-sabbia section-title mb-3 ">I MIEI SERVIZI</span>'
                                ],
                                typeSpeed: 5,
                            });
                            observer.unobserve(TitoloServizi);
                        }
                    });
                });
                observer.observe(TitoloServizi);
            }

            function animCard(card) {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            card.classList.add('animate__animated', 'animate__zoomIn', 'opacity-100');
                            observer.unobserve(card); // Smette di osservare dopo l'intersezione
                        }
                    });
                });

                observer.observe(card);
            }
            animTitoloServizi(TitoloServizi);
            animCard(card1)
            animCard(card2)
            animCard(card3)
        </script>
    </section>

    <section id="gallery" class="py-5 ">
        <div class="container">
            <div class="text-center">
                <h2 class="bangers display-4 text-nero section-title mb-3">GALLERIA</h2>
            </div>
            <div class="row g-3">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item rounded overflow-hidden">
                            <img src="\immagini\tagli\taglio{{ $i }}.jpg" class="img-fluid w-100"
                                alt="Taglio di capelli {{ $i }}">
                        </div>
                    </div>
                @endfor
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-md-6 col-lg-4">
                        <div class="gallery-item rounded overflow-hidden d-flex ">
                            <video src="\video\video{{ $i }}.mp4" class="img-fluid h-100 " autoplay muted
                                loop></video>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-nero text-sabbia">
        <div class="container">
            <div class="text-center">
                <h2 class="bangers display-4 section-title mb-3">CONTATTAMI</h2>
                <p class="montserrat fs-5 mb-5">Pronto per il tuo nuovo look? Prenota un appuntamento o chiedi
                    informazioni.</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <i class="bi bi-telephone-fill contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">TELEFONO</h4>
                    <p class="montserrat fs-5">
                        <a href="tel:+393737423118" class="text-sabbia text-decoration-none">
                            +39 373 742 3118
                        </a>
                    </p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-geo-alt-fill contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">INDIRIZZO</h4>
                    <p class="montserrat fs-5">Villaggio Brollo Comanda</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-instagram contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">SOCIAL</h4>
                    <p class="montserrat fs-5">
                        <a href="https://www.instagram.com/bbsbarber__/"
                            class="text-sabbia text-decoration-none" target="_blank">@BBSBarber__</a>
                    </p>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://wa.me/393737423118" target="_blank"
                    class="btn btn-custom-contact rounded-pill montserrat btn-lg">
                    <i class="bi bi-whatsapp me-2"></i> PRENOTA SU WHATSAPP
                </a>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-grigio text-sabbia text-center">
        <div class="container">
            <p class="montserrat mb-0">&copy; {{ date('Y') }} BBS BARBER SHOP. Tutti i diritti riservati..</p>
        </div>
    </footer>
</x-layout>
