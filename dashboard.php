<?php
include "db.php";

$result=$conn->query("select * from products");


?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body style="background-color:gray">
        <header class="mt-5">
           
                <div
                    class="container " "
                >
                   <nav
                    class="navbar navbar-expand-sm navbar-light bg-light"
                   >
                    <div class="container">
                        <a class="navbar-brand" href="#">Products</a>
                        <button
                            class="navbar-toggler d-lg-none"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#collapsibleNavId"
                            aria-controls="collapsibleNavId"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="addproduct.php" aria-current="page"
                                        >➕Add Product
                                        <span class="visually-hidden">(current)</span></a
                                    >
                                </li>
                                
                               
                               
                            </ul>
                            <button
                                    class="btn btn-outline-success my-2 my-sm-0 mx-2"
                                    type="submit"
                                >
                                    Download PDF
                                </button>
                            <form class="d-flex my-2 my-lg-0" action="logout.php">
                               
                                <button
                                    class="btn btn-outline-success my-2 my-sm-0"
                                    type="submit"
                                >
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                   </nav>
                   
                </div>
                


        </header>
        <main class="mt-3">

        <div
            class="container"
        >
           <div
            class="table-responsive"
           >
            <table
                class="table table-primary border rounded shadow"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category </th>
                        <th scope="col">Price </th>
                        <th scope="col">Quantity </th>
                        <th scope="col">Description </th>
                        <th scope="col">Action </th>
                    
                    </tr>
                </thead>
                <tbody>

                <?php while($row=$result->fetch_assoc()){?>
                    <tr class="">
                        <td scope="row"><?= $row["id"]?></td>
                        <td scope="row"><?= $row["pname"]?></td>
                        <td scope="row"><?= $row["category"]?></td>
                        <td scope="row"><?= $row["price"]?></td>
                        <td scope="row"><?= $row["quantity"]?></td>
                        <td scope="row"><?= $row["description"]?></td>
                        <td scope="row"><a
                            name=""
                            id=""
                            class="btn btn-success"
                            href="update.php"
                            role="button"
                            >Update</a
                        >
                        <form action="delete.php" method="get"></form>
                           <button
                            type="submit"
                            class="btn btn-primary"
                           >
                            Delete
                           </button>
                           
                            

                        </td>
                       
                    </tr>

                   <?php } ?>
                </tbody>
            </table>
           </div>
           
        </div>
        









        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
