<?php

return [
    'ilocations.countries' => [
        'index' => 'ilocations::countries.list resource',
        'create' => 'ilocations::countries.create resource',
        'edit' => 'ilocations::countries.edit resource',
        'destroy' => 'ilocations::countries.destroy resource',
    ],
    'ilocations.provinces' => [
        'index' => 'ilocations::provinces.list resource',
        'create' => 'ilocations::provinces.create resource',
        'edit' => 'ilocations::provinces.edit resource',
        'destroy' => 'ilocations::provinces.destroy resource',
    ],
    'ilocations.geozones' => [
        'index' => 'ilocations::geozones.list resource',
        'create' => 'ilocations::geozones.create resource',
        'edit' => 'ilocations::geozones.edit resource',
        'destroy' => 'ilocations::geozones.destroy resource',
    ],
    'ilocations.geozones_countries' => [
        'index' => 'ilocations::geozones_countries.list resource',
        'create' => 'ilocations::geozones_countries.create resource',
        'edit' => 'ilocations::geozones_countries.edit resource',
        'destroy' => 'ilocations::geozones_countries.destroy resource',
    ],
    'ilocations.geozonescountries' => [
        'index' => 'ilocations::geozonescountries.list resource',
        'create' => 'ilocations::geozonescountries.create resource',
        'edit' => 'ilocations::geozonescountries.edit resource',
        'destroy' => 'ilocations::geozonescountries.destroy resource',
    ]
// append


];
