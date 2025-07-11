@extends('layout.app')

@section('title', 'Fretty S. | About')

@section('content')
<main class="main-content">
    <div class="top-circle-bg"></div>
    <div class="text">Hi, I'm Fretty</div>

    <div class="content-container">
        <div class="text-block">
            <h2>About Me</h2>
            <p>
                Before I knew what career path to take, I've always been curious about how technology could solve real problems. As a student of Informatics at Institut Teknologi Del, I found myself especially drawn to three things:
                <span class="wavy-underline">Design,</span>
                <span class="wavy-underline"> frontend development,</span> and
                <span class="wavy-underline">quality assurance (QA).</span><br>
                I enjoy designing intuitive user interfaces that feel simple and meaningful. Design, for me, is about how people feel when interacting with a product. Whether it's choosing the right color palette or laying out a screen in Jetpack Compose, I love the challenge of making digital experiences both beautiful and usable.<br>
                While exploring frontend development, I also became interested in what happens after something is built. I wanted to make sure that every feature works exactly as intended—and that's where I found my passion for QA. I enjoy testing software, finding edge cases, and helping ensure everything runs smoothly for the end user.
            </p>
        </div>

        <div class="text-block">
            <h2>Why these three?</h2>
            <p>Because they're all about putting people first. Whether it's through thoughtful design, clean code, or precise testing, I believe in creating technology that is functional, reliable, and enjoyable to use.</p>
        </div>

        <div class="text-block">
            <h2>What's next?</h2>
            <p>I'm excited to keep learning, building, and collaborating. I want to grow as a designer, frontend enthusiast, and QA contributor—so I can be part of teams that create products people love and trust.</p>
        </div>
    </div>
</main>

<footer class="footer-container">
    <div class="social-icons">
        <a href="https://www.instagram.com/frettyyy._/" target="_blank" class="social-icon" aria-label="Instagram">
            <i data-lucide="instagram"></i>
        </a>
        <a href="https://www.linkedin.com/in/frettydeborasirait/" target="_blank" class="social-icon" aria-label="LinkedIn">
            <i data-lucide="linkedin"></i>
        </a>
        <a href="mailto:frettysirait26@gmail.com" class="social-icon" aria-label="Email">
            <i data-lucide="mail"></i>
        </a>
    </div>
</footer>
@endsection



@push('scripts')
<!-- Pastikan Lucide dimuat sebelum script kustom -->
<script src="https://unpkg.com/lucide@0.441.0/dist/umd/lucide.min.js"></script>
<script src="{{ asset('js/about.js') }}"></script>
@endpush
