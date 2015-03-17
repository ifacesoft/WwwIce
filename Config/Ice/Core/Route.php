<?php
return [
    'wi_main' => [
        'route' => '/',
        'weight' => 10000,
        'request' => [
            'GET' => [
                'Wi:Layout_Main' => [
                    'actions' => [
                        ['title' => 'Ice:Title', ['title' => 'Ice - Open Source PHP Framework ']],
                        'main' => 'Wi:Index'
                    ]
                ]
            ]
        ]
    ],
    'wi_handbook' => [
        'route' => '/handbook{$article}',
        'params' => [
            'article' => ['/(.*)', true]
        ],
        'request' => [
            'GET' => [
                'Wi:Layout_Main' => [
                    'actions' => [
                        ['title' => 'Ice:Title', ['title' => 'Ice - Руководство (Handbook)']],
                        'main' => 'Wi:Handbook'
                    ]
                ]
            ]
        ]
    ],
    'wi_cookbook' => [
        'route' => '/cookbook{$article}',
        'params' => [
            'article' => ['/(.*)', true]
        ],
        'request' => [
            'GET' => [
                'Wi:Layout_Main' => [
                    'actions' => [
                        ['title' => 'Ice:Title', ['title' => 'Ice - Полезные статьи (Cookbook)']],
                        'main' => 'Wi:Cookbook'
                    ]
                ]
            ]
        ]
    ],
    'wi_faq' => [
        'route' => '/faq',
        'request' => [
            'GET' => [
                'Wi:Layout_Main' => [
                    'actions' => [
                        ['title' => 'Ice:Title', ['title' => 'F.A.Q']],
                        'main' => 'Wi:Faq'
                    ]
                ]
            ]
        ]
    ]
];