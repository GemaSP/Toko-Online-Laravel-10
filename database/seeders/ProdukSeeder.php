<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            // Brownies
            ['kategori_id' => 1, 'nama_produk' => 'Brownies Coklat', 'detail' => 'Lezat dengan coklat premium', 'harga' => 25000, 'stok' => 10, 'berat' => 500, 'foto' => 'brownies_coklat.jpg'],
            ['kategori_id' => 1, 'nama_produk' => 'Brownies Keju', 'detail' => 'Brownies dengan topping keju', 'harga' => 27000, 'stok' => 8, 'berat' => 500, 'foto' => 'brownies_keju.jpg'],
            ['kategori_id' => 1, 'nama_produk' => 'Brownies Kacang', 'detail' => 'Brownies dengan taburan kacang', 'harga' => 26000, 'stok' => 12, 'berat' => 500, 'foto' => 'brownies_kacang.jpg'],
            ['kategori_id' => 1, 'nama_produk' => 'Brownies Red Velvet', 'detail' => 'Brownies dengan rasa red velvet', 'harga' => 28000, 'stok' => 7, 'berat' => 500, 'foto' => 'brownies_red_velvet.jpg'],
            ['kategori_id' => 1, 'nama_produk' => 'Brownies Matcha', 'detail' => 'Brownies dengan rasa matcha asli', 'harga' => 29000, 'stok' => 9, 'berat' => 500, 'foto' => 'brownies_matcha.jpg'],

            // Combro
            ['kategori_id' => 2, 'nama_produk' => 'Combro Pedas', 'detail' => 'Isi oncom dengan rasa pedas', 'harga' => 5000, 'stok' => 20, 'berat' => 100, 'foto' => 'combro_pedas.jpg'],
            ['kategori_id' => 2, 'nama_produk' => 'Combro Keju', 'detail' => 'Combro dengan tambahan keju', 'harga' => 6000, 'stok' => 15, 'berat' => 100, 'foto' => 'combro_keju.jpg'],
            ['kategori_id' => 2, 'nama_produk' => 'Combro Original', 'detail' => 'Combro dengan isian oncom original', 'harga' => 4500, 'stok' => 18, 'berat' => 100, 'foto' => 'combro_original.jpg'],
            ['kategori_id' => 2, 'nama_produk' => 'Combro Kornet', 'detail' => 'Combro dengan isian kornet sapi', 'harga' => 7000, 'stok' => 12, 'berat' => 100, 'foto' => 'combro_kornet.jpg'],
            ['kategori_id' => 2, 'nama_produk' => 'Combro Sosis', 'detail' => 'Combro dengan tambahan sosis', 'harga' => 6500, 'stok' => 10, 'berat' => 100, 'foto' => 'combro_sosis.jpg'],

            // Dawet
            ['kategori_id' => 3, 'nama_produk' => 'Dawet Ayu', 'detail' => 'Minuman khas dengan santan segar', 'harga' => 10000, 'stok' => 25, 'berat' => 300, 'foto' => 'dawet_ayu.jpg'],
            ['kategori_id' => 3, 'nama_produk' => 'Dawet Cendol', 'detail' => 'Dawet dengan tambahan cendol kenyal', 'harga' => 11000, 'stok' => 22, 'berat' => 300, 'foto' => 'dawet_cendol.jpg'],
            ['kategori_id' => 3, 'nama_produk' => 'Dawet Durian', 'detail' => 'Dawet dengan durian asli', 'harga' => 15000, 'stok' => 15, 'berat' => 300, 'foto' => 'dawet_durian.jpg'],
            ['kategori_id' => 3, 'nama_produk' => 'Dawet Nangka', 'detail' => 'Dawet dengan tambahan nangka segar', 'harga' => 12000, 'stok' => 20, 'berat' => 300, 'foto' => 'dawet_nangka.jpg'],
            ['kategori_id' => 3, 'nama_produk' => 'Dawet Pandan', 'detail' => 'Dawet dengan aroma pandan wangi', 'harga' => 11000, 'stok' => 18, 'berat' => 300, 'foto' => 'dawet_pandan.jpg'],

            // Mochi
            ['kategori_id' => 4, 'nama_produk' => 'Mochi Kacang', 'detail' => 'Mochi dengan isian kacang manis', 'harga' => 15000, 'stok' => 12, 'berat' => 200, 'foto' => 'mochi_kacang.jpg'],
            ['kategori_id' => 4, 'nama_produk' => 'Mochi Coklat', 'detail' => 'Mochi dengan isian coklat lumer', 'harga' => 16000, 'stok' => 10, 'berat' => 200, 'foto' => 'mochi_coklat.jpg'],
            ['kategori_id' => 4, 'nama_produk' => 'Mochi Green Tea', 'detail' => 'Mochi dengan rasa matcha khas', 'harga' => 17000, 'stok' => 9, 'berat' => 200, 'foto' => 'mochi_green_tea.jpg'],
            ['kategori_id' => 4, 'nama_produk' => 'Mochi Keju', 'detail' => 'Mochi dengan isian keju gurih', 'harga' => 18000, 'stok' => 8, 'berat' => 200, 'foto' => 'mochi_keju.jpg'],
            ['kategori_id' => 4, 'nama_produk' => 'Mochi Stroberi', 'detail' => 'Mochi dengan rasa stroberi segar', 'harga' => 17500, 'stok' => 10, 'berat' => 200, 'foto' => 'mochi_stroberi.jpg'],

            // Wingko
            ['kategori_id' => 5, 'nama_produk' => 'Wingko Original', 'detail' => 'Wingko klasik dengan kelapa asli', 'harga' => 12000, 'stok' => 14, 'berat' => 250, 'foto' => 'wingko_original.jpg'],
            ['kategori_id' => 5, 'nama_produk' => 'Wingko Coklat', 'detail' => 'Wingko dengan tambahan coklat', 'harga' => 13000, 'stok' => 12, 'berat' => 250, 'foto' => 'wingko_coklat.jpg'],
            ['kategori_id' => 5, 'nama_produk' => 'Wingko Keju', 'detail' => 'Wingko dengan rasa keju gurih', 'harga' => 14000, 'stok' => 10, 'berat' => 250, 'foto' => 'wingko_keju.jpg'],
            ['kategori_id' => 5, 'nama_produk' => 'Wingko Pandan', 'detail' => 'Wingko dengan aroma pandan wangi', 'harga' => 13500, 'stok' => 9, 'berat' => 250, 'foto' => 'wingko_pandan.jpg'],
            ['kategori_id' => 5, 'nama_produk' => 'Wingko Nangka', 'detail' => 'Wingko dengan tambahan nangka segar', 'harga' => 14500, 'stok' => 8, 'berat' => 250, 'foto' => 'wingko_nangka.jpg'],
        ];

        foreach ($produk as $item) {
            Produk::create(array_merge($item, [
                'user_id' => 1,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
