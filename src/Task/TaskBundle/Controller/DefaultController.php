<?php

namespace Task\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Task\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function newAction(Request $request){

        $task = new Task();
        $task->setTask('Create website for ACD');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task','text')
            ->add('dueDate','date')
            ->add('save', 'submit', array('label' => 'Create Task'))
            ->getForm();

        $front = $task->getTask();//Just for test

        return $this->render('TaskTaskBundle:Default:new.html.twig', array('form' => $form->createView(),
            'front' => $front));

    }
    public function homeAction(Request $request){


        return $this->render('TaskTaskBundle:Default:index.html.twig');

    }

    public function question1Action(Request $request){

        /* Use a while loop to draw the following pattern on the page Question1.php*/
        $result2 = "";
        $stars2 = "**********";
        $space2 = "";
        while(strlen($stars2)>0){
            //echo $space . $stars . "<br />";
            $result2 .= $space2 . $stars2 . "\n";
            $stars2 = substr($stars2,1);
            $space2 = $space2 . "&nbsp;";

        }
        $fixedString2 = preg_replace('/&nbsp;/', '_', $result2);

        /*Use two do-while loop to draw the following patter on the page Question1.php*/
        /*
        $result31 = "";
        $result32 = "";
        $stars3 = "*";
        $space3 = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        do{
            //echo $space3 . $stars3 . $space3 . "<br />";
            $result31 .= $space3 . $stars3 . $space3 . "\n";
            $stars3 = $stars3 . "**";
            $space3 = substr($space3,6);
        }
        while( strlen($stars3)<12 );
        $stars3 = "***********";
        $space3 = "";
        do{
            //echo $space3 . $stars3 . $space3 . "<br />";
            $result32 .= $space3 . $stars3 . $space3 . "\n";
            $stars3 = substr($stars3,2);
            $space3 = $space3 . "&nbsp;";
        }
        while( strlen($space)<31 );

        $fixedString3 = $result31 + $result32;
        $fixedString31 = preg_replace('/&nbsp;/','_', $fixedString3);
        */
        return $this->render('TaskTaskBundle:Default:question1.html.twig', array('stars2' => $fixedString2));
    }

    public function question2Action(Request $request){
        return $this->render('TaskTaskBundle:Default:question2.html.twig');
    }
    public function question3Action(Request $request){
        return $this->render('TaskTaskBundle:Default:question3.html.twig');
    }

}
