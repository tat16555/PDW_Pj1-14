<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <!-- นำเข้า navigation logic -->
        <a class="navbar-brand" href="../../index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../content/users/index.php">Data</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="../../content/session/index.php">session</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="../../content/cookie/index.php">cookie</a>
                </li>             
                <?php
                    // ตรวจสอบว่ามี session user_login อยู่หรือไม่
                    if (isset($_SESSION['user_login'])) {
                        // ถ้ามี session user_login แสดงชื่อผู้ใช้แทนที่ปุ่ม Register
                        echo '<li class="nav-item">
                                <a class="nav-link" href="../session/users.php">' . htmlspecialchars($row['u_name']) . '</a>
                            </li>';
                        
                        // แสดงปุ่ม Log out
                        echo '<li class="nav-item">
                                <a class="nav-link" href="../../container/logout/logout.php">Log out</a>
                            </li>';
                    } else {
                        // ถ้าไม่มี session user_login แสดงปุ่ม Register
                        echo '<li class="nav-item">
                                <a class="nav-link" href="#about">Register</a>
                            </li>';
                        
                        // แสดงปุ่ม Log in
                        echo '<li class="nav-item">
                                <a class="nav-link" href="../content/login_fm/login_fm.php">
                                    Log in
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                    </svg>
                                </a>
                            </li>';
                    }
                    ?>

            </ul>
        </div>
    </div>
</nav>




