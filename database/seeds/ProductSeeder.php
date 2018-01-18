<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Home;
use App\About;
use App\Lainnya;
use App\Store;
use App\Jamker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $Product = Product::create([
            'nama_product' => 'Jeans',
            'bahan' =>' Levis',
            'ukuran' =>'39-41',
            'warna' =>'Navy , Black',
            'cover'=>'9f17dfcf2fceda1eff6375282c4ae2ef.jpg']);
 



             $Home = Home::create([
            'textkecilhd' => 'KONVEKSI CELANA KUALITAS TERJAMIN',
            'textbesarhd' =>'PANS COMPANY',
            'cover'=>'a81efdd94ed640760b65bd087230e88e.jpg	',
            'textkecilboldbd'=>'KONVEKSI BERKUALITAS',
            'textbesarbd'=>'PANSCOMPANY',
            'textkecilbd'=>'<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!</p>
								</body>
								</html>',
            'textkecilboldft'=>'DATANG DAN BUKTIKAN SENDIRI KE STORE KAMI',
            'textbesarft'=>'DISC 50% ',
            'textkecilft'=>'<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Disciunt 50% Buat Kalian Yg Bawa Pacar Orang Lain !!!</p>
							</body>
							</html>'
            ]);



                $About = About::create([
            'cover'=>'b01a7c098bb0924a6d71c209059b8a9a.jpg',
            'textkecilbold' => 'About Our Company',
            'textbesar' => 'Pans Company',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
							<p class="mb-0">We guarantee that you will fall in&nbsp;<em>lust</em>&nbsp;with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
							</body>
							</html>'
            ]);


                 $Store = Store::create([
            'textkecilatas'=>'COME ON IN',
            'textbesaratas'=>'WE RE OPEN',
            'Senin'=>'7:30 Sampai 21:00',
            'Selasa'=>'7:30 Sampai 21:00',
            'Rabu'=>'7:30 Sampai 21:00',
            'Kamis'=>'Libur',
            'Jumat'=>'7:30 Sampai 21:00',
            'Sabtu'=>'7:30 Sampai 21:00',
            'Minggu'=>'7:30 Sampai 21:00',
            'cover'=>'5b339e5260ee22a52e22d30a490988de.jpg',
            'textkecilbold' => 'STRONG COFFEE, STRONG ROOTS',
            'textbesar' => 'ABOUT OUR CAFE',
            'textkecil' => '<!DOCTYPE html>
							<html>
							<head>
							</head>
							<body>
							<p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
							<p class="mb-0">We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time</p>
							</body>
							</html>'
            ]);


                 $Lainnya = Lainnya::create([
            'cover'=>'ff336f106ad70b0367a72200468175da.jpg',
            'notlp'=>'(022) 9090-9292',
            'line' => '@panscompany (Jangan Lupa Gunakan @) ',
            'email' => 'info@panscompany.com',
            'alamat' => 'Jalan Kenangan No.24  Bandung, Indonesia'
            ]);


    }
}
