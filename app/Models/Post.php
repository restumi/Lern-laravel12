<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'PENDIDIKAN',
                'author' => 'Restu Maulana Ismael',
                'date' => '9 Desember 2020',
                'body' => 
                '
                    SMK N 8 Semarang adalah sekolah SMK paling sempit yang ada di tengah tengah kota semarang,
                    dengan lapangan kecilnya sekolah itu bergelut dengan semua kegiatan yang ada. Lahan sebelah kosong,
                    hanya untuk parkiran semata, namun ada sengketa tanah yang membuat pemerintah belum bisa membeli tanah itu
                    untuk sekolah SMK N 8. Sayang sungguh sayang, padahal saingannya banyak. SMK N 4 Semarang, SMK N 7 Semarang,
                    SMA N 1 Semarang, Semua sekolah yang berdampingan dengan SMK N 8 memiliki fasilitas yang cukup memadahi
                    dibandingkan dengan sekolah yang sedang kita bicarakan ini.
                '
            ],
            [
                'id' => 2,
                'title' => 'POLITIK',
                'author' => 'Vanesya Aurel C',
                'date' => '21 Jully 2022',
                'body' => 
                '
                    Indonesia, negara kesatuan, yang menganut ajaran demokrasi (katanya), 
                    namun saat ada rakyat jelata yang tidak bisa apa apa menyuarakan isi hatinya, LANGSUNG ILAANG.
                    Bagaimana dengan koruptor - koruptor yang semakin merajalela, semakin gila, semakin hilang OTAKnya.
                    Sedih dengan keadaan Indonesia saat ini, bagaimana bisa setelah kita merdeka malah dijajah oleh negara kita sendiri.    
                '
            ],
            [
                'id' => 3,
                'title' => 'NGANU',
                'author' => 'Sang Adjhi Karta Wijaya',
                'date' => '20 Maret 2024',
                'body' => 
                '
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, possimus
                    consequatur eum veritatis ex quae quos dicta autem. Id, nihil enim dolores labore cumque adipisci, 
                    laudantium repudiandae eligendi repellat placeat dolorum ab! Totam voluptates, soluta rem commodi ad voluptatum iure,
                    incidunt officia maiores possimus inventore assumenda, eum ut error repellendus?    
                '
            ],
            [
                'id' => 4,
                'title' => 'Rest API',
                'author' => 'Mas Dea',
                'date' => '11 Maret 2025',
                'body' => 
                '
                    Rest Api adalah sebuah code backend yang bisa menghubungkan beberapa App ke backend, contoh penggunaan 
                    beberapa App adalah: jika kita membuat App atau Frontend di Web, Mobile, Desktop, Ios, nah semua itu bisa kita 
                    sambungkan pada 1 backend saja agar gampang dalam CRUD data dan di semua platform datanya sama. Selain bisa
                    menggunakan lebih dar 1 frontend, kita juga bisa menggunakan beberapa backend.    
                '
            ],
            [
                'id' => 5,
                'title' => 'Rest Area',
                'author' => 'Mas Dea',
                'date' => '11 Maret 2025',
                'body' => 
                '
                    Rest Api adalah sebuah code backend yang bisa menghubungkan beberapa App ke backend, contoh penggunaan 
                    beberapa App adalah: jika kita membuat App atau Frontend di Web, Mobile, Desktop, Ios, nah semua itu bisa kita 
                    sambungkan pada 1 backend saja agar gampang dalam CRUD data dan di semua platform datanya sama. Selain bisa
                    menggunakan lebih dar 1 frontend, kita juga bisa menggunakan beberapa backend.    
                '
            ],
            [
                'id' => 6,
                'title' => 'Rest bro dah malam',
                'author' => 'Mas Dea',
                'date' => '11 Maret 2025',
                'body' => 
                '
                    Rest Api adalah sebuah code backend yang bisa menghubungkan beberapa App ke backend, contoh penggunaan 
                    beberapa App adalah: jika kita membuat App atau Frontend di Web, Mobile, Desktop, Ios, nah semua itu bisa kita 
                    sambungkan pada 1 backend saja agar gampang dalam CRUD data dan di semua platform datanya sama. Selain bisa
                    menggunakan lebih dar 1 frontend, kita juga bisa menggunakan beberapa backend.    
                '
            ]
        ];
    }

    public static function find($id): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}
