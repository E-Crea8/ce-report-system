<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="./../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo getUserName($id_session); ?>
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU LINKS</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#user">
                        <!--<i class="fas fa-layer-group"></i>-->
                        <i class="fas fa-users"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="./create-user">
                                    <span class="sub-item">Create Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="./manage-users">
                                    <span class="sub-item">Manage Users</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#messages">
                        <i class="fas fa-envelope"></i>
                        <p>Messages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="messages">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="./create-message">
                                    <span class="sub-item">Create Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="./manage-message">
                                    <span class="sub-item">Manage</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#publishing">
                        <i class="fas fa-table"></i>
                        <p>Reports</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="publishing">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="./#">
                                    <span class="sub-item">All Reports</span>
                                </a>
                            </li>
                            <li>
                                <a href="./#">
                                    <span class="sub-item">Manage</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#history">
                        <i class="fas fa-credit-card"></i>
                        <p>History</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="history">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="./#">
                                    <span class="sub-item">App History</span>
                                </a>
                            </li>
                            <li>
                                <a href="./#">
                                    <span class="sub-item">Manage History</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a data-toggle="collapse" href="#random">
                        <i class="far fa-chart-bar"></i>
                        <p>Random User</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="random">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="./random-action">
                                    <span class="sub-item">Perform Random</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a href="#" id="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

<!--Logout Sweet Alert -->
<script type="text/javascript">
$(document).ready(function() {
    $("#logout").click(function() {

        swal({
                title: 'Logout',
                text: 'Are you sure you want to logout of the application?',
                icon: 'warning',
                buttons: true,
                dangerMode: true
            })
            .then((willOUT) => {
                if (willOUT) {
                    window.location.href = 'logout.php', {
                        icon: 'success',
                    }
                }
            });

    });
});
</script>