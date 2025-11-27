<!--? instagram-social start -->
<div class="instagram-area fix">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-12">
                <div class="instagram-active owl-carousel">
                    @foreach (range(1, 9) as $number)
                        <div class="single-instagram">
                            {{-- <img src="{{ asset('storage/images/galeria_insta_2025/' . $number . '.jpg') }}" alt=""> --}}
                            <img src="{{ asset('assets/galeria_insta_2025/' . $number . '.jpg') }}" alt="">
                            {{-- <a target="_blank" href="https://www.instagram.com/showroomdiodi/"><i class="ti-instagram"></i></a> --}}
                            <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instagram-social End -->
