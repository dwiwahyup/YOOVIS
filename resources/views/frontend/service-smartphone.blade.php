@extends('frontend/layouts.template')

@section('content')

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mt-5">
                <div class="col-12">
                    <div class="service">
                        <div class="title">
                            <img src="{{ asset('frontend/assets/img/smartphone.svg')}}">
                            Service Handphone
                        </div>
                    </div>
                    <br>
                    <div class="card question_left mb-5">
                        <div class="card-body">
                            <fieldset>
                                <div class="service">
                                    <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
                                        <form role="form" class="php-email-form">
                                            <label class="subtitle">Info Smartphone Anda</label>
                                            <hr>
                                            <div class="form-group">
                                                <label class="subtitle2">Merk Smartphone</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Merk Smartphone Anda" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="subtitle2">Type Smartphone</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Type Smartphone Anda" required>
                                            </div>
                                            <div class="form-group " id="data-0">
                                                <label class="subtitle2">Kerusakan Smartphone</label>
                                                <div class="row mb-3 p-2">
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Mati Total
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Layar Pecah

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Bootloop
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Speaker Mati
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Connetor Error
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-check-label">
                                                            <label class="names">
                                                                <input type="checkbox">
                                                                Lainnya
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <label class="subtitle">Kapan Anda Membutuhkan Layanan Ini?</label>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label class="subtitle2">Tanggal</label>
                                                        <input type="date" class="form-control"
                                                            placeholder="Click here to select a date" required>
                                                    </div>
                                                    <div class="form-group" id="datetime">
                                                        <label class="subtitle2">Waktu/jam</label>
                                                        <select class="form-control">
                                                            <option value='' disabled="disabled">--:--</option>
                                                            <option value="8:00" data-value="8">8:00</option>
                                                            <option value="9:00" data-value="9">9:00</option>
                                                            <option value="10:00" data-value="10">10:00</option>
                                                            <option value="11:00" data-value="11">11:00</option>
                                                            <option value="12:00" data-value="12">12:00</option>
                                                            <option value="13:00" data-value="13">13:00</option>
                                                            <option value="14:00" data-value="14">14:00</option>
                                                            <option value="15:00" data-value="15">15:00</option>
                                                            <option value="16:00" data-value="16">16:00</option>
                                                            <option value="17:00" data-value="17">17:00</option>
                                                            <option value="18:00" data-value="18">18:00</option>
                                                            <option value="19:00" data-value="19">19:00</option>
                                                        </select>
                                                    </div>
                                                    <label class="subtitle">Lokasi Anda</label>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label class="subtitle2">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control" id="name"
                                                            placeholder="Jember" required>
                                                    </div>
                                                    <div><button type="submit">Send
                                                            Message</button></div>
                                        </form>
                            </fieldset>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-4 mt-sm-0 d-none d-sm-block">
                    <div id="banner" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active ">
                                <img src="{{ asset('frontend/assets/img/servis hp.png')}}"
                                    class="d-none d-sm-block w-100" alt=AC Cleaning>
                            </div>
                            <div class="carousel-item  ">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317e146275.png"
                                    data-path="https://s3-ap-southeast-1.amazonaws.com/apic-asset/services-banner/image_589317e146275.png"
                                    onError="this.onerror=null;this.src='http://via.placeholder.com/500x350'"
                                    class="d-none d-sm-block w-100" alt=AC Cleaning Test>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="title">Butuh bantuan untuk pesan?</div>
                        <ul class="question_help_list">
                            <li>Contact 0822-8888-0101 / yoovis@gmail.com </li>
                            <li> (Senin-Jum'at 08:00 - 19:00 WIB, Sabtu-Minggu 09:00 - 18:00 WIB)</li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="title">Nilai lebih jasa kami</div>
                        <ul class="question_help_list">
                            <p>&nbsp;</p>
                            <p><strong>Layanan Jasa Servis Terbaik di Jember</strong></p>
                            <ul>
                                <li>Teknisi berpengalaman dan profesional.</li>
                                <li>Peralatan teknisi lengkap.</li>
                                <li>Garansi 30 hari.</li>
                                <li>Garansi HANYA berlaku untuk pemesanan melalui website atau aplikasi YooVis.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Nilai Lebih YooVis</strong></p>
                            <ul>
                                <li>Kami hanya memilih teknisi yang paling memenuhi syarat untuk memastikan kualitas
                                    layanan yang sangat baik. Tingkat kepuasan Anda adalah prioritas utama kami</li>
                                <li>Bebas repot, ditangani oleh layanan pelanggan profesional dan ramah kami tersedia 7
                                    hari seminggu</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p><strong>Pemberitahuan</strong><br />Pesanan Anda akan dibatalkan secara otomatis dalam
                                waktu 24 jam jika layanan pelanggan kami tidak dapat menghubungi Anda melalui telepon
                                untuk keperluan verifikasi dan penjadwalan.</p>
                            <p>&nbsp;</p>
                            <p><strong>Ekspektasi</strong><br />Tarif jasa adalah harga yang tertera di aplikasi atau web dan tidak termasuk harga sparepart.</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
