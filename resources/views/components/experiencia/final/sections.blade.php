@if (isset($sections) && is_array($sections))
    @foreach ($sections as $section)
        @if ($section == 'noticias')
            <x-experiencia.final.sections.news />
        @elseif ($section == 'cuestionarios')
            <x-experiencia.final.sections.surveys :color="$color" :points="$points" />
        @endif
    @endforeach
@endif
