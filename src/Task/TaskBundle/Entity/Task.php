<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 14-11-22
 * Time: 4:23 PM
 */

namespace Task\TaskBundle\Entity;


class Task {

    protected $name;
    protected $task;
    protected $description;
    protected $startDate;
    protected $dueDate;


    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getTask(){
        return $this->task;
    }
    public function setTask($task){
        $this->$task = $task;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getStartDate(){
    return $this->startDate;
    }
    public function setStartDate($startDate){
        $this->startDate = $startDate;
    }
    public function getDueDate(){
        return $this->dueDate;
    }
    public function setDueDate(\DateTime $dueDate = null){
        $this->dueDate = $dueDate;
    }
} 