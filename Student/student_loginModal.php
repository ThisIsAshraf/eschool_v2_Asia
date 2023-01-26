<!-- Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LoginModalLabel">Welcome to eSchool Student Portal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="studentLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="student_LoginEmail"
                            class="pl-2 font-weight-bold">Username</label>
                        <input type="email" name="student_LoginEmail" class="form-control" id="student_LoginEmail"
                            aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="student_LoginPassword"
                            class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="student_LoginPassword"
                            name="student_LoginPassword" placeholder="PASSWORD" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small id="LoginStatusMessage"></small>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="student_LoginBtn" onclick="StudentLoginCheck()">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="student_LoginCloseBtn" onclick="clearLogin()">Close</button>
            </div>
        </div>
    </div>
</div>