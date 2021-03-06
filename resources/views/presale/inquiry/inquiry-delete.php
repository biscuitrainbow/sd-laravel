<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
    <body style="background-color: #fcfbfc">
    
    <!-- Nav Bar -->
    <nav>
      <div class="container">
        <div class="nav-wrapper">
          <a href="dashboard-overall.php" class="breadcrumb">Sale and Distribution</a>
          <a href="#!" class="breadcrumb">Presale Process</a>
          <a href="#!" class="breadcrumb">Inquiry</a>
          <a href="#!" class="breadcrumb">Delete Inquiry</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="collapsible.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Content -->
    <div class="container">
      <div class="row">


        <!-- Side Bar -->
        <?php include('sidebar.php'); ?>


        <!-- Content -->
        <div class="col s9 m9 l9 xl9" style="margin-top: 15px;">
          <div class="card">
            <div class="card-content">
              <h4 style="margin-bottom: 50px">Delete Inquiry</h4>
              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Search by product name or id</label>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="card" style="margin-bottom:75px">
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <h4 style="margin-bottom: 50px">All Inquiry</h4>

                  <!-- Table -->
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Postal Code/City</th>
                        <th>Country</th>
                        <th>Region</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a href="" class="waves-effect deep-orange btn">Delete</a></td>
                      </tr>
                    </tbody>
                  </table>

                  <!-- Pagination -->
                  <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>


      <script>
        $(document).ready(function() {
        $('select').material_select();
        });
      </script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>