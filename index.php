<?php
// DETECTAR EN QUÉ PESTAÑA ESTAMOS
$current_tab = isset($_GET['tab']) ? $_GET['tab'] : 'meta';

if ($current_tab === 'fun') {
    // Si estamos en la pestaña fun, cargamos el archivo de casuals
    include 'decks_casual.php';
    $tier_names = [
        'C' => 'Tier C — Mazos Casuals y Temáticos (Fun)'
    ];
} else {
    // BASE DE DATOS TRIPLE VERIFICADA - MAZOS COMPETITIVOS OP15 / EB04
    $legal_decks = [
        [
            'title' => 'Purple Enel Ramp',
            'leader' => 'Enel (OP15-058)',
            'tier' => 'S',
            'colors' => ['purple'],
            'tournament' => 'Regional & Treasure Cup Global (Meta Top 1)',
            'placement' => '1st Place',
            'pilot' => 'Stefano Fabri',
            'code' => "1xOP15-058\n4xOP15-118\n4xOP15-072\n4xOP15-075\n4xOP15-068\n4xST04-005\n4xOP05-100\n4xOP15-070\n4xOP15-074\n4xST04-017\n4xOP15-077\n4xOP15-078\n2xOP15-063\n4xOP15-061",
            'full_list' => [
                '4x Enel Character (OP15-118)',
                '4x Purple Character (OP15-072)',
                '4x Purple Character (OP15-075)',
                '4x Purple Character (OP15-068)',
                '4x Queen (ST04-005)',
                '4x Purple Character (OP05-100)',
                '4x Purple Character (OP15-070)',
                '4x Purple Character (OP15-074)',
                '4x Blast Breath (ST04-017)',
                '4x Purple Event (OP15-077)',
                '4x Mamaragan (OP15-078)',
                '2x Purple Character (OP15-063)',
                '4x Purple Character (OP15-061)'
            ]
        ],
        [
            'title' => 'BY Nami Control',
            'leader' => 'Nami (OP11-041)',
            'tier' => 'S',
            'colors' => ['blue', 'yellow'],
            'tournament' => 'Regional São Paulo',
            'placement' => '5th Place',
            'pilot' => 'Jose Luis Buezo',
            'code' => "1xOP11-041\n4xP-096\n1xPRB02-008\n4xOP14-102\n3xOP06-106\n4xOP06-104\n3xOP12-112\n4xOP14-110\n4xOP14-111\n4xEB03-053\n4xEB04-058\n4xEB03-055\n4xOP14-104\n4xEB03-060\n3xOP07-115",
            'full_list' => [
                '4x Promo Card (P-096)',
                '1x Edward Newgate (PRB02-008)',
                '4x Nami Character (OP14-102)',
                '3x Yellow Character (OP06-106)',
                '4x Yellow Character (OP06-104)',
                '3x Yellow Character (OP12-112)',
                '4x Yellow Character (OP14-110)',
                '4x Yellow Character (OP14-111)',
                '4x Special Card (EB03-053)',
                '4x Special Card (EB04-058)',
                '4x Special Card (EB03-055)',
                '4x Yellow Character (OP14-104)',
                '4x Special Card (EB03-060)',
                '3x Yellow Character (OP07-115)'
            ]
        ],
        [
            'title' => 'Red/Blue Lucy Tempo',
            'leader' => 'Lucy (OP15-001)',
            'tier' => 'S',
            'colors' => ['red', 'blue'],
            'tournament' => 'Regional Championship',
            'placement' => '3rd Place',
            'pilot' => 'Roberto',
            'code' => "1xOP15-001\n4xOP15-004\n4xOP15-012\n4xOP15-016\n4xOP15-043\n4xOP15-048\n4xST22-002\n4xPRB02-008\n4xOP13-042\n4xOP13-016\n4xOP01-029\n4xOP13-055\n4xEB04-007\n2xOP09-118",
            'full_list' => [
                '4x Red Character (OP15-004)',
                '4x Red Character (OP15-012)',
                '4x Red Character (OP15-016)',
                '4x Blue Character (OP15-043)',
                '4x Blue Character (OP15-048)',
                '4x Tony Tony.Chopper (ST22-002)',
                '4x Edward Newgate (PRB02-008)',
                '4x Blue Character (OP13-042)',
                '4x Red Character (OP13-016)',
                '4x Radical Beam (OP01-029)',
                '4x Blue Event (OP13-055)',
                '4x Red Character (EB04-007)',
                '2x Gol D. Roger (OP09-118)'
            ]
        ],
        [
            'title' => 'Green/Purple Luffy Ramp',
            'leader' => 'Monkey.D.Luffy (EB02-010)',
            'tier' => 'B',
            'colors' => ['green', 'purple'],
            'tournament' => 'Regional & Store Championship Global',
            'placement' => 'Top Cut',
            'pilot' => 'AndreDreReal',
            'code' => "1xEB02-010\n4xPRB02-012\n4xST18-001\n4xST18-004\n4xEB02-035\n1xEB02-061\n4xOP07-064\n4xEB02-017\n1xP-111\n2xPRB02-005\n2xOP14-031\n2xOP13-118\n2xOP15-032\n4xOP15-078\n4xOP09-078\n2xOP12-037\n2xOP13-040\n4xOP08-036",
            'full_list' => [
                '4x Purple Character (PRB02-012)',
                '4x Purple Character (ST18-001)',
                '4x Purple Character (ST18-004)',
                '4x Purple Character (EB02-035)',
                '1x Purple Character (EB02-061)',
                '4x Purple Character (OP07-064)',
                '4x Green Character (EB02-017)',
                '1x Promo Card (P-111)',
                '2x Green Character (PRB02-005)',
                '2x Green Character (OP14-031)',
                '2x Secret Rare SEC (OP13-118)',
                '2x Green Character (OP15-032)',
                '4x Mamaragan (OP15-078)',
                '4x Purple Card (OP09-078)',
                '2x Demon Aura Nine Sword Style (OP12-037)',
                '2x I Know You\'re Strong... (OP13-040)',
                '4x Green Character (OP08-036)'
            ]
        ],
        [
            'title' => 'Red/Green Luffy Crew',
            'leader' => 'Monkey.D.Luffy (OP13-001)',
            'tier' => 'A',
            'colors' => ['red', 'green'],
            'tournament' => 'Regional No Heroes (512 p.)',
            'placement' => 'Top 16',
            'pilot' => 'dativv',
            'code' => "1xOP13-001\n3xOP01-016\n4xOP13-016\n4xEB04-002\n2xST21-003\n3xEB04-007\n4xOP15-035\n4xOP14-022\n4xOP14-031\n4xOP13-027\n4xOP13-118\n2xOP15-032\n1xOP12-037\n2xOP13-040\n4xOP05-038\n4xOP05-038\n4xOP08-036\n1xEB02-021",
            'full_list' => [
                '3x Nami (OP01-016)',
                '4x Red Character (OP13-016)',
                '4x Red/Green Character (EB04-002)',
                '2x Starter Character (ST21-003)',
                '3x Red Character (EB04-007)',
                '4x Green Character (OP15-035)',
                '4x Green Character (OP14-022)',
                '4x Green Character (OP14-031)',
                '4x Green Character (OP13-027)',
                '4x Secret Rare SEC (OP13-118)',
                '2x Green Character (OP15-032)',
                '1x Demon Aura Nine Sword Style (OP12-037)',
                '2x I Know You\'re Strong... So I\'ll Go All Out from the Very Start!!! (OP13-040)',
                '4x Kouzuki Hiyori (OP05-038)',
                '4x Green Character (OP08-036)',
                '1x Special Card (EB02-021)'
            ]
        ],
        [
            'title' => 'Red/Blue Ace Tempo',
            'leader' => 'Portgas.D.Ace (OP13-002)',
            'tier' => 'A',
            'colors' => ['red', 'blue'],
            'code' => "1xOP13-002\n4xOP13-016\n4xOP13-004\n4xOP13-013\n4xOP13-011\n4xOP01-016\n4xST22-002\n4xPRB02-008\n4xOP15-043\n4xOP15-048\n4xOP01-029\n4xOP13-019\n4xRed Character (EB04-007)\n2xOP09-118",
            'full_list' => [
                '4x Red Character (OP13-016)',
                '4x Red Character (OP13-004)',
                '4x Red Character (OP13-013)',
                '4x Red Character (OP13-011)',
                '4x Nami (OP01-016)',
                '4x Tony Tony.Chopper (ST22-002)',
                '4x Edward Newgate (PRB02-008)',
                '4x Blue Character (OP15-043)',
                '4x Blue Character (OP15-048)',
                '4x Radical Beam (OP01-029)',
                '4x Red Event (OP13-019)',
                '4x Red Character (EB04-007)',
                '2x Gol D. Roger (OP09-118)'
            ]
        ],
        [
            'title' => 'Yellow Enel Stall',
            'leader' => 'Enel (OP05-098)',
            'tier' => 'B',
            'colors' => ['yellow'],
            'tournament' => 'Chinoize Cup (5-1)',
            'placement' => '2nd Place',
            'pilot' => 'Gefen',
            'code' => "1xOP05-098\n3xEB01-056\n4xOP14-102\n4xOP11-106\n4xEB04-053\n3xOP06-104\n4xOP14-110\n4xOP14-111\n4xOP15-113\n4xEB04-058\n3xOP12-119\n4xOP14-104\n4xEB02-052\n1xOP06-115\n4xEB01-059",
            'full_list' => [
                '3x Yellow Character (EB01-056)',
                '4x Nami (OP14-102)',
                '4x Yellow Character (OP11-106)',
                '4x Yellow Character (EB04-053)',
                '3x Yellow Character (OP06-104)',
                '4x Yellow Character (OP14-110)',
                '4x Yellow Character (OP14-111)',
                '4x Roronoa Zoro (OP15-113)',
                '4x Borsalino (EB04-058)',
                '3x Yellow Character (OP12-119)',
                '4x Yellow Character (OP14-104)',
                '4x Yellow Character (EB02-052)',
                '1x You\'re the One Who Should Disappear. (OP06-115)',
                '4x Yellow Event (EB01-059)'
            ]
        ],
        [
            'title' => 'Red/Blue Vivi Rush',
            'leader' => 'Nefeltari Vivi (OP04-001)',
            'tier' => 'B',
            'colors' => ['red', 'blue'],
            'tournament' => 'Regional Championship',
            'placement' => 'Top Cut',
            'pilot' => 'RogueMaster',
            'code' => "1xOP04-001\n4xOP01-016\n4xOP15-043\n4xOP15-048\n4xST22-002\n4xPRB02-008\n4xOP13-016\n4xOP01-029\n4xEB04-007\n4xOP04-016\n4xOP04-044\n2xOP09-118\n4xOP04-056\n4xOP04-024",
            'full_list' => [
                '4x Nami (OP01-016)',
                '4x Blue Character (OP15-043)',
                '4x Blue Character (OP15-048)',
                '4x Tony Tony.Chopper (ST22-002)',
                '4x Edward Newgate (PRB02-008)',
                '4x Red Character (OP13-016)',
                '4x Radical Beam (OP01-029)',
                '4x Red Character (EB04-007)',
                '4x Red Character (OP04-016)',
                '4x Blue Character (OP04-044)',
                '2x Gol D. Roger (OP09-118)',
                '4x Blue Event (OP04-056)',
                '4x Red Character (OP04-024)'
            ]
        ],
    ];

    $tier_names = [
        'S' => 'Tier S — Arquetipos Dominantes',
        'A' => 'Tier A — Mazos de Alto Rendimiento',
        'B' => 'Tier B — Variantes Rogue y Estrategias Opcionales'
    ];
}

