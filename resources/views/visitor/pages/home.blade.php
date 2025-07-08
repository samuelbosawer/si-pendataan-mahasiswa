@extends('visitor.layout.tamplate')
@section('title')
    {{ 'Beranda -  Sistem Informasi Pendaftaraan Anggota Baru Komunitas Mahasiwa Pelajar Puncak' }}
@endsection
@section('content')
    <!-- Start Features -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Tentang <span class="fw-bold">Kami</span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary  mx-auto mt-2">Sebagai bagian dari upaya meningkatkan tata kelola organisasi
                            dan mempermudah proses perekrutan anggota baru, Komunitas Mahasiswa Pelajar Puncak (KMPP)
                            menghadirkan sistem informasi pendaftaran berbasis digital.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4 vertical-content">
                <div class="col-lg-6">
                    <div class="mt-3">
                        <div>
                            <h2 class="features-heading">Sistem Informasi Pendaftaran KMPP di Kota Studi Jayapura.</h2>
                            <div class="main-title-border bg-primary "> </div>
                        </div>
                        <div class="features position-relative">
                            <div
                                class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Pendaftaran Anggota Baru yang Mudah dan Terstruktur</h3>
                                <p class="fs-15 pt-2 text-secondary" style="text-align: justify">Sistem informasi ini
                                    dirancang untuk mempermudah proses pendaftaran anggota baru Komunitas Mahasiswa Pelajar
                                    Puncak (KMPP) setiap tahun. Calon anggota dapat mengisi data diri, asal kampus, dan
                                    informasi penting lainnya secara online. Dengan sistem yang rapi dan terpusat, proses
                                    verifikasi menjadi lebih cepat, aman, dan terdokumentasi dengan baik.</p>
                            </div>
                        </div>

                        <div class="features position-relative">
                            <div
                                class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Database Anggota Terintegrasi</h3>
                                <p class="pt-2 text-secondary" style="text-align: justify">Data seluruh anggota tersimpan
                                    dalam sistem yang terintegrasi, memungkinkan pengurus mengakses informasi penting untuk
                                    kebutuhan internal organisasi. Pendataan ini sangat berguna untuk keperluan komunikasi,
                                    pendistribusian informasi, serta perencanaan kegiatan KMPP secara lebih akurat.</p>
                            </div>
                        </div>

                        <div class="features position-relative">
                            <div
                                class="features-icon float-start fs-18 position-absolute rounded-pill text-primary bg-primary bg-opacity-25 text-center">
                                <i class="mdi mdi-check"></i>
                            </div>
                            <div class="ms-5">
                                <h3 class="fs-18 fw-bold">Mendukung Solidaritas dan Pengembangan SDM</h3>
                                <p class="pt-2 text-secondary" style="text-align: justify">Dengan adanya sistem ini, KMPP
                                    dapat lebih fokus pada tujuan utamanya, yaitu membangun solidaritas dan meningkatkan
                                    kapasitas mahasiswa asal Kabupaten Puncak. Informasi yang tersusun rapi membantu
                                    komunitas menyusun program pengembangan diri, kegiatan sosial, dan agenda budaya yang
                                    lebih tepat sasaran dan berkelanjutan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-3">
                        <img src="assets/images/features.png" class="img-fluid mx-auto d-block" alt=""
                            title="Features">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Features -->

    <!-- Start Cta -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="fw-bold">Siap Bergabung Bersama Kami? Gunakan Sistem Pendaftaran Ini!</h2>
                        <p class="text-secondary mx-auto cta-desc mt-4 pt-2">Ini adalah sistem yang dirancang untuk
                            memudahkan pendaftaran anggota baru dan mengelola data komunitas dengan lebih tertata.</p>
                        <div class="mt-4 pt-3">
                            <!-- Button trigger modal -->
                            <a href="/daftar" class="btn btn-primary rounded-pill">Daftar Sekarang</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta -->







    <!-- Start FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Pertanyaan yang Sering <span class="fw-bold">Diajukan</span></h3>
                        <div class="main-title-border bg-primary mx-auto"></div>
                        <p class="text-secondary  mx-auto mt-2">Sistem Informasi Pendaftaran KMPP dirancang untuk
                            mempermudah mahasiswa asal Kabupaten Puncak yang sedang studi di Kota Jayapura dalam menjadi
                            anggota komunitas. Melalui sistem ini, proses pendaftaran menjadi lebih praktis, data anggota
                            tercatat rapi, dan komunikasi antar pengurus serta anggota bisa berlangsung lebih efektif demi
                            mendukung kebersamaan, solidaritas, dan pengembangan sumber daya manusia.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-4">
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">01.</h2>
                        </div>
                        <div class="mt-2">
                            <h5 class="fs-18 fw-bold">Bagaimana cara mendaftar sebagai anggota KMPP?</h5>
                            <p class="text-secondary">Cukup buka sistem pendaftaran online, isi formulir dengan data
                                lengkap, lalu kirim. Pengurus akan memverifikasi data dan menghubungi Anda untuk proses
                                selanjutnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">02.</h2>
                        </div>
                        <div class="mt-2">
                            <h5 class="fs-18 fw-bold"> Apakah ada biaya pendaftaran?</h5>
                            <p class="text-secondary">Untuk saat ini, pendaftaran anggota baru KMPP biasanya gratis atau
                                sesuai kebijakan musyawarah komunitas. Informasi resmi akan diumumkan melalui sistem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">03.</h2>
                        </div>
                        <div class="mt-2">
                            <h5 class="fs-18 fw-bold">Siapa saja yang boleh mendaftar?</h5>
                            <p class="text-secondary">Mahasiswa atau pelajar asal Kabupaten Puncak yang sedang studi di Kota
                                Jayapura bisa mendaftar sebagai anggota KMPP melalui sistem ini.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">04.</h2>
                        </div>
                        <div class="mt-2">
                            {{-- <p class="text-secondary fs-13 mb-0"></p> --}}
                            <h5 class="fs-18 fw-bold">Bagaimana data saya akan digunakan?</h5>
                            <p class="text-secondary">Data yang dikumpulkan digunakan untuk pendataan anggota, komunikasi
                                kegiatan, serta keperluan administrasi internal komunitas, dengan jaminan keamanan dan
                                privasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">05.</h2>
                        </div>
                        <div class="mt-2">
                            {{-- <p class="text-secondary fs-13 mb-0"></p> --}}
                            <h5 class="fs-18 fw-bold">Bisakah saya memperbarui data saya setelah mendaftar?</h5>
                            <p class="text-secondary">Ya. Anggota bisa memperbarui informasi penting melalui fitur edit
                                profil, atau dengan menghubungi pengurus melalui sistem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-3">
                        <div class="faq_number">
                            <h2 class="fw-bold text-primary mb-0">06.</h2>
                        </div>
                        <div class="mt-2">
                            {{-- <p class="text-secondary fs-13 mb-0"></p> --}}
                            <h5 class="fs-18 fw-bold"> Siapa yang bisa saya hubungi jika mengalami kendala saat mendaftar?
                            </h5>
                            <p class="text-secondary">Jika ada masalah atau pertanyaan, silakan gunakan fitur bantuan di
                                sistem atau hubungi pengurus KMPP melalui kontak resmi yang tersedia.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- START CTA -->
    <section class="section bg-cta-img">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center text-white position-relative">
                        <h2 class="fw-bold">Mengalami Masalah Saat Mendaftar</h2>
                        <p class="mx-auto cta-desc mt-4 pt-2">Jika mengalami kendala saat mendaftar, silakan hubungi admin
                            untuk mendapatkan bantuan. Kami siap membantu Anda menyelesaikan setiap masalah selama proses
                            pendaftaran. Jangan ragu untuk menghubungi melalui kontak resmi yang tersedia agar proses
                            bergabung dengan KMPP berjalan lancar dan nyaman.</p>
                        <div class="mt-4 pt-3">
                            <a href="https://wa.me/6282197862211?text=Saya%20mengalami%20masalah%20saat%20menggunakan%20SIPM"
                                target="_blank" class="btn btn-primary rounded-pill">Hubungi Admin <span
                                    class="mdi mdi-whatsapp"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CTA -->

    <!-- Start Contact -->
    <section class="section" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3 class="mb-0 text-capitalize">Hubungi Kami untuk <span class="fw-bold">Informasi dan Bantuan
                            </span></h3>
                        <div class="main-title-border bg-primary  mx-auto"></div>
                        <p class="text-secondary sec_subtitle mx-auto mt-2">Jika ada pertanyaan atau membutuhkan bantuan
                            terkait pendaftaran anggota KMPP, silakan hubungi kami melalui kontak resmi yang tersedia.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4 pt-2">
                <div class="col-lg-4">
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-call text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Telepon</p>
                            <p class="text-secondary">0821 9786 2211</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-mail text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Email</p>
                            <p class="text-secondary">sipm@gmail.com</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <div>
                            <i class="pe-7s-map text-primary h2"></i>
                        </div>
                        <div class="mt-2">
                            <p class="mb-0 fw-bold">Alamat</p>
                            <p class="text-secondary">Wai Mhorock, Kec. Abepura, Kota Jayapura, Papua 99225</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact_form">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.680933270188!2d140.6733456701253!3d-2.6095263326618974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf528e25b0299%3A0x859996727f8ad0b5!2sAsrama%20Kinaonak%20Puncak%20Jaya!5e0!3m2!1sid!2sid!4v1751967640073!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->
@endsection
