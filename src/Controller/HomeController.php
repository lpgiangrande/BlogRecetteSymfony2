<?php
namespace App\Controller;

use Swift;
use DateTime; 
use Swift_Mailer;
use App\Entity\Contact;
use App\Entity\Recette;
use App\Form\ContactType;
use App\Notification\Notification;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(RecetteRepository $recetteRepository)
    {
        $recettes = $recetteRepository->findAll();

        return $this->render('home/index.html.twig', [
            'recettes' => $recettes,
            'menu' => 'home'
        ]);
    }

    /**
     * @Route ("/contact", name="home_contact")
     */
    public function contact(Request $request, Notification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {
            $notification->notifyContact($contact);
            $this->addFlash('success', 'Votre email a bien été envoyé');
            return $this->redirectToRoute('home',[], 301);
            // $message = (new \Swift_Message('Test envoi mail'))
            //     ->setFrom('exemple@gmail.fr')
            //     ->setTo($contact->getEmail())
            //     //->setBody('Envoi test avec swift mailer');
            //     ->setBody($this->render('email/contact.html.twig', [
            //             'contact' => $contact
            //      ]),
            //     'text/html'
            // );
                
            // $mailer->send($message);

        }

        return $this->render('home/contact.html.twig',[
            'formContact' => $form->createView()
        ]);
    }


     // Fonction pour créer nos 2 1eres recettes
    /* public function index(EntityManagerInterface $em)
    {
        $recette = new Recette();
        $recette
            ->setTitre('Test recette')
            ->setResume('Resume')
            ->setPreparation('Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.')
            ->setTemps("25 min")
            ->setPersonne(6)
            ->setCreatedAt(new DateTime()); // use DateTime; 

        $recette2 = new Recette();
        $recette2
            ->setTitre('Test recette 2')
            ->setResume('Resume Resume Resume')
            ->setPreparation('Sed quid homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim, que magis ad hominis dignitatem quam ad rei publicae necessitatem pertinerent? Supplicationem quindecim dierum decrevi sententia mea. Rei publicae satis erat tot dierum quot C. Mario ; dis immortalibus non erat exigua eadem gratulatio quae ex maximis bellis. Ergo ille cumulus dierum hominis est dignitati tributus.')
            ->setTemps("60 min")
            ->setPersonne(4)
            ->setCreatedAt(new DateTime());
        
        $em->persist($recette); // garde en mémoire l'objet recette créer à mettre en BDD, pas envoyé
        $em->persist($recette2);

        $em->flush(); // Envoie en BDD  

        return $this->render('home/index.html.twig'); // Renvoie à la vue de la page d'accueil
    }*/
}