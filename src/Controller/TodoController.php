<?php

namespace App\Controller;

use App\Model\TodoModel;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TodoController extends AbstractController
{
    /**
     * Liste des tâches
     *
     * @Route("/todos", name="todo_list", methods={"GET"})
     */
    public function todoList() :Response
    {
        $todos = TodoModel::findAll();

        return $this->render('todo/list.html.twig', [
            'todos' => $todos,
        ]);
    }

    /**
     * Affichage d'une tâche
     *
     * @Route("/todo/{id}", name="todo_show", requirements={"id" = "\d+"}, methods={"GET"})
     */
    public function todoShow($id) :Response
    {

        // la méthode find renvoie false si l'id ne correspond à aucune tâche
        $todo = TodoModel::find($id);

        if (false === $todo) 
        {
            // on pourra rediriger sur la liste et afficher le message d'erreur

            // pour l'instant on affiche une 404
            throw $this->createNotFoundException('La tâche que vous souhaitez afficher n\'existe pas');
        }

        return $this->render('todo/single.html.twig', [
            'todo' => $todo
        ]);
    }

    /**
     * Changement de statut
     *
     * @Route("/todo/{id}/{status}", name="todo_set_status", requirements={"id" = "\d+", "status" = "done|undone"}, methods={"GET"})
     */
    public function todoSetStatus($id, $status) :Response
    {
        // setStatus vérifie si la tache existe
        $jobDone = TodoModel::setStatus($id, $status);

        if (false === $jobDone) 
        {
            // on pourra rediriger sur la liste et afficher le message d'erreur
            $this->addFlash('danger', 'La tâche que vous souhaitez modifier n\'existe pas !');

            // pour l'instant on affiche une 404
            // throw $this->createNotFoundException('La tâche que vous souhaitez modifier n\'existe pas');
        }
        else 
        {
            $this->addFlash('success', 'Votre tâche a été modifiée !');
        }



        // cependant (on est dev, on est fainéant ;) ) 
        // on redirige vers la liste des taches
        return $this->redirectToRoute('todo_list');

    }

    /**
     * Ajout d'une tâche
     *
     * @Route("/todo/add", name="todo_add", methods={"POST"})
     *
     * La route est définie en POST parce qu'on veut ajouter une ressource sur le serveur
     */
    public function todoAdd(Request $maRequest) :Response
    {
        // récupérer le nom de la tache
        $taskName = $maRequest->request->get('task');


        // créer une tache portant ce nom
        TodoModel::add($taskName);

        $this->addFlash('success', 'Votre tâche a été ajoutée !');

        // on redirige vers la liste des taches
        return $this->redirectToRoute('todo_list');

    }

    /**
     * Suppression d'une tâche
     *
     * @Route("/todo/delete", name="todo_delete", methods={"POST"})
     *
     */
    public function todoDelete(Request $maRequest) :Response
    {
        // récupérer l'id de la tache
        $taskId = $maRequest->request->get('delete');

        // Supprimer la tache correspondant à cet id
        $taskDeleted = TodoModel::delete($taskId);

        if ($taskDeleted) 
        {
            $this->addFlash('success', 'La tâche a bien été supprimée !');
        }
        else 
        {
            $this->addFlash('danger', 'La tâche que vous souhaitez supprimer n\'existe pas !');
        }

        // on redirige vers la liste des taches
        return $this->redirectToRoute('todo_list');
    }

    /**
     * Réinitialisation des tâches
     *
     * @Route("/todo/reset", name="todo_reset", methods={"GET"})
     *
     */
    public function todoReset() :Response
    {
        // Réinitialiser la liste des tâches
        TodoModel::reset();

        $this->addFlash('success', 'La liste des tâches a bien été réinitialisée !');

        // on redirige vers la liste des taches
        return $this->redirectToRoute('todo_list');

    }
}
