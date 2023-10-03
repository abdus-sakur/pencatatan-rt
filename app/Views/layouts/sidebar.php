<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Dashboard</li>

        <li class="sidebar-item <?= activeMenu('dashboard'); ?>">
            <a href="<?= base_url("dashboard"); ?>" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item <?= activeMenu('iuran-kas'); ?>">
            <a href="<?= base_url("iuran-kas"); ?>" class='sidebar-link'>
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Iuran Kas</span>
            </a>
        </li>
        <li class="sidebar-item <?= activeMenu('iuran-event'); ?>">
            <a href="<?= base_url("iuran-event"); ?>" class='sidebar-link'>
                <i class="bi bi-file-earmark-binary-fill"></i>
                <span>Iuran Event</span>
            </a>
        </li>

        <li class="sidebar-title">Setting</li>
        <li class="sidebar-item">
            <a href="<?= base_url("user-setting"); ?>" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>User</span>
            </a>
        </li>
    </ul>
</div>