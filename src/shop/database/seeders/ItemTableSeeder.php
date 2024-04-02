<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'item_name' => 'ラズベリーのマカロン',
            'description' => '甘酸っぱいラズベリーのマカロンです。',
            'price' => 900,
            'image' => 'macarons.jpg',
        ]);

        Item::create([
            'item_name' => 'チョコレートケーキ',
            'description' => 'ほろ苦いコーヒービーンズをあしらった、ちょっと大人のチョコレートケーキです。',
            'price' => 580,
            'image' => 'choco-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'フルーツケーキ',
            'description' => '季節のフルーツでデコレーションしました。',
            'price' => 3400,
            'image' => 'fruits-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'バナナのマフィン',
            'description' => 'バナナをふんだんに使いました。ベリーをトッピングしています。',
            'price' => 480,
            'image' => 'banana-muffin.jpg',
        ]);

        Item::create([
            'item_name' => 'チョコチップのカップケーキ',
            'description' => 'チョコチップをいっぱい散りばめたカップケーキです。',
            'price' => 380,
            'image' => 'chocochip-cupcake.jpg',
        ]);

        Item::create([
            'item_name' => 'スパークリングキッス',
            'description' => '口の中で弾けるクリームをチョコレートでコーティングしました。',
            'price' => 120,
            'image' => 'sparkling-kiss.jpg',
        ]);

        Item::create([
            'item_name' => 'チョコレートトリュフ',
            'description' => '少し苦みのあるチョコレートトリュフです。',
            'price' => 150,
            'image' => 'chocolate-truffle.jpg',
        ]);

        Item::create([
            'item_name' => 'カラフルマカロン',
            'description' => '4色のマカロンです。味の違いをお楽しみください。',
            'price' => 650,
            'image' => 'colorful-macaroons.jpg',
        ]);

        Item::create([
            'item_name' => 'コーヒーカップケーキ',
            'description' => 'ブルーマウンテンを使ったカップケーキです。',
            'price' => 480,
            'image' => 'coffee-cupcake.jpg',
        ]);

        Item::create([
            'item_name' => '生チョコケーキ',
            'description' => '生チョコを贅沢に使ったケーキです。',
            'price' => 650,
            'image' => 'raw_chocolate-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'いちごのエクレア',
            'description' => 'フレッシュないちごと生クリームのハーモニー。',
            'price' => 580,
            'image' => 'strawberry-eclair.jpg',
        ]);

        Item::create([
            'item_name' => 'オレンジケーキ',
            'description' => '生地にオレンジを練り込みました。',
            'price' => 400,
            'image' => 'orange-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'ベリーのタルト',
            'description' => 'ラズベリーやブルーベリーを使ったタルトです。',
            'price' => 2800,
            'image' => 'berry-tarte.jpg',
        ]);

        Item::create([
            'item_name' => 'いちごソースケーキ',
            'description' => 'いちごのソースたっぷりのケーキ。',
            'price' => 580,
            'image' => 'strawberry_source-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'さくらんぼのケーキ',
            'description' => '季節のさくらんぼをたくさん入れてみました。',
            'price' => 450,
            'image' => 'cherry-cake.jpg',
        ]);

        Item::create([
            'item_name' => 'ショコラティーヌ',
            'description' => '3種類のチョコレートを使った贅沢なチョコレートケーキ',
            'price' => 550,
            'image' => 'chicolatina.jpg',
        ]);

        Item::create([
            'item_name' => 'チーズケーキ',
            'description' => 'フランス直輸入のチーズを使ったしっとりとしたチーズケーキ。',
            'price' => 600,
            'image' => 'cheesecake.jpg',
        ]);

        Item::create([
            'item_name' => 'クリーム・パフ',
            'description' => 'サクッとした食感のシューと、しっとり甘いクリームの組み合わせ。',
            'price' => 230,
            'image' => 'cream-puff.jpg',
        ]);

        Item::create([
            'item_name' => 'ベリーチーズケーキ',
            'description' => '3種類のベリーとさくらんぼのチーズケーキ。',
            'price' => 2300,
            'image' => 'berry-cheese-cakes.jpg',
        ]);

        Item::create([
            'item_name' => 'フィラデルフィア',
            'description' => 'フィラデルフィアチーズを使ったフレッシュなチーズケーキ。',
            'price' => 3500,
            'image' => 'philadelphia.jpg',
        ]);

        Item::create([
            'item_name' => 'いちごのケーキ',
            'description' => 'フレッシュないちごをたくさん詰め込みました。',
            'price' => 3700,
            'image' => 'strawberry-cake.jpg',
        ]);
    }
}
