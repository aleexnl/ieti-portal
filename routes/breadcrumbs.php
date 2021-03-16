<?php

// Dashboard

Breadcrumbs::for('dashboard', static function ($trail) {
    $trail->push('Panell de control', route('dashboard'));
});

// Dashboard > Terms

Breadcrumbs::for('terms', static function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Cursos', '/admin/dashboard/terms');
});

// Dashboard > students

Breadcrumbs::for('students', static function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Alumnes', '/admin/dashboard/students');
});

// Dashboard > Terms > [Term]

Breadcrumbs::for('term', function ($trail, $term) {
    $trail->parent('terms');
    $trail->push($term->name, '/dashboard/terms/delete/{term_id}');
});

