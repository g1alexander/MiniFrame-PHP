<?php

require_once "./src/backend/models/demo.php";

class demoController
{

    public function index()
    {
        $demo = new Demo();
        $users = $demo->getDemo();
        require_once './src/frontend/pages/components/table/table.php';
    }

    public function edit()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $edit = true;
            $demo = new Demo();
            $demo->setId($id);
            $user = $demo->getDemoOne();
            require_once './src/frontend/pages/components/table/edit.php';
        }
    }

    public function save()
    {
        if (isset($_POST)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            if (isset($name) && isset($email)) {
                $user = new Demo();
                $user->setName($name);
                $user->setEmail($email);
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $user->setId($id);
                    $save_edit = $user->edit();
                } else {
                    $save = $user->save();
                }
                if ($save) {
                    $_SESSION['user'] = 'complete';
                } elseif ($save_edit) {
                    $_SESSION['user'] = 'edit';
                } else {
                    $_SESSION['user'] = 'failed';
                }
            } else {
                $_SESSION['user'] = 'failed';
            }
        } else {
            $_SESSION['user'] = 'failed';
        }
        header('Location:' . _url . 'demo/index');
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET["id"];
            $user = new Demo();
            $user->setId($id);
            $delete = $user->delete();
            if ($delete) {
                $_SESSION['user'] = 'delete';
            } else {
                $_SESSION['user'] = 'failed';
            }
        } else {
            $_SESSION['user'] = 'failed';
        }
        header('Location:' . _url . 'demo/index');
    }
}