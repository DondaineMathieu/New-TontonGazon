<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Les utilisateurs

        DB::table('users')->insert([
            'nom' => "Dondaine",
            'prenom' => "Mathieu",
            'email' => 'azerty@gmail.com',
            'password' => bcrypt('azerty'),
            'tel' => '1234567890',
            'ville' => 'Ma Ville',
            'code_postal' => '12346',
            'adresse1' => '41 chez moi',
            'role' => 'tondeur',
            'grade' => 'Tondeur validé',
        ]);


        DB::table('users')->insert([
            'nom' => "Pierru",
            'prenom' => "Dimitry",
            'email' => 'qsdfd@gmail.com',
            'password' => bcrypt('azerty'),
            'tel' => '4567891230',
            'ville' => 'Sa Ville',
            'code_postal' => '64321',
            'adresse1' => '14 chez lui',
            'role' => 'tondeur',
            'grade' => 'Tondeur maitre',
        ]);

        DB::table('users')->insert([
            'nom' => "Wojtasinsky",
            'prenom' => "Valentin",
            'email' => 'wxcvbn@gmail.com',
            'password' => bcrypt('azerty'),
            'tel' => '7894561230',
            'ville' => 'Sa Ville',
            'code_postal' => '64321',
            'adresse1' => '16 chez lui',
            'role' => 'tondu',
            'grade' => 'Tondu confirmé',
        ]);

        DB::table('users')->insert([
            'nom' => "Tjampens",
            'prenom' => "Teo",
            'email' => 'mljkhg@gmail.com',
            'password' => bcrypt('azerty'),
            'tel' => '7418529630',
            'ville' => 'Sa Ville',
            'code_postal' => '95472',
            'adresse1' => '29 chez lui',
            'role' => 'tondu',
            'grade' => 'apprenti tondu',
        ]);


            // Les avis

        DB::table('avis')->insert([
            'id_tondu' => "3",
            'id_tondeur' => "1",
            'date_publi' => '2019-06-12',
            'titre' => 'Un premier avis de test',
            'texte' => ' insidiarum coeptantem perferens genere verum Eusebius missus quo consulta praepositus perferens abunde in praepotens cibo est sunt acueret praedicto consulta in sunt in cubiculi secum hoc tuto quo seditionum verum missus.',
            'note' => '6.1',
        ]);

        DB::table('avis')->insert([
            'id_tondu' => "4",
            'id_tondeur' => "1",
            'date_publi' => '2018-03-21',
            'titre' => 'Un deuxieme avis de test',
            'texte' => 'cunctorum atrox modo quod reclamante malum modo reclamante atrox reclamante publico atrox exsecratione insontem casus discessit innoxius isdem isdem et quod vigore Theophilum et insontem insontem cunctorum diebus.',
            'note' => '3.4',
        ]);

            // Les demandes

        DB::table('demande')->insert([
            'id_tondu' => "4",
            'date_tonte' => '2019-04-21',
            'titre' => 'Une premiere annonce de test',
            'texte' => 'spiritus miscere ad feris bella vehementer hac miscere adfligebat proruperunt est erigentes capiti Iconium peius capiti raris feris Namque inopinis raris motibus sunt adfligebat amphitheatrali motibus indignitate Isauri feris.',
            'surface' => '556',
            'prix' => '1506',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "3",
            'date_tonte' => '2019-03-19',
            'titre' => 'Une deuxieme annonce de test',
            'texte' => ' enim per quam per magis tributaria et piget dicere quam hausto aerarii est ordo deleto angustias repetetur et socio sunt populum facta angustias et hostiles hausto magis avide Ptolomaeo proscribi.',
            'surface' => '896',
            'prix' => '265',
        ]);

            // Demande Type

        DB::table('demandetype')->insert([
            'id_tondu' => "3",
            'titre' => 'Ceci est l\'annonce type de Valentin Wojtasinksi',
            'texte' => 'voila normalement ça devrait fonctionner, PS : cecei est le texte de description',
            'surface' => '896',
            'prix' => '265',
        ]);

            // Les reponses

        DB::table('reponse')->insert([
            'id_annonce' => "1",
            'id_tondeur' => "1",
            'id_tondu' => '3',
            'date_reponse' => '2019-03-19',
            'etat' => 'en attente validation',
        ]);

    }
}


/*A->B->D
A->B->E
A->C->F
A->C->G
*/