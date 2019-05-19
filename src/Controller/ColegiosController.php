<?php

namespace App\Controller;

use App\Entity\Colegios;
use App\Form\ColegiosType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/colegios")
 */
class ColegiosController extends AbstractController
{
    /**
     * @Route("/", name="colegios_index", methods={"GET"})
     */
    public function index(): Response
    {
        $colegios = $this->getDoctrine()
            ->getRepository(Colegios::class)
            ->findAll();

        return $this->render('colegios/index.html.twig', [
            'colegios' => $colegios,
        ]);
    }

    /**
     * @Route("/new", name="colegios_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $colegio = new Colegios();
        $form = $this->createForm(ColegiosType::class, $colegio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($colegio);
            $entityManager->flush();

            return $this->redirectToRoute('colegios_index');
        }

        return $this->render('colegios/new.html.twig', [
            'colegio' => $colegio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="colegios_show", methods={"GET"})
     */
    public function show(Colegios $colegio): Response
    {
        return $this->render('colegios/show.html.twig', [
            'colegio' => $colegio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="colegios_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Colegios $colegio): Response
    {
        $form = $this->createForm(ColegiosType::class, $colegio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('colegios_index', [
                'id' => $colegio->getId(),
            ]);
        }

        return $this->render('colegios/edit.html.twig', [
            'colegio' => $colegio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="colegios_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Colegios $colegio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$colegio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($colegio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('colegios_index');
    }
}
