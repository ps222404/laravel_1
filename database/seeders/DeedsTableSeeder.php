<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deeds')->insert([
            'Narrator' => 'Narrated `Abdullah bin `Amr:',
            'Hadith' => 'Once the Prophet s.a.w remained behind us in a journey. He joined us while we were performing ablution for the prayer which was over-due. We were just passing wet hands over our feet (and not washing them properly) so the Prophet s.a.w addressed us in a loud voice and said twice or thrice: Save your heels from the fire.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('deeds')->insert([
            'Narrator' => 'Narrated Ibn `Umar:',
            'Hadith' => 'Allah`s Messenger s.a.w said, Amongst the trees, there is a tree, the leaves of which do not fall and is like a Muslim. Tell me the name of that tree. Everybody started thinking about the trees of the desert areas. And I thought of the date-palm tree but felt shy to answer the others then asked, What is that tree, O Allah`s Messenger s.a.w ? He replied, It is the date-palm tree.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('deeds')->insert([
            'Narrator' => 'Narrated `Abdullah bin `Abbas:',
            'Hadith' => 'Once Allah`s Messenger s.a.w gave a letter to a person and ordered him to go and deliver it to the Governor of Bahrain. (He did so) and the Governor of Bahrain sent it to Chousroes, who read that letter and then tore it to pieces. (The sub-narrator (Ibn Shihab) thinks that Ibn Al-Musaiyab said that Allah`s Messenger (ﷺ) invoked Allah against them (saying), "May Allah tear them into pieces, and disperse them all totally.)"',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('deeds')->insert([
            'Narrator' => 'Narrated Anas bin Malik:',
            'Hadith' => 'Once the Prophet s.a.w wrote a letter or had an idea of writing a letter. The Prophet (ﷺ) was told that they (rulers) would not read letters unless they were sealed. So the Prophet (ﷺ) got a silver ring made with "Muhammad Allah`s Messenger (ﷺ)" engraved on it. As if I were just observing its white glitter in the hand of the Prophet.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('deeds')->insert([
            'Narrator' => 'Narrated Anas bin Malik:',
            'Hadith' => 'The Prophet s.a.w said, "Facilitate things to people (concerning religious matters), and do not make it hard for them and give them good tidings and do not make them run away (from Islam).',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
