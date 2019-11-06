
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <title>Home</title>
  <!--<link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto:300,400,500&display=swap" rel="stylesheet">-->
  <!--<link rel="stylesheet" href="./bootstrap/bootstrap.css">-->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  <link rel="stylesheet" href="./css/styles.css">
  <script src="https://kit.fontawesome.com/e5d243858b.js" crossorigin="anonymous"></script>
</head>
<body class="background-gradient" cz-shortcut-listen="true">

  <?php include 'header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">My Content</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

          <?php


          $stmt = $Conn->query('SELECT * FROM test');
          $result = $stmt->fetchAll();

          /*$url = 'db.json'; // path to your JSON file
          $data = file_get_contents($url); // put the contents of the file into a variable
          $characters = json_decode($data); // decode the JSON feed*/

          echo '<table class="table table-striped"> <thead>
            <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Created</th>
            </tr>
          </thead>
            <tbody>';

          foreach($result as $row){
            echo '<tr>';
              echo '<td>'.$row["Title"].'</td>';
              echo '<td>'.$row["Description"].'</td>';
              echo '<td>'.$row["Created"].'</td>';
            echo '</tr>';
          }
          echo '</tbody></table>';


                ?>

          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent activity</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Title</th>
                <th>Created</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
              <tr>
                <td>Insertion Sort</td>
                <td>01/01/2019 @ 19:00</td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="my-5 pt-5 text-muted text-center text-small" style="position: relative; bottom: 0; width: 100%">
  <div>
  <p class="mb-1">© 2019 AJF Plc</p>
  <ul class="list-inline">
    <li class="list-inline-item"><a href="#">Privacy</a></li>
    <li class="list-inline-item"><a href="#">Terms</a></li>
    <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicModalLabel"
     aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <div class="container">
          <div class="text-center">
            <h2>Topic</h2>
            <p class="lead">Create a new topic</p>
          </div>

          <div class="row">
            <div class="col-md-12 order-md-1">
              <form class="needs-validation" novalidate="">

                <div class="mb-3">
                  <label for="title">Title </label>
                  <input type="text" class="form-control" id="title">
                  <div class="invalid-feedback">
                    Please enter a valid title.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="description">Description </label>
                  <input type="text" class="form-control" id="description">
                  <div class="invalid-feedback">
                    Please enter a valid title.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="category">Categorise </label>
                  <input type="text" class="form-control" id="category">
                  <!--todo change to dropdown-->
                  <div class="invalid-feedback">
                    Please enter a valid category.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="content">Content </label>
                  <textarea rows="15" type="text" class="form-control" id="content"></textarea>
                  <div class="invalid-feedback">
                    Please enter valid content.
                  </div>
                </div>

              </form>
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<script src="./bootstrap/jquery.js"></script>
<script src="./bootstrap/popper.js"></script>
<script src="./bootstrap/bootstrap.bundle.js"></script>
<!--<script src="form-validation.js"></script>-->
<script type="text/javascript">

$( document ).ready(function() {

  var jsonx;

  fetch('http://localhost:63342/MMI_Asignment/db.json?_ijt=i7o79rd3ol37h7fu12f4nhn6kb')
    .then(response => response.json())
    .then(data => jsonx = data)
    .then(() => console.log(jsonx))

});



</script>

</body>
</html>
