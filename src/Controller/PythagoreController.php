<?php
namespace App\Controller;

use App\Utils\PythagoreUtility; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name: 'pythagore_view')]
    public function DisplayPythagoreAction(): Response
    {
        return $this->render('displayPythagore.html.twig', [
            'table' => $this->pythagoreUtility->display(),
        ]);
    }
}


?>