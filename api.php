<?php
header('Content-Type: application/json');

$musicData = [
    ['id' => "6G8bQewuts9Lonmty8iZ8O", 'title' => "edge of chaos", "type" => "album"],
    ['id' => "3bjZb1pBlHG4fWWuxQxpTM", 'title' => "on this shore", "type" => "track"],
    ['id' => "6NIdKuNRBH27G5dNmRem27", 'title' => "where did you sleep last night", "type" => "track"],
    ['id' => "7g2yybAawK93QhQmKHoJg5", 'title' => "octavian", "type" => "track"],
    ['id' => "7faRFQY1rnPxoXihwLR02S", 'title' => "winter child", "type" => "track"],
    ['id' => "2FvP5JotOzZR63xSNGjlpJ", 'title' => "echo child", "type" => "track"],
];

$photoData = [
    ["id" => 1, "title" => "silencio", "credit"=>"Zoe Fan"],
    ["id" => 2, "title" => "silencio", "credit"=>"Zoe Fan"],
    ["id" => 3, "title" => "silencio", "credit"=>"Zoe Fan"],
    ["id" => 4, "title" => "silencio", "credit"=>"Zoe Fan"],
    // ["id" => 5, "title" => "citadelle"],
    // ["id" => 6, "title" => "citadelle"],
    // ["id" => 7, "title" => "citadelle"],
    // ["id" => 8, "title" => "citadelle"],
];

$xrData = [
    [
        "title" => "Crime Scence Witness Memory",
        "videoId" => "QU9uImW4Q9A",
        "description" => "VR prototype of a crime scene for a research project on eyewitness testimony that I developed within the framework of a University Diploma on VR and Psychology at Université Paris Cité.",
    ],
    [
        "title" => "Prototype of a Skatepark Experience",
        "videoId" => "jehM7LztfDY",
        "description" => "VR prototype of a Skatepark experience, which I co-created as part of a team of four students during the 2021 Antwerp Summerschool on Storytelling in VR. I was the team's Unity developer. I also contributed to the storytelling, design and 3D modelling of the North Antwerp Skatepark.",
    ],
    [
        "title" => "Performance Anxiety",
        "videoId" => "AquWEcbBA7c",
        "description" => "VR prototype of a performance anxiety app that I developed as a personal project within the framework of Circuit Stream's course on XR development.",
    ],
    [
        "title" => "Solo Dream",
        "videoId" => "XNcf_-ixQN4",
        "description" => "'Solar Dream' is a work in progress that I am currently composing for a VR project led and developed in the Unreal Engine by Eric Carter.",
    ],
];

$publicationData = [
    [
        'title' => 'book chapter - "trapped between administrative detention, imprisonment, and freedom-in-limbo"',
        'link' => "https://lawcat.berkeley.edu/record/664232",
    ],
    [
        'title' => 'qualitative research study - "l\'effet de la rétention administrative sur les parcours migratoires : une illusion ?"',
        'link' => "https://www.france-terre-asile.org/images/CDS36_web.compressed.pdf",
    ],
    [
        'title' => 'doctoral thesis - "limbo spaces between illegal and legal stay resulting from eu management of non-removable third country nationals"',
        'link' => "https://theses.hal.science/tel-03510589/document",
    ],
    [
        'title' => 'journal article - "les limbes de l\'inéloignabilité : la nouvelle condition juridique de l\'étranger"',
        'link' => "https://www.cairn.info/revue-critique-de-droit-international-prive-2015-1-page-43.htm",
    ],
    [
        'title' => 'journal article - "does karl marx have a normative conception of justice ?"',
        'link' => "https://heinonline.org/HOL/LandingPage?handle=hein.journals/ucljurev16&div=3&id=&page=",
    ],
];

$videoData = [
    [
        'title' => 'on this shore',
        'videoId' => 'N0atjkFXpTY',
    ],
    [
        'title' => 'falling from high',
        'videoId' => '3ZwkhBffk2Y',
    ],
    [
        'title' => 'edge of chaos',
        'videoId' => 'LkI4xAzAYeY',
    ],
    [
        'title' => 'the word',
        'videoId' => 'eVwVrN979aI',
    ],
    [
        'title' => 'falling from high',
        'videoId' => '59yWnDYuILM',
    ],
    [
        'title' => 'edge of chaos - album',
        'videoId' => 'J5kZB7ohDPY',
    ],
    [
        'title' => 'where did you sleep last night',
        'videoId' => 'ZlJ8n7gXEI8',
    ],
    [
        'title' => 'hurt',
        'videoId' => 'IBFynoHiEuM',
    ],
    [
        'title' => 'the lines',
        'videoId' => '7hoqLmKgo0Q',
    ],
    [
        'title' => 'cello in a rush',
        'videoId' => 'vQxmv1EdaVI',
    ],
    [
        'title' => 'god and claus',
        'videoId' => 'OOxj_Flo_V4',
    ],
    [
        'title' => 'our time',
        'videoId' => 'r_NMHrwxjZw',
    ],
    [
        'title' => 'house of the rising sun',
        'videoId' => 'AszoN-FWulQ',
    ],
    [
        'title' => 'morpheus and gaia',
        'videoId' => '300LQyFNDXI',
    ],
    [
        'title' => 'river limbo',
        'videoId' => '10n4ypp5Hvk',
    ],
    [
        'title' => 'our time',
        'videoId' => 'ivdynUG_xEw',
    ],
    [
        'title' => 'in the sky',
        'videoId' => 'odEJ3-wKIFk',
    ],
    [
        'title' => 'live in berlin',
        'videoId' => 'SQwr2HbURGc',
    ],
    [
        'title' => 'running blind',
        'videoId' => 'JVPNPGh64JE',
    ],
    [
        'title' => 'stairway to heaven',
        'videoId' => 'vQvnU8kOPME',
    ],
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $resource = $_GET['resource'] ?? "";

    switch ($resource) {
        case 'music':
            echo json_encode($musicData);
            break;
        case 'videos':
            echo json_encode($videoData);
            break;
        case 'publications':
            echo json_encode($publicationData);
            break;
        case 'xr':
            echo json_encode($xrData);
            break;
        case 'photos':
            echo json_encode($photoData);
            break;
        default:
            http_response_code(404);
            echo json_encode(['error' => 'Resource not found']);
            break;
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}

