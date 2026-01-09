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
                                <p>{{ __('I found a comprehensive supplier at DIODI that I hadnt even considered before, and during the expo I closed deals that solved all my Q2 needs. The expo was incredibly well-curated; everything I saw was applicable to real-world programs. Im definitely coming back this year.') }}
                                </p>
                            </div>
                            
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{ asset('assets/testimonials/testimonial-Hombre.png') }}" alt="Persona">
                                </div>
                                <div class="founder-text">
                                    <span> Israel González</span>
                                    <p>{{ __('Purchasing manager') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{ asset('storage/images/icon/quotes-sign.png') }}" alt="Comillas"
                                    class="quotes-sign">
                                <p>{{ __('The quality of visitors was excellent. We had real leads who knew what they were looking for. We spoke with key clients and opened up opportunities that were successfully closed. For us, being at Expo Premios e Incentivos is a smart investment, not an expense.') }}
                                </p>
                            </div>
                            
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{ asset('assets/testimonials/testimonial-Mujer.png') }}" alt="Persona">
                                </div>
                                <div class="founder-text">
                                    <span>Fernanda Vázquez</span>
                                    <p>{{ __('Exhibitor') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="{{ asset('storage/images/icon/quotes-sign.png') }}" alt="Comillas"
                                    class="quotes-sign">
                                <p>{{ __('I loved it because I was able to find an incentive program all in one place and also see the products in person. Furthermore, the demonstrations and activations helped me visualize alternatives for my internal projects.') }}
                                </p>
                            </div>
                            
                            <div class="testimonial-founder d-flex align-items-center">
                                <div class="founder-img">
                                    <img src="{{ asset('assets/testimonials/testimonial.png') }}" alt="Persona">
                                </div>
                                <div class="founder-text">
                                    <span>Reyna Covarrubias</span>
                                    <p>{{ __('RRHH') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin testimonios --}}
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Testimonial Area End --}}
