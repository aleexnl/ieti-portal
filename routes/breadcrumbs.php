<?php

// Dashboard
Breadcrumbs::for('dashboard', static function ($trail) {
    $trail->push('Panell de control', route('admindashboard'));
});

// Dashboard > Terms
Breadcrumbs::for('terms', static function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Cursos', route('admincursos'));
});

// Dashboard > students
Breadcrumbs::for('students', static function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Alumnes', route('adminalumnes'));
});

// Dashboard > Terms > [Term]
Breadcrumbs::for('term', function ($trail, $term) {
    $trail->parent('terms');
    $trail->push($term->name, route('admincursos.show', ['curso' => $term->id]));
});

// Dashboard > Terms > [Term] > Careers
Breadcrumbs::for('careers', function ($trail, $term) {
    $trail->parent('terms');
    $trail->push($term->name);
    $trail->push('Cicles');
});

// Dashboard > Terms > [Term] > Careers > [Career]
Breadcrumbs::for('career', function ($trail, $term, $career) {
    $trail->parent('terms');
    $trail->push($term->name);
    $trail->push('Cicles', route('admincursos.cicles.index', ['curso' => $term->id]));
    $trail->push($career->name);
});
