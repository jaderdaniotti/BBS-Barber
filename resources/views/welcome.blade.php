<x-layout>

    <section class="hero-section min-vh-100 d-flex align-items-center justify-content-center bg-grigio text-center">
        <div class="container animate__animated animate__zoomInDown">

            <h1 class="display-max bangers text-sabbia">BBS <span class="text-nero"></span> BARBER SHOP</h1>
            <p class="lead montserrat text-sabbia mb-4 fs-4">Il tuo look, la mia arte. Prenota il tuo appuntamento!</p>
            <a href="#contact" class="btn btn-custom-filled rounded-pill montserrat">PRENOTA ORA <i class="bi bi-scissors ms-2"></i></a>
        </div>
    </section>

    <section id="about" class="py-5 bg-sabbia">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img src="\immagini\logo.png" class="img-fluid rounded shadow-lg " alt="Foto del Barbiere">
                </div>
                <div class="col-lg-6">
                    <h2 class="bangers display-4 text-nero section-title mb-3">CHI SONO</h2>
                    <p class="montserrat fs-5 text-grigio mb-3">
                        Ciao! Sono [Nome Barber], e la mia passione è trasformare i capelli in vere e proprie opere d'arte. Con anni di esperienza e un occhio attento ai dettagli e alle ultime tendenze, offro un servizio personalizzato per esaltare il tuo stile unico.
                    </p>
                    <p class="montserrat fs-5 text-grigio mb-4">
                        Dal taglio classico alla sfumatura più moderna, dalla cura della barba al trattamento rilassante, ogni servizio è pensato per farti sentire al meglio. Il mio salone è un luogo dove la tradizione della barberia incontra l'innovazione.
                    </p>
                    <a href="#gallery" class="btn btn-custom rounded-pill montserrat">VEDI I MIEI LAVORI <i class="bi bi-images ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-grigio">
        <div class="container">
            <div class="text-center">
                <h2 class="bangers display-4 text-sabbia section-title mb-3">I MIEI SERVIZI</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100">
                        <i class="bi bi-scissors display-3 text-nero mb-3"></i>
                        <h4 class="bangers fs-2">TAGLIO UOMO</h4>
                        <p class="montserrat">Classico, moderno, sfumato. Consulenza personalizzata per il taglio perfetto.</p>
                        <p class="bangers fs-4 mt-auto">€25</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100">
                        <i class="bi bi-person-workspace display-3 text-nero mb-3"></i> 
                        <h4 class="bangers fs-2">CURA BARBA</h4>
                        <p class="montserrat">Regolazione, modellatura, olio e balsamo per una barba impeccabile.</p>
                        <p class="bangers fs-4 mt-auto">€15</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service-card bg-sabbia text-nero text-center p-4 h-100">
                        <i class="bi bi-droplet-half display-3 text-nero mb-3"></i> 
                        <h4 class="bangers fs-2">RASATURA TRADIZIONALE</h4>
                        <p class="montserrat">Panni caldi, rasoio e prodotti specifici per una pelle liscia e curata.</p>
                        <p class="bangers fs-4 mt-auto">€20</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5 bg-sabbia">
        <div class="container">
            <div class="text-center">
                <h2 class="bangers display-4 text-nero section-title mb-3">GALLERIA</h2>
            </div>
            <div class="row g-3">
                @for ($i = 1; $i <= 3; $i++)
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item rounded overflow-hidden">
                        <img src="\immagini\tagli\taglio{{$i}}.jpg" class="img-fluid w-100" alt="Taglio di capelli {{$i}}">
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
                <p class="montserrat fs-5 mb-5">Pronto per il tuo nuovo look? Prenota un appuntamento o chiedi informazioni.</p>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <i class="bi bi-telephone-fill contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">TELEFONO</h4>
                    <p class="montserrat fs-5"><a href="tel:+391234567890" class="text-sabbia text-decoration-none">+39 123 456 7890</a></p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-geo-alt-fill contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">INDIRIZZO</h4>
                    <p class="montserrat fs-5">Via Roma 123, Città, Italia</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-instagram contact-icon mb-3"></i>
                    <h4 class="bangers fs-3">SOCIAL</h4>
                    <p class="montserrat fs-5"><a href="#" class="text-sabbia text-decoration-none">@[NomeInstagram]</a></p>
                </div>
            </div>
            <div class="text-center mt-5">
                 <a href="https://wa.me/391234567890" target="_blank" class="btn btn-custom-filled rounded-pill montserrat btn-lg">
                    <i class="bi bi-whatsapp me-2"></i> PRENOTA SU WHATSAPP
                </a>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-grigio text-sabbia text-center">
        <div class="container">
            <p class="montserrat mb-0">&copy; {{ date('Y') }} [Nome Barber]. Tutti i diritti riservati..</p>
        </div>
    </footer>
</x-layout>
