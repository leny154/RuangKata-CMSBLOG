            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="bi bi-menu-button-wide-fill"></i> <span> Dashboard </span> </a>
                            </li>

                            <?php if ($_SESSION['utype'] == '1') : ?>
                                <li class="has_sub">
                                    <a href="manage-subadmins.php" class="waves-effect"><i class="bi bi-person-lines-fill"></i> <span> Penulis </span></a>
                                </li>
                            <?php endif; ?>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="bi bi-journal-richtext"></i> <span> Artikel </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="manage-posts.php">Kelola Artikel</a></li>
                                    <li><a href="add-post.php">Tambah Artikel</a></li>
                                    <li><a href="trash-posts.php">Sampah</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="manage-categories.php" class="waves-effect"><i class="bi bi-bookmark-heart-fill"></i> <span> Kategori </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="manage-subcategories.php" class="waves-effect"><i class="bi bi-bookmark-heart"></i> <span> Sub Kategori </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="bi bi-house"></i> <span> About Ruang Kata </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="contactus.php">Contact us</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="bi bi-chat-left-quote-fill"></i> <span> Comments </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="unapprove-comment.php">Waiting for Approval </a></li>
                                    <li><a href="manage-comments.php">Approved Comments</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="logout.php" class="waves-effect"><i class="bi bi-box-arrow-left"></i> <span> Logout </span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>


                </div>
                <!-- Sidebar -left -->

            </div>