// Separación automática por Tiers en bloques de renderizado limpios
$tiered_data = [];
foreach ($legal_decks as $deck) {
    $tiered_data[$deck['tier']][] = $deck;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AraDecks - Listas de Mazos OP15 / EB04</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-color: #f9f8fd;
            --card-bg: #ffffff;
            --text-main: #2d3748;
            --text-muted: #718096;
            --dark-purple: #4a2691;
            --lavender-pastel: #f3f0fa;
            
            /* Paleta Pastel para Tiers */
            --tier-s-bg: #fff5f7; --tier-s-color: #e53e3e;
            --tier-a-bg: #faf5ff; --tier-a-color: #805ad5;
            --tier-b-bg: #ebf8ff; --tier-b-color: #3182ce;
            --tier-c-bg: #f0fff4; --tier-c-color: #38a169;

            /* Colores Suaves de cartas OP */
            --c-red: #fc8181; --c-green: #68d391; --c-blue: #63b3ed; 
            --c-black: #4a5568; --c-yellow: #f6e05e; --c-purple: #b794f4;
        }

       body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-main);
            margin: 0;
            padding: 30px 20px;
            -webkit-font-smoothing: antialiased;
            background-image: linear-gradient(rgba(255, 255, 255, 0.82), rgba(255, 255, 255, 0.82)), url('fondo.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        header {
            text-align: center;
            margin-bottom: 25px;
        }

        header h1 {
            margin: 0;
            color: var(--dark-purple);
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -1px;
            display: inline-block;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 5px 25px;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        header p {
            color: var(--text-muted);
            font-size: 1rem;
            margin-top: 8px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        /* --- SISTEMA PREMIUM DE PESTAÑAS (TABS) --- */
        .tabs-navigation {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .tab-link {
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 14px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.25s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.03);
            background-color: rgba(255, 255, 255, 0.8);
            color: var(--text-muted);
            border: 1px solid rgba(74, 38, 145, 0.1);
        }

        .tab-link:hover {
            transform: translateY(-1px);
            color: var(--dark-purple);
            background-color: #fff;
        }

        .tab-link.active-tab {
            background-color: var(--dark-purple);
            color: white;
            box-shadow: 0 8px 20px rgba(74, 38, 145, 0.2);
            border-color: var(--dark-purple);
        }

        /* BOTONERA DE FILTROS ESTILIZADA */
        .color-filters {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
            transition: all 0.2s ease;
            background-color: #fff;
            color: var(--text-main);
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        }

        .filter-btn:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 6px 12px rgba(74, 38, 145, 0.08); 
        }

        .btn-all { background-color: var(--lavender-pastel); color: var(--dark-purple); }
        .btn-red { border-bottom: 3px solid var(--c-red); }
        .btn-green { border-bottom: 3px solid var(--c-green); }
        .btn-blue { border-bottom: 3px solid var(--c-blue); }
        .btn-black { border-bottom: 3px solid var(--c-black); }
        .btn-yellow { border-bottom: 3px solid var(--c-yellow); }
        .btn-purple { border-bottom: 3px solid var(--c-purple); }
        .filter-btn.inactive { opacity: 0.35; transform: none; box-shadow: none; }

        /* SECCIONES Y CABECERAS DE TIERS */
        .tier-section {
            margin-bottom: 45px;
        }

        .tier-header {
            font-size: 1rem;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 10px;
            margin-bottom: 18px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .header-S { background-color: var(--tier-s-bg); color: var(--tier-s-color); }
        .header-A { background-color: var(--tier-a-bg); color: var(--tier-a-color); }
        .header-B { background-color: var(--tier-b-bg); color: var(--tier-b-color); }
        .header-C { background-color: var(--tier-c-bg); color: var(--tier-c-color); }

        .ranking-list { display: flex; flex-direction: column; gap: 14px; }

        .deck-card-wrapper {
            background-color: rgba(255, 255, 255, 0.94); 
            backdrop-filter: blur(8px);
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1); 
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.5);
            overflow: hidden;
        }

        .deck-card-wrapper:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(74, 38, 145, 0.05);
            border-color: rgba(183, 148, 244, 0.4);
        }

        .deck-row {
            padding: 22px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .row-S { border-left: 5px solid var(--tier-s-color); }
        .row-A { border-left: 5px solid var(--tier-a-color); }
        .row-B { border-left: 5px solid var(--tier-b-color); }
        .row-C { border-left: 5px solid var(--tier-c-color); }

        .position-box { font-size: 1.15rem; font-weight: 700; color: #a0aec0; width: 45px; }
        .global-1 { color: #f6e05e !important; }
        .global-2 { color: #cbd5e0 !important; }
        .global-3 { color: #ed8936 !important; }

        .deck-info { flex: 1; }
        .deck-title { font-size: 1.15rem; margin: 0 0 5px 0; color: var(--text-main); font-weight: 600; }

        .leader-box { display: flex; align-items: center; gap: 8px; }
        .deck-leader { font-size: 0.85rem; color: var(--text-muted); margin: 0; font-weight: 500; }

        .color-dot {
            width: 10px; height: 10px; border-radius: 50%; display: inline-block;
        }
        .dot-red { background-color: var(--c-red); }
        .dot-green { background-color: var(--c-green); }
        .dot-blue { background-color: var(--c-blue); }
        .dot-black { background-color: var(--c-black); }
        .dot-yellow { background-color: var(--c-yellow); }
        .dot-purple { background-color: var(--c-purple); }

        .stats-container { display: flex; align-items: center; gap: 30px; }
        .games-count { text-align: right; font-size: 0.8rem; color: var(--text-muted); line-height: 1.4; }

        .win-rate-badge {
            font-size: 0.85rem; font-weight: 700; padding: 8px 16px; border-radius: 12px;
            min-width: 120px; text-align: center;
        }
        .badge-S { background-color: var(--tier-s-bg); color: var(--tier-s-color); }
        .badge-A { background-color: var(--tier-a-bg); color: var(--tier-a-color); }
        .badge-B { background-color: var(--tier-b-bg); color: var(--tier-b-color); }
        .badge-C { background-color: var(--tier-c-bg); color: var(--tier-c-color); }

        /* INTERIOR DE LAS TARJETAS */
        .decklist-panel {
            background-color: #faf9fe;
            border-top: 1px solid #f1f0f7;
            padding: 24px;
            border-radius: 0 0 18px 18px;
            display: none;
        }

        .decklist-panel h4 { 
            margin: 0 0 15px 0; color: var(--dark-purple); font-size: 0.9rem; 
            font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; 
        }

        .card-grid-list {
            margin: 0 0 20px 0; padding: 0; list-style: none;
            display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 8px;
        }

        .card-grid-list li {
            font-size: 0.85rem; color: #4a5568; background: #ffffff; padding: 8px 14px;
            border-radius: 10px; border: 1px solid #edf2f7; font-weight: 500;
        }

        .copy-btn {
            background-color: var(--dark-purple); color: white; border: none;
            padding: 10px 22px; border-radius: 10px; font-weight: 600; cursor: pointer;
            font-size: 0.85rem; transition: all 0.2s ease;
            font-family: 'Poppins', sans-serif;
        }
        .copy-btn:hover { background-color: #3a1d75; transform: translateY(-1px); }

        /* MÓVILES */
        @media (max-width: 768px) {
            body { padding: 15px 10px; }
            header h1 { font-size: 2.2rem; }
            .tabs-navigation { gap: 8px; }
            .tab-link { padding: 10px 16px; font-size: 0.85rem; }
            .color-filters { gap: 6px; margin-bottom: 25px; }
            .filter-btn { padding: 8px 14px; font-size: 0.8rem; }
            .deck-row { flex-direction: column; align-items: flex-start; gap: 14px; padding: 18px 20px; }
            .position-box { border-bottom: 2px solid #edf2f7; padding-bottom: 4px; width: 100%; }
            .stats-container { width: 100%; justify-content: space-between; gap: 10px; border-top: 1px solid #f1f0f7; padding-top: 14px; }
            .games-count { text-align: left; font-size: 0.75rem; }
            .win-rate-badge { min-width: auto; font-size: 0.8rem; padding: 6px 12px; border-radius: 8px; }
            .card-grid-list { grid-template-columns: 1fr; gap: 6px; }
            .decklist-panel { padding: 16px; }
        }
    </style>
</head>
<body>

    <header>
        <h1>AraDecks</h1>
        <p>📊 Listas Actualizadas del Formato OP15 / EB04 — Listas para Ver y Probar</p>
    </header>

    <div class="container">
        
        <div class="tabs-navigation">
            <a href="?tab=meta" class="tab-link <?php echo $current_tab === 'meta' ? 'active-tab' : ''; ?>">🏆 Meta Oficial (OP15)</a>
            <a href="?tab=fun" class="tab-link <?php echo $current_tab === 'fun' ? 'active-tab' : ''; ?>">🃏 Mazos Fun / Casuals</a>
        </div>

        <div class="color-filters">
            <button class="filter-btn btn-all" onclick="filterColor('all')">Todos</button>
            <button class="filter-btn btn-red" onclick="filterColor('red')">Rojo</button>
            <button class="filter-btn btn-green" onclick="filterColor('green')">Verde</button>
            <button class="filter-btn btn-blue" onclick="filterColor('blue')">Azul</button>
            <button class="filter-btn btn-black" onclick="filterColor('black')">Negro</button>
            <button class="filter-btn btn-yellow" onclick="filterColor('yellow')">Amarillo</button>
            <button class="filter-btn btn-purple" onclick="filterColor('purple')">Púrpura</button>
        </div>

        <?php 
        $global_position = 1; 
        
        foreach ($tiered_data as $tier_letter => $tier_decks): 
            if (!empty($tier_decks)): 
        ?>
            <div class="tier-section" id="section-<?php echo $tier_letter; ?>">
                <div class="tier-header header-<?php echo $tier_letter; ?>">
                    <?php echo $tier_names[$tier_letter]; ?>
                </div>
                
                <div class="ranking-list">
                    <?php foreach ($tier_decks as $deck): 
                        $podium_class = '';
                        if ($current_tab === 'meta') {
                            if ($global_position === 1) $podium_class = 'global-1';
                            elseif ($global_position === 2) $podium_class = 'global-2';
                            elseif ($global_position === 3) $podium_class = 'global-3';
                        }

                        $color_classes = implode(' ', array_map(function($c) { return 'c-' . $c; }, $deck['colors']));
                    ?>
                        <div class="deck-card-wrapper <?php echo $color_classes; ?>">
                            <div class="deck-row row-<?php echo $tier_letter; ?>" onclick="toggleDecklist(this)">
                                <div class="position-box <?php echo $podium_class; ?>">
                                    #<?php echo $global_position; ?>
                                </div>
                                
                                <div class="deck-info">
                                    <h3 class="deck-title"><?php echo htmlspecialchars($deck['title']); ?></h3>
                                    <div class="leader-box">
                                        <?php foreach($deck['colors'] as $c): ?>
                                            <span class="color-dot dot-<?php echo $c; ?>"></span>
                                        <?php endforeach; ?>
                                        <p class="deck-leader">Líder: <?php echo htmlspecialchars($deck['leader']); ?></p>
                                    </div>
                                </div>
                                
                                <div class="stats-container">
                                    <div class="games-count">
                                        Formato: OP15 / EB04<br>
                                        Estructura: 50 Cartas
                                    </div>
                                    <div class="win-rate-badge badge-<?php echo $tier_letter; ?>">
                                        Ver Mazo
                                    </div>
                                </div>
                            </div>

                            <div class="decklist-panel">
                                <h4>📋 Listado de Cartas para Testeo:</h4>
                                <ul class="card-grid-list">
                                    <?php foreach ($deck['full_list'] as $card_item): ?>
                                        <li><?php echo htmlspecialchars($card_item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <button class="copy-btn" onclick="copyToClipboard(this, `<?php echo $deck['code']; ?>`)">📋 Copiar Listado Completo para OPTCGSim</button>
                            </div>
                        </div>
                    <?php 
                        $global_position++;
                    endforeach; ?>
                </div>
            </div>
        <?php 
            endif;
        endforeach; 
        ?>
        
    </div>

    <script>
        function toggleDecklist(element) {
            const panel = element.nextElementSibling;
            panel.style.display = (panel.style.display === "block") ? "none" : "block";
        }

        function copyToClipboard(button, text) {
            navigator.clipboard.writeText(text).then(() => {
                const originalText = button.innerHTML;
                button.innerHTML = "✅ ¡Listado de 50 Cartas Copiado!";
                button.style.backgroundColor = "#2ecc71";
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.style.backgroundColor = "";
                }, 1800);
            });
        }

        function filterColor(color) {
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                if (color === 'all' && btn.classList.contains('btn-all')) {
                    btn.classList.remove('inactive');
                } else if (btn.classList.contains('btn-' + color)) {
                    btn.classList.remove('inactive');
                } else {
                    btn.classList.add('inactive');
                }
            });

            const cards = document.querySelectorAll('.deck-card-wrapper');
            cards.forEach(card => {
                card.style.display = (color === 'all' || card.classList.contains('c-' + color)) ? "block" : "none";
            });

            const sections = document.querySelectorAll('.tier-section');
            sections.forEach(section => {
                const totalCards = section.querySelectorAll('.deck-card-wrapper');
                let hasVisible = false;
                totalCards.forEach(c => {
                    if (c.style.display !== "none") {
                        hasVisible = true;
                    }
                });
                section.style.display = hasVisible ? "block" : "none";
            });
        }
    </script>
</body>
</html>
