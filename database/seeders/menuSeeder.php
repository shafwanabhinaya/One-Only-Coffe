<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            // Signature
            [
                'name' => 'Kopi Susu One Only Creamy',
                'category' => 'Signature',
                'description' => 'Perpaduan kopi susu dengan cita rasa creamy dan manis pas khas One Only Coffee.',
                'price' => 27000,
                'image' => null,
            ],
            [
                'name' => 'Mango Yoghurt',
                'category' => 'Signature',
                'description' => 'Minuman perpaduan yoghurt segar dengan manis alami buah mangga.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Lychee Sunrise',
                'category' => 'Signature',
                'description' => 'Mocktail segar rasa leci dengan kombinasi gradasi rasa tropis yang menyegarkan.',
                'price' => 27000,
                'image' => null,
            ],
            [
                'name' => 'Fresh Lime Mojito',
                'category' => 'Signature',
                'description' => 'Sensasi kesegaran perasan jeruk nipis alami berpadu daun mint dan soda.',
                'price' => 27000,
                'image' => null,
            ],

            // Espresso Based
            [
                'name' => 'Americano',
                'category' => 'Espresso Based',
                'description' => 'Espresso murni yang dipadukan dengan air, disajikan panas atau dingin.',
                'price' => 24000,
                'image' => null,
            ],
            [
                'name' => 'Espresso',
                'category' => 'Espresso Based',
                'description' => 'Ekstraksi kopi murni dengan aroma pekat dan krema tebal khas One Only.',
                'price' => 22000,
                'image' => null,
            ],
            [
                'name' => 'Cappuccino',
                'category' => 'Espresso Based',
                'description' => 'Keseimbangan sempurna antara espresso, steamed milk, dan foam susu tebal.',
                'price' => 24000,
                'image' => null,
            ],
            [
                'name' => 'Latte',
                'category' => 'Espresso Based',
                'description' => 'Espresso berpadu lembutnya steamed milk dengan lapisan microfoam tipis.',
                'price' => 24000,
                'image' => null,
            ],

            // Coffee Based
            [
                'name' => 'Salted Caramel',
                'category' => 'Coffee Based',
                'description' => 'Kopi susu berpadu dengan sirup salted caramel yang gurih manis.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Bailey Coffee',
                'category' => 'Coffee Based',
                'description' => 'Kopi susu dengan aroma dan kenikmatan rasa khas Irish cream Baileys (non-alcohol).',
                'price' => 31000,
                'image' => null,
            ],
            [
                'name' => 'Vanilla Latte',
                'category' => 'Coffee Based',
                'description' => 'Espresso dan susu lembut dengan aroma manis sirup vanilla.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Hazelnut Latte',
                'category' => 'Coffee Based',
                'description' => 'Espresso dan susu berpadu dengan cita rasa gurih manis kacang hazelnut.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Caramel Latte',
                'category' => 'Coffee Based',
                'description' => 'Perpaduan kopi susu lembut dengan sirup karamel yang manis dan wangi.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Butterscotch Latte',
                'category' => 'Coffee Based',
                'description' => 'Kopi susu berpadu rasa mentega karamel butterscotch yang kaya dan lezat.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Kopi Susu One Only Strong',
                'category' => 'Coffee Based',
                'description' => 'Kopi susu khas One Only dengan takaran kopi lebih intens dan nendang.',
                'price' => 29000,
                'image' => null,
            ],
            [
                'name' => 'Mochaccino',
                'category' => 'Coffee Based',
                'description' => 'Kombinasi klasik espresso pekat, cokelat premium, dan susu lembut.',
                'price' => 31000,
                'image' => null,
            ],

            // Literan
            [
                'name' => 'Kopi Susu One Only 1L',
                'category' => 'Literan',
                'description' => 'Kopi susu signature kemasan botol 1 Liter, cocok dinikmati bersama teman atau keluarga.',
                'price' => 85000,
                'image' => null,
            ],

            // Non-Coffee (Milky Based)
            [
                'name' => 'Red Velvet',
                'category' => 'Non-Coffee (Milky Based)',
                'description' => 'Minuman susu creamy dengan rasa kue red velvet yang manis dan lembut.',
                'price' => 30000,
                'image' => null,
            ],
            [
                'name' => 'Taro',
                'category' => 'Non-Coffee (Milky Based)',
                'description' => 'Minuman susu creamy berpadu cita rasa manis khas ubi ungu taro.',
                'price' => 30000,
                'image' => null,
            ],
            [
                'name' => 'Chocolate',
                'category' => 'Non-Coffee (Milky Based)',
                'description' => 'Minuman susu cokelat pekat berkualitas dengan rasa manis yang kaya.',
                'price' => 30000,
                'image' => null,
            ],
            [
                'name' => 'Matcha',
                'category' => 'Non-Coffee (Milky Based)',
                'description' => 'Teh hijau matcha autentik berpadu susu lembut yang menenangkan.',
                'price' => 30000,
                'image' => null,
            ],
            [
                'name' => 'Choco Mint',
                'category' => 'Non-Coffee (Milky Based)',
                'description' => 'Perpaduan cokelat nikmat dengan sensasi dingin menyegarkan dari mint.',
                'price' => 30000,
                'image' => null,
            ],

            // Non-Coffee (Tea Based)
            [
                'name' => 'Ginger Lemon',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Seduhan teh hangat/dingin dipadu kehangatan jahe dan kesegaran lemon.',
                'price' => 28000,
                'image' => null,
            ],
            [
                'name' => 'Grape Fruit Tea',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Teh segar berpadu dengan rasa asam manis dari buah grapefruit pilihan.',
                'price' => 26000,
                'image' => null,
            ],
            [
                'name' => 'Blueberry Tea',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Teh aromatik dipadukan dengan kesegaran manis buah blueberry.',
                'price' => 26000,
                'image' => null,
            ],
            [
                'name' => 'Lemon Tea',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Teh hitam segar berpadu sari lemon asli yang menyegarkan dahaga.',
                'price' => 26000,
                'image' => null,
            ],
            [
                'name' => 'Lychee Tea',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Teh harum berpadu rasa manis lembut buah leci segar.',
                'price' => 26000,
                'image' => null,
            ],
            [
                'name' => 'Sweat Tea',
                'category' => 'Non-Coffee (Tea Based)',
                'description' => 'Teh manis dingin klasik yang menyegarkan dahaga.',
                'price' => 15000,
                'image' => null,
            ],

            // Non-Coffee (Soda Based)
            [
                'name' => 'Frosty Mango',
                'category' => 'Non-Coffee (Soda Based)',
                'description' => 'Minuman soda dingin dengan rasa mangga manis dan segar.',
                'price' => 28000,
                'image' => null,
            ],
            [
                'name' => 'Blue Ocean',
                'category' => 'Non-Coffee (Soda Based)',
                'description' => 'Minuman soda biru segar dengan sensasi citrus yang membangkitkan semangat.',
                'price' => 28000,
                'image' => null,
            ],
            [
                'name' => 'Mineral Water',
                'category' => 'Non-Coffee (Soda Based)',
                'description' => 'Air mineral murni dan higienis untuk menyegarkan hidrasi tubuh.',
                'price' => 10000,
                'image' => null,
            ],
            [
                'name' => 'Berry Fusion',
                'category' => 'Non-Coffee (Soda Based)',
                'description' => 'Minuman soda menyegarkan dengan kombinasi asam manis aneka berry.',
                'price' => 28000,
                'image' => null,
            ],
        ];

        $now = now();
        $payload = array_map(function ($item) use ($now) {
            return array_merge($item, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $menus);

        DB::table('menu')->delete();
        DB::table('menu')->insert($payload);
    }
}

if (!class_exists('Database\Seeders\MenuSeeder', false)) {
    class_alias(menuSeeder::class, 'Database\Seeders\MenuSeeder');
}

if (!class_exists('Database\Seeders\menu', false)) {
    class_alias(menuSeeder::class, 'Database\Seeders\menu');
}
