<!-- APP HEADER -->
<?php include 'temp/header.php'; ?>
<!-- APP NAVBAR -->
<?php include 'temp/navbar.php'; ?>
<!-- APP SIDEBAR-->
<?php include 'temp/sidebar.php'; ?>
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
    <form >
          <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-body">
                         <h3>Employees</h3><br>
                        <div class="flexbox mb-4">
                        <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Full Name:</label>
                                 <input type="text" name="name" class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Address:</label>
                                 <input type="text" name="address"  class="form-control">
                             </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Gender:</label>
                                 <select class="form-control" name="gender">
                                     <option value="">Select Gender</option>
                                     <option value="male">Male</option>
                                     <option value="female">Female</option>
                                 </select>
                             </div>
                        </div>
                          <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Phone Number:</label>
                                 <input type="text" name="phone" class="form-control">
                             </div>
                        </div>
                          <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Employee Department:</label>
                                 <select class="form-control" name="gender">
                                     <option value="">---Select Employee Department---</option>
                                     <option value="account">Account</option>
                                     <option value="bank">Banking</option>
                                     <option value="it">It</option>
                                     <option value="pro">Procurement</option>
                                 </select>
                             </div>
                        </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Basic Salary:</label>
                                <input type="text" name="salary" class="form-control">
                             </div>
                        </div>
                        </div> 
                        <div style="float:right;">
                            <button class="btn btn-success" name="">Save</button> 
                        </div>
                        </div> 

                        </div>
                  
                    </div>
                </div>
            </div>

            <div>
            </div>
        </div>
    </form>
          <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="flexbox mb-4">

                           <table class="table table-striped table-border">
                               <tr>
                                   <thead style="background-color:black;color:#ffffff; ">
                                       <td>#</td>
                                       <td>Full Name</td>
                                       <td>Address</td>
                                       <td>Gender</td>
                                       <td>Phone Number</td>
                                       <td>Employee Department</td>
                                       <td>Action</td>
                                   </thead>
                               </tr>
                               <tbody>
                                   <tr>
                                        <td>1</td>
                                        <td>Tawakal Shams</td>
                                        <td>Tomondo</td>
                                        <td>Male</td>
                                        <td>0674303210</td>
                                        <td>It</td>
                                         <td>Edit | Delete</td>
                                   </tr>
                                     <tr>
                                        <td>2</td>
                                        <td>Mpembainc</td>
                                        <td>Kojan</td>
                                        <td>Male</td>
                                        <td>0998776</td>
                                        <td>It</td>
                                        <td>Edit | Delete</td>
                                   </tr>
                                      <tr>
                                        <td>3</td>
                                        <td>Yussuf Shams</td>
                                        <td>Chwaka</td>
                                        <td>Male</td>
                                        <td>099338776</td>
                                        <td>Banking</td>
                                        <td>Edit | Delete</td>
                                   </tr>
                               </tbody>
                           </table>
                        </div>
                        <!-- form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END PAGE CONTENT-->
<!-- APP FOOTER -->
<?php include 'temp/modals.php'; ?>
<?php include 'temp/footer.php' ?>