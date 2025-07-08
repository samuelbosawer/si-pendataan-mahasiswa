   <!--Start Home-->
    <section class="bg-dark d-flex align-items-center min-vh-100" id="home">
        <div class="bg-overlay"></div>
        <a id="video" class="youtube-bg" data-property="{videoURL:'https://www.youtube.com/watch?v=mcoiQDC_DhY',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-white text-center">
                        {{-- <div class="mx-auto">
                            <button type="button" class="play-btn video_play mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="mdi mdi-play text-center"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content bg-transparent border-0">
                                        <div class="modal-body p-0 w-auto h-auto overflow-hidden d-inline-flex justify-content-center">
                                            <div>
                                                <div class="modal-header border-0">
                                                    <button type="button" class="bg-transparent border-0 ms-auto p-0 me-4 pe-5" data-bs-dismiss="modal" aria-label="Close"><i class="mdi mdi-close text-white fs-5"></i></button>
                                                </div>
                                                <iframe src="https://player.vimeo.com/video/99025203?h=0788a7a47b&title=0&byline=0&portrait=0&badge=0" width="990" height="460" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <h1 class="header_title mb-0 mt-4">  Bergabunglah Bersama Komunitas Mahasiswa Pelajar Puncak</h1>
                        <p class="header_subtitle pt-4 text-white mx-auto">Bangun relasi, kembangkan potensi, dan jadilah bagian dari gerakan perubahan positif untuk generasi Puncak.</p>
                        <div class="header_btn">
                              @if (!Auth::user())
                            <a href="{{route('daftar')}}" class="btn btn-primary rounded-pill mt-4">Daftar Sekarang</a>
                            @else
                            <a href="{{route('dashboard.home')}}" class="btn btn-primary rounded-pill mt-4">Dashboard</a>
                            @endif
                            <a href="" class="btn btn-success rounded-pill mt-4">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Home-->
