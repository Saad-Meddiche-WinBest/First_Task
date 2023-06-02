<?php
class PageController
{
    static public $info_pages = [
        'installationCamera' => [
            'Title' => 'Instalatation Camera Surveillance',
        ],
        'depannageCamera' => [
            'Title' => 'Depannage Camera Surveillance',
        ],
        'venteCamera' => [
            'Title' => 'Vente Camera Surveillance',
        ],
        'controleAcces' => [
            'Title' => 'Instalation Control d\'acces',
        ],
        'videoprotection' => [
            'Title' => 'Instalation Video Surveillence',
        ],
        'detectionIntrusion' => [
            'Title' => 'Instalation de detecteur intrustion',
        ],
        'detectionIncendie' => [
            'Title' => 'Instalation de detecteur incendie',
        ],
        'cybergardiennage' => [
            'Title' => 'cybergardiennage',
        ],
        'auditAnalyseDuBesoin' => [
            'Title' => 'Audit analyse besoin',
        ],
        'securiteGardiennage' => [
            'Title' => 'Agent de Securité et gardinage',
        ]

    ];

    public static function get_info_of_page($page)
    {
        return self::$info_pages[$page];
    }
}
