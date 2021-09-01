<!DOCTYPE html>
<html>
   <head>
    	<meta charset="utf-8">
    	<title>Report|Dashboard</title>
      <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="offcanvas.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
      <style>
        form
        {
        padding-left: 20px;
        padding-right: 400px; 
        } 

      </style>
    </head>
      <body>
          <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand mr-auto mr-lg-0" href="#">Daily Report</a>
          </nav> 
          <main role="main" class="container">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                  <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100"><strong><a class="navbar-brand mr-auto mr-lg-0" style="color: white; font-weight: bold;" href="/">Dashboard</a> </strong> <strong style="padding-left: 1000px;">Daily Report No. 01</strong></h6>
                  </div>
                </div>
                <form>
                      <div class="col-xs-4">
                        <div class="mb-3 row">
                          <label for="inputDayDate" class="col-sm-2 col-form-label">Date</label>
                          <div style="padding-right: 400px;" class="col-sm-10">
                            <input type="date" class="form-control" id="inputDayDate" placeholder="Day And Date">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="mb-3 row">
                           <label for="inputLecprac" class="col-sm-2 col-form-label">Choose</label>
                           <div style="padding-right: 400px;" class="col-sm-10">
                              <select class="form-select" aria-label="Default select example"><br>
                                <option selected>LECTURE/PRATICAL</option>
                                <option value="1">LECTURE</option>
                                <option value="2">PRACTICAL</option>
                              </select>
                            </div>
                          </div>
                      </div>  
                      <div class="col-xs-4">
                        <div class="mb-3 row">
                          <label for="inputLecprac" class="col-sm-2 col-form-label">CLASS</label>
                          <div style="padding-right: 400px;" class="col-sm-10">
                             <select class="form-select" aria-label="Default select example"><br>
                                <option selected>CLASS</option>
                                <option value="1">FY</option>
                                <option value="2">SY</option>
                                <option value="2">TY</option>
                                <option value="2">MSC-PART-1</option>
                                <option value="2">MSC-PART-2</option>
                                <option value="2">MCOM</option>
                             </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-4">
                            <div  class="mb-3 row">
                              <label for="inputSubPaper" class="col-sm-2 col-form-label">SUBJECT/PAPER</label>
                              <div style="padding-right: 400px;" class="col-sm-10">
                                <input type="text" class="form-control" id="inputSubPaper">
                              </div>
                            </div>
                      </div>
                      <div class="col-xs-4">
                          <div class="mb-3 row">
                            <label for="inputTOPIC" class="col-sm-2 col-form-label">TOPIC</label>
                            <div style="padding-right: 400px;" class="col-sm-10">
                              <input type="text" class="form-control" id="inputTOPIC">
                            </div>
                          </div>
                       </div>
                       <div class="col-xs-4">
                         <div class="mb-3 row">
                            <label for="inputSTUDPRES" class="col-sm-2 col-form-label">PRESENT</label>
                            <div style="padding-right: 400px;"  class="col-sm-10">
                              <input type="integer" class="form-control" id="inputSTUDPRES">
                            </div>
                          </div>
                        </div>
                         <a class="btn btnbtn btn-success" href="#t" style="color: white; font-weight: bold;">Update &#8613;</a>
                       <!-- JavaScript Bundle with Popper -->
                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
                </form>
          </main>
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
          <script src="offcanvas.js"></script>
   </body>
</html>