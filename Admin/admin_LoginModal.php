<div class="modal fade" id="AdminLoginModal" tabindex="-1" aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AdminLoginModalLabel">eSchool Administration Portal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="adminLoginForm">
                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="admin_LoginEmail"
                            class="pl-2 font-weight-bold">Email</label>
                        <input type="email" name="admin_LoginEmail" class="form-control" id="admin_LoginEmail"
                            aria-describedby="emailHelp" placeholder="EMAIL" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="admin_LoginPassword"
                            class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" id="admin_LoginPassword" name="admin_LoginPassword"
                            placeholder="PASSWORD" autocomplete="off">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <small id="AdminLoginStatusMessage"></small>
                <button type="button" class="btn btn-success" data-dismiss="modal" id="admin_LoginBtn"
                    onclick="adminLogin()">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="clearAdminForm()">Close</button>
            </div>
        </div>
    </div>
</div>