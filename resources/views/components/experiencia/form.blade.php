{{-- Formulario que envía los datos a la vista final --}}
<form id="selectionForm" action="{{ route('finalSite.store') }}" method="post" enctype="multipart/form-data" class="hidden">
    @csrf
    <input type="hidden" name="color" id="selectedColorInput">
    <input type="hidden" name="logo" id="selectedLogoInput">
    <input type="hidden" name="banner" id="selectedBannerInput">
    <input type="hidden" name="categories" id="selectedCategoriesInput">
    <input type="hidden" name="sections" id="selectedSectionsInput">
    <input type="hidden" name="deviceType" id="deviceTypeInput">
</form>
{{-- Fin formulario --}}
