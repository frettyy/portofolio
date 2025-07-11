@extends('layout.app')

@section('title', 'Fretty S. | Home')

@section('content')
<div class="hero-wrapper">
    <svg class="curve-text-svg" viewBox="0 0 1000 210" width="1000" height="220">
        <defs>
            <path id="curve" d="M90,160 Q560,90 990,180" />
        </defs>
        <text font-size="46" fill="#fff" font-family="Arial" font-weight="bold" letter-spacing="2">
            <textPath xlink:href="#curve" startOffset="0">
                Hi, this is me Fretty Debora Sirait
            </textPath>
        </text>
    </svg>
    <div class="circle-bg"></div>
    <div class="desc">
        I am an undergraduate student majoring in Informatics,<br>
        with a keen interest in design, frontend development,<br>
        and quality assurance testing.
    </div>
</div>

{{-- Section: Latest Project --}}
<section class="latest-project-section">
    <h2 class="section-title">Latest Project</h2>

    {{-- Project 1 --}}
    <div class="project-wrapper">
        <div class="project-image">
            <img src="{{ asset('assets/projek1.png') }}" alt="Project Preview">
        </div>
        <div class="project-text">
            <h3 class="project-title">Pengembangan Operation Management System dalam aplikasi mobile berbasis PHP dan menggunakan CodeIgniter 3</h3>
            <p class="project-description">
                Aplikasi mobile untuk manajemen izin/cuti, absensi online, booking ruang, dan surat tugas.
                Bertujuan meningkatkan efisiensi dan transparansi administrasi di perusahaan. <br>
                Sebagai <span class="wavy-underline-projek1">Mobile Frontend Developer</span>, saya bertanggung jawab
                dalam merancang antarmuka pengguna mobile menggunakan Figma dan
                mengimplementasikannya ke dalam kode <span class="wavy-underline-projek1">Flutter</span> dengan prinsip
                clean architecture. Saya membangun widget yang responsif dan
                dapat digunakan kembali untuk berbagai ukuran layar, serta berkolaborasi erat dengan tim desain dan backend
                demi memastikan pengiriman fitur yang lancar. <br>
                <b>Tech Stack:</b> Flutter, Dart, Figma, Android Studio, GitHub, ClickUp
            </p>
            <a href="https://git.cni.net.id/gitama/mobile-oms" target="_blank" class="github-button">
                GitHub
            </a>

        </div>
    </div>

    {{-- Project 2 --}}
    <div class="project-wrapper">
        <div class="project-image">
            <img src="{{ asset('assets/projek2.png') }}" alt="Project Preview">
        </div>
        <div class="project-text">
            <h3 class="project-title">Sistem Informasi Manajemen Bimbingan Mahasiswa dan Perwalian (SIMBA)</h3>
            <p class="project-description">
                Sistem yang memfasilitasi pengelolaan data pelanggaran, poin kebaikan, serta konseling dan
                perwalian untuk meningkatkan komunikasi antara mahasiswa, dosen wali, dan orang tua. <br>
                Dalam pengembangan Sistem Informasi Manajemen Bimbingan Mahasiswa dan Perwalian (SIMBA),
                saya berperan sebagai
                <span class="wavy-underline-projek2">UI/UX Designer & Scrum Master</span> untuk versi website (Jan–Mar 2025) dan
                sebagai <span class="wavy-underline-projek2">Mobile Frontend Developer</span> untuk versi mobile (Mar–Mei 2025).
                Di versi website, saya merancang UI/UX menggunakan
                <span class="wavy-underline-projek2">Figma</span>, membuat wireframe dan prototipe,
                serta memimpin tim sebagai Scrum Master dengan mengelola backlog, sprint planning, dan koordinasi antar stakeholder.
                Sementara di versi mobile, saya membangun antarmuka aplikasi menggunakan <span class="wavy-underline-projek2">Jetpack Compose</span>,
                memastikan tampilan adaptif di berbagai perangkat, serta berkolaborasi erat dengan tim desain dan
                backend untuk implementasi fitur yang optimal.<br>
                <b>Tech Stack:</b> Figma, Coda, Kotlin, Jetpack Compose, Android Studio, Retrofit, DataStore, GitHub
            </p>
            <a href="https://github.com/pardzheri/pam-2025-simba" target="_blank" class="github-button">
                GitHub
            </a>
        </div>
    </div>

    {{-- Project 3 --}}
    <div class="project-wrapper">
        <div class="project-image">
            <img src="{{ asset('assets/projek3.png') }}" alt="Project Preview">
        </div>
        <div class="project-text">
            <h3 class="project-title">Informatics Undergraduate Program Website Development</h3>
            <p class="project-description">
                Website S1 Informatika IT Del sebagai portal informasi kurikulum, dosen, sejarah, dan kegiatan akademik mahasiswa. <br>
                Sebagai <span class="wavy-underline-projek3">Quality Assurance (QA)</span> dalam pengembangan website Informatics Study Program (Okt–Des 2024), saya bertanggung jawab
                dalam memelihara dan memperbarui test script sesuai perubahan sistem dan fitur baru. Saya menjalankan pengujian otomatis
                menggunakan Katalon, menganalisis hasilnya untuk mengidentifikasi bug, serta berkoordinasi dengan tim developer dalam pelaporan,
                pelacakan, dan validasi perbaikan. <br>
                <b>Tech Stack:</b> Katalon, Coda
            </p>
            <a href="https://github.com/viktrislubis/website-prodi-proyekbesar" target="_blank" class="github-button">
                GitHub
            </a>
        </div>
    </div>

    {{-- Project 4 --}}
    <div class="project-wrapper">
        <div class="project-image">
            <img src="{{ asset('assets/projek4.png') }}" alt="Project Preview">
        </div>
        <div class="project-text">
            <h3 class="project-title">Website Development of SMA Negeri 1 Balige</h3>
            <p class="project-description">
                Website profil sekolah dengan tampilan modern dan responsif, dilengkapi informasi
                akademik dan kegiatan sekolah, serta mudah diakses di berbagai perangkat.<br>
                Sebagai <span class="wavy-underline-projek4">Web Developer</span> pada proyek website SMA N 1 Balige (November 2024), saya mengembangkan
                tampilan antarmuka menggunakan <span class="wavy-underline-projek4">Laravel dan Blade Templating</span>. Saya juga berkolaborasi dengan tim
                backend untuk memastikan integrasi data berjalan lancar. <br>
                <b>Tech Stack:</b> Blade, CSS, JavaScript, PHP, SQLyog, XAMPP, GitHub
            </p>
            <a href="https://github.com/delcom-itdel/pabwe-pkm-proyek-2024-k2" target="_blank" class="github-button">
                GitHub
            </a>
        </div>
    </div>
</section>
<footer class="footer">
    <p>&copy; <span id="year"></span> Fretty’s Portfolio</p>
</footer>
@endsection


@push('scripts')
<script src="{{ asset('js/service.js') }}"></script>
@endpush