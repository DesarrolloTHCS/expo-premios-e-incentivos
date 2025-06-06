<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="name" style="margin-bottom: -5rem">
                <p>{{ __('Name') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="name" id="name" type="text"
                onfocus="this.placeholder = '{{ __('Name') }}'"
                onblur="this.placeholder = '{{ __('Enter your name') }}'" autocomplete="given-name"
                placeholder="{{ __('Enter your name') }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="last_name" style="margin-bottom: -5rem">
                <p>{{ __('Last name') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="last_name" id="last_name" type="text"
                onfocus="this.placeholder = '{{ __('Last name') }}'"
                onblur="this.placeholder = '{{ __('Enter your last name') }}'"
                placeholder="{{ __('Enter your last name') }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="email" style="margin-bottom: -5rem">
                <p>{{ __('Email') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="email" id="email" type="email"
                onfocus="this.placeholder = '{{ __('email@example.com') }}'"
                onblur="this.placeholder = '{{ __('Enter your email') }}'" autocomplete="email"
                placeholder="{{ __('Enter your email') }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="phone_number" style="margin-bottom: -5rem">
                <p>{{ __('Phone Number') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="phone_number" id="phone_number" type="number" min="0"
                onfocus="this.placeholder = '55 5555 5555'"
                onblur="this.placeholder = '{{ __('Enter your phone number') }}'"
                placeholder="{{ __('Enter your phone number') }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="company" style="margin-bottom: -5rem">
                <p>{{ __('Company') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="company" id="company" type="text"
                onfocus="this.placeholder = '{{ __('Company example Inc.') }}'"
                onblur="this.placeholder = '{{ __('Company') }}'" autocomplete="organization"
                placeholder="{{ __('Company') }}">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="organization_title" style="margin-bottom: -5rem">
                <p>{{ __('Job title') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <input class="form-control valid" name="organization_title" id="organization_title" type="text"
                onfocus="this.placeholder = '{{ __('CEO') }}'" onblur="this.placeholder = '{{ __('Job title') }}'"
                autocomplete="organization-title" placeholder="{{ __('Job title') }}">
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="interest" style="margin-bottom: -5rem">
                <p>{{ __('Interest/Need') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <textarea class="form-control form-control_textarea" name="interest" id="interest" cols="30" rows="9"
                onfocus="this.placeholder = '{{ __('Products for my rewards program') }}'"
                onblur="this.placeholder = '{{ __('Interest/Need') }}'" placeholder="{{ __('Interest/Need') }}"></textarea>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group" style="padding-bottom: 5rem;">
            <label for="company_id" style="margin-bottom: -5rem">
                <p>{{ __('How did you hear about the event?') }} <span class="campos-obligatorios">*</span> </p>
            </label>
            <select class="form-control form-control_textarea" name="company_id" id="company_id">
                <option selected>Selecciona una opción</option>
                @foreach (App\Models\Company::all() as $company)
                    <option value="{{ $company->id }}">
                        {{ __('INVITED BY') }}
                        {{ $company->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="single-card">
    <div class="form-group mt-3 card-bottom">
        <button type="submit" class="w-100 border-btn" id="send">{{ __('Send') }}</button>
    </div>
</div>
