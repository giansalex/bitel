<?php

namespace App\Controller;

use App\Entity\Antenas;
use App\Form\AntenasType;
use App\Repository\AntenasRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/antenas")
 */
class AntenasController extends AbstractController
{
    /**
     * @Route("/", name="antenas_index", methods={"GET"})
     */
    public function index(AntenasRepository $repository, Request $request, PaginatorInterface $paginator): Response
    {
        $queryBuilder = $repository->getWithSearchQueryBuilder($request->query->get('q', ''));
        $pagination = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('antenas/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/new", name="antenas_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function new(Request $request): Response
    {
        $antena = new Antenas();
        $form = $this->createForm(AntenasType::class, $antena);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($antena);
            $entityManager->flush();

            return $this->redirectToRoute('antenas_index');
        }

        return $this->render('antenas/new.html.twig', [
            'antena' => $antena,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="antenas_show", methods={"GET"})
     */
    public function show(Antenas $antena): Response
    {
        return $this->render('antenas/show.html.twig', [
            'antena' => $antena,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="antenas_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Antenas $antena): Response
    {
        $form = $this->createForm(AntenasType::class, $antena);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('antenas_index', [
                'id' => $antena->getId(),
            ]);
        }

        return $this->render('antenas/edit.html.twig', [
            'antena' => $antena,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="antenas_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function delete(Request $request, Antenas $antena): Response
    {
        if ($this->isCsrfTokenValid('delete'.$antena->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($antena);
            $entityManager->flush();
        }

        return $this->redirectToRoute('antenas_index');
    }
}
