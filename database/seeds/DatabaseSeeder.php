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
            'email' => 'tondeur1@gmail.com',
            'password' => bcrypt('azerty'),
            'tel' => '0602733438',
            'ville' => 'Auchy-les-mines',
            'code_postal' => '62138',
            'adresse1' => '43  rue Alphonse Daudet',
            'role' => 'tondeur',
            'grade' => 'Tondeur validé',
        ]);

        DB::table('users')->insert([
            'nom' => "Pierru",
            'prenom' => "Dimitry",
            'email' => 'tondeur2@gmail.com',
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
            'email' => 'tondu1@gmail.com',
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
            'email' => 'tondu2@gmail.com',
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
            'id_tondu' => "3",
            'titre' => 'Petit jardi à la campagne',
            'texte' => 'Ceci est l\annonceType de l\'user 3. Petit jardin de campagne a venir entretenir tout les WeekEnd car sinon mes vaches mangent toute ma pelouse',
            'surface' => '100',
            'prix' => '25',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "3",
            'date_tonte' => '2019-01-12',
            'titre' => 'Petit jardi à la campagne',
            'texte' => 'Petit jardin de campagne a venir entretenir tout les WeekEnd car sinon mes vaches mangent toute ma pelouse',
            'surface' => '100',
            'prix' => '25',
        ]);  
        DB::table('demande')->insert([
            'id_tondu' => "3",
            'date_tonte' => '2018-12-21',
            'titre' => 'Petit jardi à la campagne',
            'texte' => 'Petit jardin de campagne a venir entretenir tout les WeekEnd car sinon mes vaches mangent toute ma pelouse',
            'surface' => '100',
            'prix' => '25',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "3",
            'date_tonte' => '2019-04-22',
            'titre' => 'Petit jardi à la campagne',
            'texte' => 'Petit jardin de campagne a venir entretenir tout les WeekEnd car sinon mes vaches mangent toute ma pelouse',
            'surface' => '100',
            'prix' => '25',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "3",
            'date_tonte' => '2019-06-27',
            'titre' => 'Jardin de grande maison en campagne',
            'texte' => 'Cette année à cause d\'une chute dans les escaliers, je ne pourrais pas tondre le jardin de ma chère et tendre belle mère, je cherche donc un volontaire pour aller la supporter et tondre son jardin',
            'surface' => '210',
            'prix' => '60',
        ]);

        DB::table('demande')->insert([
            'id_tondu' => "4",
            'titre' => 'Jardin vers Saille',
            'texte' => 'tonte d\'un petit jardin dans la ville de Saille, dans le département dans la Loire ',
            'surface' => '50',
            'prix' => '20',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "4",
            'date_tonte' => '2019-11-14',
            'titre' => 'Jardin vers Saille',
            'texte' => 'tonte d\'un petit jardin dans la ville de Saille, dans le département dans la Loire ',
            'surface' => '50',
            'prix' => '20',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "4",
            'date_tonte' => '2019-04-01',
            'titre' => 'Jardin de Versailles',
            'texte' => 'Je vais rentrer à mon domicile principal qui est le chateau de Versaille pour les vacances de paques et j\'aimerai qua mon retour le jardin soit bien tondu',
            'surface' => '8000000',
            'prix' => '500',
        ]);
        DB::table('demande')->insert([
            'id_tondu' => "4",
            'date_tonte' => '2019-05-09',
            'titre' => 'Jardin vers Saille',
            'texte' => 'tonte d\'un petit jardin dans la ville de Saille, dans le département dans la Loire ',
            'surface' => '50',
            'prix' => '20',
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