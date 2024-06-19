<?php

return [
    'universe_weights' => [
        'star_weight'                    => 12,
        'nebula_weight'                  => 5,
        'black_hole_weight'              => 2,
        'super_massive_black_hole_weight'=> 1,
        'comet_weight'                   => 3,

        // star_weight + nebulae_weight + black_hole_weight + super_massive_black_hole_weight
        'universe_weight_total'         => 23,
    ],
    [
        'system_weights' => [
            'asteroid_weight'           => 8,
            'asteroid_belt_weight'      => 9,
            'comet_weight'              => 5,
            'dwarf_planet_weight'       => 6,
            'moon_weight'               => 8,
            'planet_weight'             => 5,

            // asteroid_weight + asteroid_belt_weight + comet_weight + dwarf_planet_weight +
            // moon_weight + planet_weight
            'system_weight_total'       => 41,
        ],
    ],
    [
        'known_weight'  => 9,
        'unknown_weight' => 2,
        'known_vs_unknown_weight_total' => 10,
    ]
];