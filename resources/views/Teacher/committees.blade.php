<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
    	<title>Committees|Dashboard</title>
      <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="offcanvas.css" rel="stylesheet">
      <style>
        form{
         padding-left: 80px;
          padding-right: 500px; 
        }
      </style>
    </head>
    <body class="bg-light">
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
              <a class="navbar-brand mr-auto mr-lg-0" href="#">Committees</a>
            </nav> 
            <main role="main" class="container">
                  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                    <div class="lh-100">
                      <h6 class="mb-0 text-white lh-100"><strong><a class="navbar-brand mr-auto mr-lg-0" style="color: white; font-weight: bold;" href="/">Dashboard</a></strong><strong style="padding-left: 900px;">Sr. 01</strong></h6>
                    </div>
                  </div>
                <form>
                    <div class="col-xs-4">
                      <div class="mb-3 row">
                       <label for="inputcom" class="col-sm-2 col-form-label">Committees</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputcom" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-4">
                      <div class="mb-3 row">
                        <label for="inputcon" class="col-sm-2 col-form-label">Convenor</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputcon" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-4">
                      <div class="mb-3 row">
                        <label for="inputlevel" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputlevel" readonly>
                        </div>
                      </div>
                    </div>
                </form>
            </main>
     </body>
</html>