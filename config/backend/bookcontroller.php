<?php

//Variabelen vullen

$action = $_POST['action'];

if($action == "create")
{
    $title = $_POST['title'];
    if(empty($title))
    {
        $errors[] = "Vul Titel in";
    }
    $author = $_POST['author'];
    if(empty($author))
    {
        $errors[] = "Vul auteur in";
    }
    $description = $_POST['description'];
    if(empty($description))
    {
        $errors[] = "Vul een description in";
    }
    $price = $_POST['price'];
    if(empty($price))
    {
        $errors[] = "Vul afdeling in";
    }
    $page_amount = $_POST['page_amount'];
    if(empty($page_amount))
    {
        $errors[] = "Vul aantal pagina's in";
    }


    //1. Verbinding
    require_once '../conn.php';

    //2. Query
    $query = "INSERT INTO taken (title, author, description, price, page_amount)
    VALUES(:title, :author, :description, :price, :page_amount)";

    //3. Prepare
    $statement = $conn->prepare($query);
    //4. Execute
    $statement->execute([
    ":title" => $_POST['title'],
    ":author" => $_POST['author'],
        ":description" => $_POST['description'],
    ":price" => $_POST['price'],
    ":page_amount" => $_POST['page_amount'],
        ]);

    header("Location:../tasks/index.php?msg-Boek is opgeslagen");
}

if($action == "update")
{
    $title = $_POST['title'];
    if(empty($title))
    {
        $errors[] = "Vul Titel in";
    }
    $author = $_POST['author'];
    if(empty($author))
    {
        $errors[] = "Vul auteur in";
    }
    $description = $_POST['description'];
    if(empty($description))
    {
        $errors[] = "Vul een description in";
    }
    $price = $_POST['price'];
    if(empty($price))
    {
        $errors[] = "Vul een prijs in";
    }
    $page_amount = $_POST['page_amount'];
    if(empty($page_amount))
    {
        $errors[] = "Vul aantal pagina's in";
    }
    $id = $_POST['id'];

    require_once '../conn.php';

    $query = "UPDATE books SET title = :title, author = :author, description= :description, price = :price, page_amount = :page_amount WHERE id = :id";

    $statement = $conn->prepare($query);

    $statement->execute([
        ":title" => $title,
        ":author" => $author,
        ":description" => $description,
        ":price" => $price,
        ":page_amount" => $page_amount,
        ":id" => $id
    ]);

    header("Location: ../../admin/index.php?msg=Boek opgeslagen");
}



if($action == "delete")
{
    $id = $_POST['id'];

    require_once '../conn.php';

    $query = "DELETE FROM `taken` WHERE id = :id";

    $statement = $conn->prepare($query);

    $statement->execute([
     ":id" => $id
    ]);

    header("Location: ../tasks/index.php?msg=Boek Verwijderd");
}

