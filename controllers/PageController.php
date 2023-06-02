<?php
class PageController
{
    static public $info_pages = [
        'installationCamera' => [
            'Title' => 'Instalatation Camera Surveillance',
            'Images' => [
                './views/includes/assets/img/nosActiviter/installation-camera-surveillance-casablanca.webp',
                './views/includes/assets/img/nosActiviter/installation-camera-surveillance.webp'
            ]
        ],
        'depannageCamera' => [
            'Title' => 'Depannage Camera Surveillance',
            'Images' => [
                './views/includes/assets/img/nosActiviter/depannage-camera-surveillance-maroc.webp',
                './views/includes/assets/img/nosActiviter/depannage-camera-surveillance.webp' 
            ]
        ],
        'venteCamera' => [
            'Title' => 'Vente Camera Surveillance',
            'Images' => [
                './views/includes/assets/img/nosActiviter/vente-camera-surveillance-casablanca.webp',
                './views/includes/assets/img/nosActiviter/vente-camera-surveillance.webp'
            ]
        ],
        'controleAcces' => [
            'Title' => 'Instalation Control d\'acces',
            'Images' => [
                './views/includes/assets/img/nosActiviter/installation-controlle-acces-casablanca.webp',
                './views/includes/assets/img/nosActiviter/installation-controlle-acces.webp'
            ]
        ],
        'videoprotection' => [
            'Title' => 'Instalation Video Surveillence',
            'Images' => [
                './views/includes/assets/img/nosActiviter/videosurveillance-casablanca.webp',
                './views/includes/assets/img/nosActiviter/videosurveillance.webp'
            ]
        ],
        'detectionIntrusion' => [
            'Title' => 'Instalation de detecteur intrustion',
            'Images' => [
                './views/includes/assets/img/nosActiviter/Intrusion-Casa.webp',
                './views/includes/assets/img/nosActiviter/Intrustion.webp'
            ]
        ],
        'detectionIncendie' => [
            'Title' => 'Instalation de detecteur incendie',
            'Images' => [
                './views/includes/assets/img/nosActiviter/installation-detecteur-incendit-casablanca.webp',
                './views/includes/assets/img/nosActiviter/detecteur-incendit-casablanca.webp'
            ]
        ],
        'cybergardiennage' => [
            'Title' => 'cybergardiennage',
            'Images' => [
                './views/includes/assets/img/nosActiviter/cybergardiennage-casablanca.webp',
                './views/includes/assets/img/nosActiviter/cybergardiennage.webp'
            ]
        ],
        'auditAnalyseDuBesoin' => [
            'Title' => 'Audit analyse besoin',
            'Images' => [
                './views/includes/assets/img/nosActiviter/audit-analyse-besoin-casablanca.webp',
                './views/includes/assets/img/nosActiviter/audit-analyse-besoin.webp'
            ]
        ],
        'securiteGardiennage' => [
            'Title' => 'Agent de Securité et gardinage',
            'Images' => [
                './views/includes/assets/img/nosActiviter/agant-securite-casablanca-maroc.webp',
                './views/includes/assets/img/nosActiviter/agant-securite-casablanca.webp'
            ]
        ],
        'aPropos' => [
            'Title' => 'nettoyage',
            'Images' => [
                './views/includes/assets/img/Clean_1.webp',
                './views/includes/assets/img/Clean_1.webp'
            ]
        ],
        'notreEntreprise' => [
            'Title' => 'nettoyage',
            'Images' => [
                './views/includes/assets/img/Clean_1.webp',
                './views/includes/assets/img/Clean_1.webp'
            ]
        ],
        'nuisibles' => [
            'Title' => 'nettoyage',
            'Images' => [
                './views/includes/assets/img/Clean_1.webp',
                './views/includes/assets/img/Clean_1.webp'
            ]
        ],
        'blog' => [
            'Title' => 'nettoyage',
            'Images' => [
                './views/includes/assets/img/Clean_1.webp',
                './views/includes/assets/img/Clean_1.webp'
            ]
        ]


    ];

    public static function get_info_of_page($page)
    {
        return self::$info_pages[$page];
    }
}
