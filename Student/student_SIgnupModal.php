<!-- Modal -->
<div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SignUpModalLabel">Let's Begin your eSchool Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="student_RegistrationForm">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="student_Name" class="pl-2 font-weight-bold">Name</label> <small id="statusMessage1"></small>
                        <input type="text" class="form-control" name="student_Name" id="student_Name"
                            placeholder="NAME AS PER PASSWORD OR NID" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="student_Email"
                            class="pl-2 font-weight-bold">Email</label> <small id="statusMessage2"></small>
                        <input type="email" name="student_Email" class="form-control" id="student_Email"
                            aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                        <small id="emailHelp" class="form-text text-muted">Please enter your valied email.</small>
                    </div>
                    <div class="form-group">
                        <i class="fa-solid fa-phone"></i><label for="student_Phone"
                            class="pl-2 font-weight-bold">Phone</label> <small id="statusMessage3"></small>
                        <input type="text" class="form-control" name="student_Phone" id="student_Phone"
                            placeholder="PHONE" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="student_Password"
                            class="pl-2 font-weight-bold">Password</label> <small id="statusMessage4"></small>
                        <input type="password" class="form-control" id="student_Password" name="student_Password"
                            placeholder="PASSWORD" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="student_RePassword" class="pl-2 font-weight-bold">Repeat
                            Password</label> <small id="statusMessage5"></small>
                        <input type="password" class="form-control" id="student_RePassword" name="student_RePassword"
                            placeholder="Re-Type your password" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="successMessage"></span>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="student_SignUpBtn" onclick="addStudent()">Sign
                    UP</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="clearFormData()">Close</button>
            </div>

        </div>
    </div>
</div>