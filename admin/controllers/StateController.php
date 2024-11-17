<?php 
class StateController{
    public $stateModel;
    public function __construct(){
        $this->stateModel= new State();
    }
    public function list(){
        $states = $this->stateModel->show();
        require './views/States/list.php';
    }
    public function delete(){
        $id = $_GET['id'];
        $this->stateModel->delete($id);
        require './views/States/list.php';
    }
    public function create(){
        require './views/States/create.php';

    }
    public function postCreate(){
        $name = $_POST['name'];
        $this->stateModel->add($name);
        header("Location: ?act=list-state");
    }
    public function update(){
        $id = $_GET['id'];
        $state = $this->stateModel->find($id);
        require './views/States/update.php';
        
    }
    public function postUpdate(){
        $id= $_GET['id'];
        $name = $_POST['name'];
        $this->stateModel->edit($id,$name);
        header("Location: ?act=list-state");

    }
}
?>