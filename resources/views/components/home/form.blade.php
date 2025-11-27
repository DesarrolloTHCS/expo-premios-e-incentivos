    <!--?  Contact Area start  -->
    <section id="registro" class="contact-section" style="margin-top: -9rem">
        <div class="container">
            <div class="section-tittle text-center mb-50" style="margin-top: -2rem">
                <h2 class="azul"><b>{{ __('Sign Up') }}</b></h2>
            </div>

            <x-successalert />

            <div class="row">
                <div class="col-lg-8">
                    <form class="form-contact" action="{{ route('form.store') }}" method="post" id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        @include('components._form')
                    </form>
                </div>

                {{-- Información del lateral del formulario --}}

                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Expo Reforma.</h3>
                            <p>Av. Morelos 67, Juárez, Cuauhtémoc, 06600 Ciudad de México, CDMX</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+52 55 8025 2586</h3>
                            <p>{{ __('Write to us from Monday to Friday') }}<br>8am {{ __('to') }} 5pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>mercadotecnia@diodi.mx</h3>
                            <p>{{ __('Send us an email!') }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <div class="media-body">
                            <p class="campos-obligatorios">{{ __('Fields marked with * are required') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
    @push('scriptsBody')
        <script>
            document.getElementById('contactForm').addEventListener('submit', function(event) {

                const FormName = document.getElementById("name").value.trim();
                const FormLastName = document.getElementById("last_name").value.trim();
                const FormEmail = document.getElementById("email").value.trim();
                const FormPhoneNumber = document.getElementById("phone_number").value.trim();
                const FormCompany = document.getElementById("company").value.trim();
                const FormJobTitle = document.getElementById("organization_title").value.trim();
                const FormInterest = document.getElementById("interest").value.trim();
                const FormInvitedBy = document.getElementById("company_id").value.trim();

                const SendButton = document.getElementById("send");

                if (!FormName || !FormLastName || !FormEmail || !FormPhoneNumber || !FormCompany || !FormJobTitle || !FormInterest || !FormInvitedBy) {
                    event.preventDefault();
                } else {
                    SendButton.disabled = true;
                }
            });
        </script>
    @endpush
