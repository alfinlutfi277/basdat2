@extends('layouts.master')

@section('title', 'Alnime')

@section('header')

@section('content')
<section>
    <div class="kiri">
        <p>
        <h1>Kategori Anime</h1>
        </p>
        <ul>
            <li>
                <p><a href="#">Move</a></p>
            </li>
            <li>
                <p><a href="#">Komedi</a></p>
            </li>
            <li>
                <p><a href="#">Drama</a></p>
            </li>
            <li>
                <p><a href="#">Action</a></p>
            </li>
            <li>
                <p><a href="#">Adventure</a></p>
            </li>
            <li>
                <p><a href="#">Scool</a></p>
            </li>
            <li>
                <p><a href="#">Slice of Life</a></p>
            </li>
            <div>
                <h2><span class="bracket"> </span>Todo List <span class="bracket"> </span></h2>
                <form>
                    <input type="text" name="itemName" />
                </form>

                <div id="button">Add</div>
                <br />
                <ol>

                </ol>

            </div>

        </ul>



    </div>

    <div class="kanan">
        <br>
        <form>
            <input type="text">

            <button>Cari</button>
        </form>


        <p>
        <h1>Berita Populer</h1>
        </p>



        <p><img class="berita" src="image/naruto.jpg"> </p>
        Baca Juga: 5 Anime yang Harus Kamu Tonton jika Kamu Pencinta Anime Naruto



        <p><img class="berita" src="image/titan.jpg"> </p>
        Inilah Rekomendasi Anime Paling 'Dewa' Plihan Otaku di Jepang!


        <p><img class="berita" src="image/joi.jpg"> </p>
        Staf Jaku-Chara Tomozaki-kun Publikasi PV untuk Dua




    </div>

    <div class="tengah">

        <h2>
            <p style="text-align: center;"> Updet Anime </p>
        </h2>

        <h2>
            <p>Part 1 Sudah Selesai, Anime Mushoku Tensei Part 2 Akan Segera Tayang!</p>
        </h2>
        <h5> Written by Muhammad Faisal Posted on 22 Maret 2021</h5>
        <img class="gambartengah" src="image/mkt.jpg">

        <p>Pengumuman anime Mushoku Tensei Part 2 berasal dari akhir durasi pada episode 11. Pengumuman tersebut
            berupa gambar Rudeus, Eris dan Ruijerd dengan bertuliskan Part 2 akan segera tayang.<br>
            Saat pertama kali anime ini diumumkan, Mushoku Tensei berencana akan tayang sebanyak 23 episode. Untuk
            saat ini belum ada konfirmasi jelas kapan Part 2 anime-nya akan tayang.<br>
            Menurut beberapa rumor yang kami dapatkan, anime Mushoku Tensei Part 2 akan tayang pada Fall Season atau
            Musim Gugur 2021. Bahkan ada juga yang mengatakan Mushoku Tensei Part 2 akan tayang paling cepat pada
            Summer Season atau Musim Panas 2021. Belum ada informasi jelas kapan anime tersebut tayang. Mari kita
            tunggu saja informasi resmi dari pihak anime Mushoku Tensei.</p>


        <h3>
            <p>Kapan AoT Final Season Tamat & Daftar Episode Attack on Titan S4</p>
        </h3>
        <h5>Fitra Firdaus - 23 Maret 2021</h5>
        <img class="gambartengah" src="image/snks4.jpg">
        <p>Episode 16 anime Attack on Titan: Final Season (S4) "Tenchi" akan tayang pada Senin, 29 Maret 2021.
            Sesuai judulnya, episode terbaru AoT ini mengadaptasi Shingeki no Kyojin Chapter 116. Apakah ini akhir
            dari AoT Season 4? Anime Attack on Titan S4 yang digarap oleh studio MAPPA adalah adaptasi manga karya
            Hajime Isayama untuk Arc Marley (Chapter 91–106) dan War for Paradis (Chapter 107–116). Manga Shingeki
            no Kyojin sendiri berakhir pada Chapter 139 yang akan dirilis pada April 2021 ini, atau seminggu sejak
            penayangan AoT S4 Episode 15. Dengan demikian, masih ada sisa 23 chapter lagi yang belum diangkat ke
            versi anime.</p>

        <h2>
            <p>Prekuel "Jujutsu Kaisen 0" siap diadaptasi ke bentuk film</p>
        </h2>
        <h5>Inda Nurcahyani - 28 Maret 2021 10:12 WIB</h5>
        <img class="gambartengah" src="image/jujutsu.jpg">
        <p>Jakarta (ANTARA) - Serial komik (manga) dan animasi Jepang (anime) populer "Jujutsu Kaisen" telah
            mengumumkan rencana untuk lm besar pertamanya bertajuk "Jujutsu Kaisen 0", yang akan menjadi sebuah
            kisah prekuel.<br>
            Musim pertama "Jujutsu Kaisen" secara resmi berakhir sebagai seri aksi paling populer dari musim anime
            sepanjang musim gugur dan musim dingin. Alih-alih segera hadir dengan musim kedua, franchise anime akan
            dilanjutkan dengan lm tur baru.<br>
            Film baru ini, "Jujutsu Kaisen 0 the Movie", saat ini ditargetkan untuk rilis musim dingin di Jepang,
            yang
            bisa berarti akhir tahun ini atau awal beberapa bulan 2022. Studio MAPPA akan berada di belakang
            produksi
            animasi dari film baru tersebut, bersama dengan TOHO Pictures yang akan mendistribusikannya.</p>


    </div>
</section>
@endsection