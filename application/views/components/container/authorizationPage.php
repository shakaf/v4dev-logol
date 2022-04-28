<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
{_header_}
<body class="inter-family pace-done" data-sidebar-size="sm">
    <div id="layout-wrapper">
        <nav class="nav-wrapper close">
            <div class="logo-name">
                <div class="logo-image">
                    <img src="<?= base_url('assets/images/logo-small.png'); ?>">
                </div>
            </div>
            <div class="logo-long">
                <img src="<?= base_url('assets/images/Logo-long.png'); ?>">
            </div>
            <div class="menu-items">
                {_navmenu_}
                <ul class="logout-mode">
                    <li><a href="<?= site_url('logout'); ?>">
                        <i class="icon-v4-logout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
                </ul>
            </div>
        </nav>
        <section class="bes-main-content">
            <div class="top">
                <i id="<?= rand(); ?>" class="icon-v4-hamburger sidebar-button sidebar-toggle"></i>
            </div>
            <div class="dash-content">
                {_content_}
            </div>
        </section>
    </div>
    <div class="rightbar-overlay"></div>
    <script src="<?= base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/libs/pace-js/pace.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/app.js"></script>
    <script src="<?= base_url(); ?>assets/js/customs.js?v=<?= date("Ymdhis"); ?>"></script>
    <script src="<?= base_url(); ?>assets/js/LogolModal.min.js?v=<?= date("Ymdhis"); ?>"></script>
    <script src="<?= base_url(); ?>assets/js/LogolConfirm.min.js?v=<?= date("Ymdhis"); ?>"></script>
    <script src="<?= base_url(); ?>assets/js/LogolToast.min.js?v=<?= date("Ymdhis"); ?>"></script>
</body>
</html>