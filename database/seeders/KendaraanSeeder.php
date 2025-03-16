<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        $lokasiGarasi = DB::table('lokasi_garasi')->pluck('id', 'kota');

        DB::table('kendaraan')->insert([
            [
                'gambar_url' => 'https://awsimages.detik.net.id/community/media/visual/2024/07/16/toyota-avanza-13l.png?w=600&q=90',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Toyota Avanza',
                'kapasitas_kursi' => 7,
                'jenis_transmisi' => 'Automatic',
                'tahun_produksi' => 2020,
                'nomor_polisi' => 'B 1234 ABC',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 350000,
                'kondisi_fasilitas' => 'AC, Audio, GPS',
                'lokasi_garasi_id' => $lokasiGarasi['Jakarta'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://imgcdn.espos.id/@espos/images/2022/03/07Honda-Jazz-2014-2021-Otoloka.id_.jpg?quality=60',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Honda Jazz',
                'kapasitas_kursi' => 5,
                'jenis_transmisi' => 'Manual',
                'tahun_produksi' => 2018,
                'nomor_polisi' => 'D 5678 XYZ',
                'status_ketersediaan' => 'Disewa',
                'harga_sewa_per_periode' => 300000,
                'kondisi_fasilitas' => 'AC, Audio, Sunroof',
                'lokasi_garasi_id' => $lokasiGarasi['Bandung'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://img.gaadicdn.com/images/car-images/360x240/Maruti/Ertiga/8711/1679898034136/221_idnight-black_000000.jpg',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Suzuki Ertiga',
                'kapasitas_kursi' => 7,
                'jenis_transmisi' => 'Automatic',
                'tahun_produksi' => 2019,
                'nomor_polisi' => 'A 9101 BCD',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 325000,
                'kondisi_fasilitas' => 'AC, Audio, Bluetooth',
                'lokasi_garasi_id' => $lokasiGarasi['Surabaya'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzTKeLmc2n1kAZC7COAalE45JwZuwffwjpwQ&s',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Mitsubishi Pajero',
                'kapasitas_kursi' => 7,
                'jenis_transmisi' => 'Automatic',
                'tahun_produksi' => 2021,
                'nomor_polisi' => 'L 1122 DEF',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 500000,
                'kondisi_fasilitas' => 'AC, Audio, GPS, Kamera Mundur',
                'lokasi_garasi_id' => $lokasiGarasi['Malang'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://imgcdnblog.carmudi.com.ph/wp-content/uploads/2021/11/23153412/Daihatsu-Xenia-1.3-X.jpg',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Daihatsu Xenia',
                'kapasitas_kursi' => 7,
                'jenis_transmisi' => 'Manual',
                'tahun_produksi' => 2017,
                'nomor_polisi' => 'F 3344 GHI',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 275000,
                'kondisi_fasilitas' => 'AC, Audio',
                'lokasi_garasi_id' => $lokasiGarasi['Yogyakarta'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://www-europe.nissan-cdn.net/content/dam/Nissan/nissan_middle_east/vehicles/x-trail/MY23/Grades/S-4WD-7-Seats.jpg',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Nissan X-Trail',
                'kapasitas_kursi' => 5,
                'jenis_transmisi' => 'Automatic',
                'tahun_produksi' => 2019,
                'nomor_polisi' => 'H 7788 JKL',
                'status_ketersediaan' => 'Disewa',
                'harga_sewa_per_periode' => 450000,
                'kondisi_fasilitas' => 'AC, Audio, GPS, Sunroof',
                'lokasi_garasi_id' => $lokasiGarasi['Semarang'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://imgd.aeplcdn.com/664x374/n/cw/ec/44709/fortuner-exterior-right-front-three-quarter-20.jpeg?isig=0&q=80',
                'kategori_kendaraan' => 'Mobil',
                'merek_model' => 'Toyota Fortuner',
                'kapasitas_kursi' => 7,
                'jenis_transmisi' => 'Automatic',
                'tahun_produksi' => 2021,
                'nomor_polisi' => 'K 1122 MNO',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 600000,
                'kondisi_fasilitas' => 'AC, Audio, GPS, Kamera Mundur',
                'lokasi_garasi_id' => $lokasiGarasi['Denpasar'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://media.suara.com/pictures/653x366/2022/03/25/45871-mitsubishi-l300.jpg',
                'kategori_kendaraan' => 'Pickup',
                'merek_model' => 'Mitsubishi L300',
                'kapasitas_kursi' => 3,
                'jenis_transmisi' => 'Manual',
                'tahun_produksi' => 2016,
                'nomor_polisi' => 'M 5566 PQR',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 250000,
                'kondisi_fasilitas' => 'AC, Audio',
                'lokasi_garasi_id' => $lokasiGarasi['Makassar'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://isuzujakarta.net/wp-content/uploads/isuzu-elf-microbus-1-2-1.jpg',
                'kategori_kendaraan' => 'Minibus',
                'merek_model' => 'Isuzu Elf',
                'kapasitas_kursi' => 15,
                'jenis_transmisi' => 'Manual',
                'tahun_produksi' => 2018,
                'nomor_polisi' => 'N 2233 STU',
                'status_ketersediaan' => 'Disewa',
                'harga_sewa_per_periode' => 700000,
                'kondisi_fasilitas' => 'AC, Audio, LCD TV',
                'lokasi_garasi_id' => $lokasiGarasi['Bali'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'gambar_url' => 'https://cdn.antaranews.com/cache/1200x800/2019/04/17/Carry-PU-Wide-Deck.jpg',
                'kategori_kendaraan' => 'Pickup',
                'merek_model' => 'Suzuki Carry',
                'kapasitas_kursi' => 2,
                'jenis_transmisi' => 'Manual',
                'tahun_produksi' => 2015,
                'nomor_polisi' => 'P 4455 VWX',
                'status_ketersediaan' => 'Tersedia',
                'harga_sewa_per_periode' => 225000,
                'kondisi_fasilitas' => 'Audio',
                'lokasi_garasi_id' => $lokasiGarasi['Medan'],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
