<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer quelques utilisateurs de test s'ils n'existent pas
        $users = User::all();
        if ($users->count() === 0) {
            $users = User::factory(3)->create();
        }

        // Créer des posts de démonstration
        $posts = [
            [
                'title' => 'Bienvenue sur Student Blog !',
                'content' => "Bonjour et bienvenue sur notre nouvelle plateforme de blog étudiant !\n\nCette plateforme a été conçue spécialement pour vous permettre de partager vos idées, expériences et découvertes avec la communauté étudiante.\n\nQue vous souhaitiez écrire sur vos études, vos projets, vos voyages ou tout autre sujet qui vous passionne, cet espace est le vôtre !\n\nN'hésitez pas à créer votre premier article et à interagir avec les autres membres de la communauté.",
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Comment réussir ses études en informatique',
                'content' => "Après plusieurs années d'études en informatique, voici mes conseils pour réussir dans ce domaine passionnant.\n\n## 1. Pratiquer régulièrement\nLa programmation, c'est comme le sport : il faut s'entraîner régulièrement pour progresser. Consacrez du temps chaque jour à coder, même si c'est juste 30 minutes.\n\n## 2. Participer à des projets\nLes projets personnels et les contributions open-source sont essentiels pour appliquer ce que vous apprenez en cours.\n\n## 3. Rejoindre des communautés\nParticipez à des forums, des groupes d'étude et des événements tech. Le réseautage est crucial dans notre domaine.\n\n## 4. Rester curieux\nLa technologie évolue rapidement. Restez à jour avec les dernières tendances et n'ayez pas peur d'apprendre de nouveaux langages ou frameworks.",
                'is_published' => true,
                'published_at' => now()->subDay(),
            ],
            [
                'title' => 'Mes astuces pour organiser son temps étudiant',
                'content' => "Entre les cours, les révisions, le travail et la vie sociale, il peut être difficile de tout concilier. Voici mes techniques d'organisation qui m'ont sauvé la vie !\n\n**La technique Pomodoro**\nTravailler par blocs de 25 minutes avec des pauses de 5 minutes. C'est incroyablement efficace pour rester concentré.\n\n**Planifier la semaine**\nChaque dimanche, je planifie ma semaine en bloquant des créneaux pour chaque matière et activité.\n\n**Utiliser des apps**\nNotion pour prendre des notes, Google Calendar pour planifier, et Forest pour rester concentré.\n\n**Ne pas oublier les pauses**\nLe repos fait partie du processus d'apprentissage. Accordez-vous du temps libre sans culpabiliser !",
                'is_published' => true,
                'published_at' => now()->subHours(12),
            ],
            [
                'title' => 'Mon expérience Erasmus en Espagne',
                'content' => "Il y a six mois, je suis parti étudier à Madrid dans le cadre du programme Erasmus. Cette expérience a complètement changé ma vie !\n\nLes débuts ont été difficiles : nouvelle langue, nouveau système éducatif, nouvelles habitudes. Mais très vite, j'ai découvert une culture riche et des gens incroyablement accueillants.\n\nL'université était très différente de ce que je connaissais en France. Plus de travaux en groupe, moins de cours magistraux, beaucoup plus d'interaction.\n\nAu-delà des études, j'ai eu la chance de voyager dans toute l'Espagne et de rencontrer des étudiants du monde entier. Mon niveau d'espagnol s'est énormément amélioré.\n\nJe recommande cette expérience à tous les étudiants qui en ont l'opportunité. C'est un investissement sur soi-même qui vaut tous les efforts !",
                'is_published' => true,
                'published_at' => now()->subHours(6),
            ],
            [
                'title' => 'Brouillon : Idées pour le prochain semestre',
                'content' => "Quelques idées en vrac pour le semestre prochain :\n\n- Apprendre React Native\n- Commencer un projet de machine learning\n- Rejoindre une association étudiante\n- Améliorer mon portfolio\n- Lire plus de livres techniques\n\nÀ développer plus tard...",
                'is_published' => false,
                'published_at' => null,
            ],
        ];

        foreach ($posts as $postData) {
            Post::create([
                'title' => $postData['title'],
                'content' => $postData['content'],
                'slug' => \Illuminate\Support\Str::slug($postData['title']),
                'is_published' => $postData['is_published'],
                'published_at' => $postData['published_at'],
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
