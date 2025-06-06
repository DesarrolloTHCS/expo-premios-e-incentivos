{{-- Testimonial Area Start --}}
<section class="testimonial-area testimonial-padding fix section-bg"
    data-background="{{ asset('storage/images/hero/herotestimonios.jpg') }}">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div>
                    {{-- Inicio testimonios --}}
                    <div class="h1-testimonial-active">
                        {{-- Testimonio individual --}}
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{ asset('storage/images/icon/quotes-sign.png') }}" alt="Comillas"
                                    class="quotes-sign">
                                <p>{{ __('I have attended the showroom every year, and this 2024 I am very much looking forward to this event.') }}
                                </p>
                            </div>
                            {{-- founder --}}
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{ asset('storage/images/icon/testimonial.png') }}" alt="Persona">
                                </div>
                                <div class="founder-text">
                                    <span>Reyna Covarrubias</span>
                                    <p>{{ __('Buyer') }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- Testimonio individual
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{ asset('storage/images/icon/quotes-sign.png') }}" alt="Comillas"
                                    class="quotes-sign">
                                <p>Los mejores productos en el mejor lugar, muy agradable experiencia.</p>
                            </div> --}}
                        {{-- founder --}}
                        {{-- <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{ asset('storage/images/icon/testimonial.png') }}" alt="Persona">
                                </div>
                                <div class="founder-text">
                                    <span>Segundo</span>
                                    <p>Creative designer at Colorlib</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- Fin testimonios --}}
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Testimonial Area End --}}
