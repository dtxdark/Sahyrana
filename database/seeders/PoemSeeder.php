<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Poem;
use App\Models\Poet;
use Illuminate\Support\Facades\DB;
class PoemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $poets = Poet::all();
        foreach ($poets as $poet) {
            poem::created([
                'title' => 'Magtumguly Pyragy',
                'content' =>
                    'AÝRYLDYM
Bilbilem, ahy-zar çekip,
Täze gülzardan aýryldym.
Gözden ganly ýaşym döküp,
Söwdügim ýardan aýryldym.

Ýara ýaraşar sürmeçe,
Sypatyn söýlärem ençe,
Agzy şeker, lebi gunça,
Zülpi garadan aýryldym.

Şirin janda ýokdur takat,
Jebri onuň jana rahat,
Gaşlary pitneýi-apat,
Çeşmi hunhordan aýryldym.

Aýryldym gunça-gülümden,
Syýa saçy sünbülimden,
Hoş owazly bilbilimden,
Şirin güftardan aýryldym.

Däli köňlüm arzymany,
Külli gözelleriň hany,
Sekiz jennetiň bossany,
Bakjaly bardan aýryldym.

Illeri bar deňli-deňli,
Sowuk suwly, ter öleňli,
Ili – gökleň, ady – Meňli,
Näzli dildardan aýryldym.

Magtymguly, aşyk messan,
Bagladym şanyna dessan,
Menzilgähi bag-u bossan,
Almaly nardan aýryldym.',
                'poet_id'=>$poet->id,
            ]);
    }
    }
}
