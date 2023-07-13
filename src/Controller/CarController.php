<?php

declare(strict_types=1);

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchType;
use App\Repository\CarRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    public function __construct(
        private CarRepository $carRepository
    ) {
    }

    #[Route('/', name: 'app_car')]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $query = $this->carRepository->findSearch($data);
        $cars = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /* page number */
            20 /* limit per page */,
            ['wrap-queries' => true]
        );

        return $this->render('car/index.html.twig', [
            'cars' => $cars,
            'form' => $form->createView(),
        ]);
    }
}
