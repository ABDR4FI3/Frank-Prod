<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addPost':
            addPost($_POST);
            break;
        case 'editPost':
            editPost($_POST);
            break;
        case 'deletePost':
            deletePost($_POST);
            break;
        case "enablePost":
            enablePost($_POST);
            break;
        case 'deletePosts':
            deletePosts($_POST);
            break;
        case 'enablePosts':
            enablePosts($_POST);
            break;
    }
}

function addPost($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildBlog($data)->add() == 1) {
            seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editPost($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildBlog($data, $data['id'])->edit() == 1) {
            seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deletePost($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $blog = blog::find($id, $_SESSION["langue"]);
        if ($blog->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deletePosts($data)
{
    $indices = array("ids");
    if (fieldCheck($data, $indices)) {
        $photos = blog::findPhotosName($data['ids']);
        if (blog::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/blog/" . $photo)) {
                        @unlink("../../../../images/blog/" . $photo);
                    }
                }

            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enablePost($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $blog = new blog();
        $blog->setId($data['id']);
        $blog->setActive($data['state'] == "oui" ? 0 : 1);
        if ($blog->enable() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enablePosts($data)
{
    $indices = array("ids", "active");
    if (fieldCheck($data, $indices)) {
        $res = blog::enableMultiple($data);
        if ($res == 1)
            echo '1';
        else
            echo '2';
    } else
        echo '0';
}


function buildBlog($data, $id = null)
{
    global $db;
    $blog = new blog();

    $photo = array();
    $photo_banniere = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/blog/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if (isset($_FILES['photo_banniere']) && $_FILES['photo_banniere']['name'][0] != '') {
        $photo_banniere = uploadFiles('photo_banniere', '../../../../images/blog/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $blog->setId($id);
        if (isset($photo[0])) {
            $blog->setPhoto($photo[0]);
            if (file_exists("../../../../images/blog/" . blog::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/blog/" . blog::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $blog->setPhoto(blog::find($id, $_SESSION['langue'])->getPhoto());
        }

        if (isset($photo_banniere[0])) {
            $blog->getPhotoBanniere($photo_banniere[0]);
            if (file_exists("../../../../images/blog/" . blog::find($id, $_SESSION['langue'])->getPhotoBanniere())) {
                @unlink("../../../../images/blog/" . blog::find($id, $_SESSION['langue'])->getPhotoBanniere());
            }
        } else {
            $blog->setPhotoBanniere(blog::find($id, $_SESSION['langue'])->getPhotoBanniere());
        }
    } else {
        if (isset($photo[0])) {
            $blog->setPhoto($photo[0]);
        } else {
            $blog->setPhoto(null);
        }

        if (isset($photo_banniere[0])) {
            $blog->setPhotoBanniere($photo_banniere[0]);
        } else {
            $blog->setPhotoBanniere(null);
        }
    }

    $blog->setCategorie(categorie_blog::find($data['id_categorie'],$_SESSION['langue']));
    $blog->setActive(isset($data['active']) ? 1 : 0);
    $blog->setTitre($data['titre']);
    $blog->setSousTitre($data['sous_titre']);
    $blog->setExtrait($data['extrait']);
    $blog->setTexte($data['texte']);
    $blog->setSeoTitre($data['seo_titre']);
    $blog->setSeoDescription($data['seo_description']);
    $blog->setDateAdd(date("Y-m-d"));
    $blog->setLastEdit(date("Y-m-d"));
    $blog->setLangue($_SESSION['langue']);

    return $blog;
}
