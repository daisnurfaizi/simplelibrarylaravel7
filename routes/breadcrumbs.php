<?php
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Beranda', route('admin.dasboard'));
});
