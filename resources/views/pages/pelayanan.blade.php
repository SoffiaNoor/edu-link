@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 text-white"
    style="background-image: url({{ asset('assets/images/bubble1.png') }});background-size: cover;">
    <div class="max-w-screen-xl mx-auto px-4 m sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12"
        data-aos="zoom-in-up">
        <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8">
            <h1 style="padding-top:3rem"
                class="font-extrabold text-center text-transparent pb-10 font-['Fredoka'] text-5xl bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600"
                data-aos="zoom-in-up">
                Pelayanan EduLink
            </h1>
            <div class="space-y-4 font-['Fredoka']">
                <details class="w-full text-lg shadow-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                    data-aos="zoom-in-up">
                    <summary class="px-4 text-lg py-6 focus:outline-none focus-visible:ri font-medium">
                        Apa saja
                        Benefit di
                        Edulink?</summary>
                    <p class="px-4 py-6 text-lg pt-0 ml-4 -mt-4 dark:text-gray-400">Edulink memiliki
                        empat
                        benefit utama. eBook berisi latihan soal prediksi yang eksklusif untuk belajar
                        mandiri beserta pembahasannya berupa video. Course fleksibel via zoom bareng
                        experts. Konsul untuk dapat arahan persiapan Kuliah. Tutor dan atau Konsultan
                        dapat dihubungi 24 jam.</p>
                </details>
                <details class="w-full text-lg shadow-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                    data-aos="zoom-in-up">
                    <summary class="px-4 py-6 text-lg focus:outline-none focus-visible:ri font-medium">
                        Apa ada
                        diskon yang
                        tersedia?</summary>
                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Ada diskon khusus
                        untuk anak
                        yatim dan untuk yang ajak temen daftarnya.</p>
                </details>
                <details class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                    data-aos="zoom-in-up">
                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                        Apa yang
                        membedakan Edulink dari online course lainnya?</summary>
                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Edulink satu-satunya
                        online course yang menyediakan les online untuk siswa SMA bidang IPA dan IPS
                        dengan program full konsultasi serta garansi cashback 100%</p>
                </details>
                <details class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                    data-aos="zoom-in-up">
                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                        Bagaimana
                        Edulink bisa meningkatkan prestasi belajar muridnya?</summary>
                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Edulink selalu
                        berupaya meningkatkan pencapaian akademis para siswa melalui penyelenggaraan
                        pembelajaran yang fleksibel. Murid dapat mengakses fitur-fitur yang dirancang
                        untuk memastikan pembelajaran berlangsung dengan nyaman. Edullink menerapkan
                        metode-metode cerdas yang mempercepat murid dalam memahami materi pelajaran dan
                        menyelesaikan tugas.</p>
                </details>
                <details class="w-full shadow-lg text-lg rounded-2xl bg-gradient-to-r from-blue-900 to-violet-800"
                    data-aos="zoom-in-up">
                    <summary class="px-4 py-6  text-lg focus:outline-none focus-visible:ri font-medium">
                        Bagaimana
                        prosedur pendaftaran di Edulink?</summary>
                    <p class="px-4 py-6 pt-0 ml-4 text-lg -mt-4 dark:text-gray-400">Pilih program yang
                        anda inginkan kemudian klik “daftar program” pada tombol diatas, isi form dan
                        lakukan pembayaran maksimal 1x24 jam</p>
                </details>
            </div>
        </div>
    </div>
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection