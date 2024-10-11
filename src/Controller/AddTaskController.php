<?php

namespace App\Controller;

use App\Entity\TaskAdd;
use App\Form\AddTaskType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddTaskController extends AbstractController
{
    
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $task = new TaskAdd();
        $form = $this->createForm(AddTaskType::class, $task);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $entityManager->persist($task);
            $entityManager->flush();

            $this->addFlash('Success', 'Your task has been added and saved.');
            return $this->redirectToRoute('app_add_task');

        };

        return $this->render('add_task/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
