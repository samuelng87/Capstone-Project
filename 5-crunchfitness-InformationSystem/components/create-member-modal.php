<?php include('../general/server.php') ?>
<!-- Modal create member-->
<div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Members</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="../admin/admin-member.php">
                  <div class="mb-3">
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" placeholder="Username" name="username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                      </div>
                    </div>                  
                  </div>
                  <div class="mb-3">
                  <div class="input-group">
                  <span class="input-group-text">Name</span>
                  <input type="text" aria-label="First name" id="firstname" class="form-control" name="firstname" placeholder="First" required>
                  <input type="text" aria-label="Last name" id="lastname" class="form-control" name="lastname" placeholder="Last" required>
                  </div>
                  </div>                           
                  <div class="mb-3">
                    <input type="email" class="form-control has-validation" id="exampleInputPassword2" placeholder="Email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <input type="number" class="form-control has-validation" id="exampleFormControlInput2" placeholder="Mobile Number" name="mobile" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control has-validation" id="exampleInputPassword1" placeholder="Password" name="password_1" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control has-validation" id="exampleInputPassword2" placeholder="Confirm password" name="password_2" required>
                  </div> 
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                      </div>
                  </div>
                  <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="membership_id" required>
                        <option selected disabled> Select Membership Type</option>
                        <option value="500">Base Membership / $7.95 / per Week</option>
                        <option value="501">Peak Membership / $ 15.95 / per Week</option>
                        <option value="502">Summit Membership / $19.95 / per Week</option>
                      </select>
                  </div>
                  <hr class="my-4">


                  <button type="submit" class="btn btn-dark"  name="admin_member_register">Register</button>
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>

                  <div class="mb-3 text-center">
                      </button>
                    </div>
            </form>
      </div>
    </div>
  </div>
</div>