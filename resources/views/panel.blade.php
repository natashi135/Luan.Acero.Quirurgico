<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control | Luan Acero Quirúrgico 316L</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;900&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        :root {
            --primary-900: #00ffdd;
            --primary-400: #33ffe4;
            --primary-200: #99fff1;
            --gold: #ffd700;
            --gold-glow: rgba(255, 215, 0, 0.4);
            --bg-dark: #05090e;
            --bg-card: rgba(9, 18, 28, 0.75);
            --bg-card-hover: rgba(14, 28, 44, 0.85);
            --border-neon: rgba(0, 255, 221, 0.25);
            --border-neon-bright: rgba(0, 255, 221, 0.8);
            --text-main: #f0fdfc;
            --text-muted: #8ca2b0;
            --led-shadow: 0 0 15px rgba(0, 255, 221, 0.35);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        h1, h2, h3, .brand-font {
            font-family: 'Cinzel', serif;
            letter-spacing: 1px;
        }

        /* Ambient Glow */
        .ambient-glow {
            position: fixed;
            border-radius: 50%;
            filter: blur(140px);
            opacity: 0.12;
            pointer-events: none;
            z-index: 0;
        }
        .ambient-1 {
            top: -10%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, var(--gold), transparent 70%);
        }
        .ambient-2 {
            bottom: -10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--primary-900), transparent 70%);
        }

        /* TOP NAVBAR */
        .panel-header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(5, 10, 16, 0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border-neon);
            padding: 14px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .panel-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            color: #fff;
        }

        .panel-logo-symbol {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(0, 0, 0, 0.7));
            border: 1.5px solid var(--gold);
            box-shadow: 0 0 15px var(--gold-glow);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold);
            font-weight: 800;
            font-size: 20px;
            font-family: 'Cinzel', serif;
        }

        .panel-brand-text h1 {
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .panel-brand-text span {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--gold);
            display: block;
        }

        .panel-header-actions {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .admin-user-pill {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 215, 0, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.4);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            color: var(--gold);
            font-weight: 600;
        }

        .btn-panel-action {
            background: rgba(14, 25, 38, 0.7);
            border: 1px solid var(--border-neon);
            color: var(--primary-100);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s ease;
        }

        .btn-panel-action:hover {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.15);
            color: #fff;
            box-shadow: var(--led-shadow);
            transform: translateY(-2px);
        }

        .btn-logout {
            border-color: rgba(255, 77, 77, 0.4);
            color: #ff8888;
        }
        .btn-logout:hover {
            background: rgba(255, 77, 77, 0.15);
            border-color: #ff5555;
            color: #fff;
            box-shadow: 0 0 15px rgba(255, 77, 77, 0.4);
        }

        /* MAIN PANEL LAYOUT */
        .panel-layout {
            display: grid;
            grid-template-columns: 260px 1fr;
            flex: 1;
            position: relative;
            z-index: 2;
        }

        /* SIDEBAR */
        .panel-sidebar {
            background: rgba(6, 12, 20, 0.85);
            border-right: 1px solid var(--border-neon);
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .sidebar-section-title {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--text-muted);
            margin: 16px 12px 8px;
            font-weight: 700;
        }

        .sidebar-nav-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 12px;
            color: var(--text-muted);
            background: transparent;
            border: 1px solid transparent;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            width: 100%;
            text-align: left;
            transition: all 0.25s ease;
        }

        .sidebar-nav-btn i {
            width: 18px;
            height: 18px;
            color: var(--primary-400);
            transition: transform 0.2s;
        }

        .sidebar-nav-btn:hover {
            color: #fff;
            background: rgba(0, 255, 221, 0.08);
            border-color: rgba(0, 255, 221, 0.2);
        }

        .sidebar-nav-btn.active {
            color: #04080d;
            background: linear-gradient(135deg, var(--gold), #ffaa00);
            box-shadow: 0 0 15px var(--gold-glow);
            font-weight: 700;
        }

        .sidebar-nav-btn.active i {
            color: #04080d;
            transform: scale(1.1);
        }

        /* MAIN CONTENT AREA */
        .panel-content {
            padding: 32px;
            overflow-y: auto;
            max-height: calc(100vh - 72px);
        }

        .panel-tab-view {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .panel-tab-view.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* CONTENT HEADER */
        .view-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .view-header h2 {
            font-size: 26px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .view-header p {
            font-size: 14px;
            color: var(--text-muted);
            margin-top: 4px;
        }

        /* KPI STATS CARDS */
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .kpi-card {
            background: rgba(9, 18, 28, 0.85);
            border: 1px solid var(--border-neon);
            border-radius: 16px;
            padding: 22px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .kpi-card:hover {
            transform: translateY(-4px);
            border-color: var(--primary-900);
            box-shadow: var(--led-shadow);
        }

        .kpi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--primary-900);
        }

        .kpi-card.gold::before { background: var(--gold); }
        .kpi-card.green::before { background: #25d366; }
        .kpi-card.purple::before { background: #b537f2; }

        .kpi-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--text-muted);
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .kpi-value {
            font-size: 32px;
            font-weight: 800;
            color: #ffffff;
            font-family: 'Cinzel', serif;
        }

        .kpi-footer {
            font-size: 12px;
            color: var(--primary-300);
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        /* DATA TABLES & CARDS */
        .panel-card {
            background: rgba(9, 18, 28, 0.85);
            border: 1px solid var(--border-neon);
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            margin-bottom: 24px;
        }

        .table-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .search-input-wrap {
            position: relative;
            display: flex;
            align-items: center;
            min-width: 260px;
        }

        .search-input-wrap i {
            position: absolute;
            left: 14px;
            color: var(--primary-400);
            pointer-events: none;
            width: 16px;
            height: 16px;
        }

        .search-input-wrap input {
            width: 100%;
            background: rgba(6, 12, 20, 0.85);
            border: 1px solid var(--border-neon);
            border-radius: 20px;
            padding: 9px 16px 9px 38px;
            color: #fff;
            font-size: 13px;
            outline: none;
            transition: all 0.2s ease;
        }

        .search-input-wrap input:focus {
            border-color: var(--primary-900);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.3);
        }

        .btn-primary-neon {
            background: linear-gradient(135deg, var(--primary-900), #00c4aa);
            color: #04080d;
            border: none;
            padding: 10px 20px;
            border-radius: 24px;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(0, 255, 221, 0.4);
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary-neon:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(0, 255, 221, 0.7);
            background: linear-gradient(135deg, #33ffe4, #00ffdd);
        }

        /* CUSTOM RESPONSIVE TABLE */
        .table-responsive {
            overflow-x: auto;
            width: 100%;
        }

        .panel-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        .panel-table th {
            padding: 14px 16px;
            background: rgba(5, 12, 20, 0.95);
            color: var(--primary-300);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 1.5px solid var(--border-neon);
        }

        .panel-table td {
            padding: 14px 16px;
            border-bottom: 1px solid rgba(0, 255, 221, 0.1);
            color: #e2e8f0;
            vertical-align: middle;
        }

        .panel-table tr:hover td {
            background: rgba(0, 255, 221, 0.04);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 14px;
            font-size: 12px;
            font-weight: 700;
        }
        .status-badge.green { background: rgba(37, 211, 102, 0.15); color: #25d366; border: 1px solid rgba(37, 211, 102, 0.3); }
        .status-badge.gold { background: rgba(255, 215, 0, 0.15); color: #ffd700; border: 1px solid rgba(255, 215, 0, 0.3); }
        .status-badge.blue { background: rgba(0, 255, 221, 0.15); color: var(--primary-900); border: 1px solid rgba(0, 255, 221, 0.3); }

        .btn-table-action {
            background: rgba(14, 25, 38, 0.7);
            border: 1px solid var(--border-neon);
            color: #fff;
            padding: 6px 10px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }
        .btn-table-action:hover {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.15);
        }
        .btn-table-action.delete:hover {
            border-color: #ff5555;
            background: rgba(255, 77, 77, 0.2);
            color: #ff8888;
        }

        /* MODALS */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(2, 6, 10, 0.85);
            backdrop-filter: blur(8px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .modal-overlay.active {
            display: flex;
        }
        .modal-content-box {
            background: linear-gradient(145deg, #0a1624, #050b12);
            border: 1.5px solid var(--border-neon-bright);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.95), 0 0 25px rgba(0, 255, 221, 0.5);
            border-radius: 20px;
            max-width: 520px;
            width: 100%;
            padding: 28px;
            position: relative;
        }

        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--primary-200);
            margin-bottom: 6px;
        }
        .form-control {
            width: 100%;
            background: rgba(6, 14, 22, 0.85);
            border: 1px solid var(--border-neon);
            border-radius: 10px;
            padding: 10px 14px;
            color: #fff;
            font-size: 14px;
            outline: none;
        }
        .form-control:focus {
            border-color: var(--primary-900);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.35);
        }

        /* TOAST */
        .toast-notify {
            position: fixed;
            bottom: 28px;
            right: 28px;
            background: rgba(6, 14, 22, 0.95);
            border: 1.5px solid var(--primary-900);
            box-shadow: 0 0 20px rgba(0, 255, 221, 0.6);
            border-radius: 12px;
            padding: 12px 20px;
            color: #fff;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 2000;
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .toast-notify.show {
            transform: translateY(0);
            opacity: 1;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .panel-layout {
                grid-template-columns: 1fr;
            }
            .panel-sidebar {
                border-right: none;
                border-bottom: 1px solid var(--border-neon);
                flex-direction: row;
                overflow-x: auto;
                padding: 12px;
            }
            .sidebar-section-title { display: none; }
            .sidebar-nav-btn { white-space: nowrap; width: auto; }
        }
    </style>
</head>
<body>

    <!-- Glowing Background Ambient -->
    <div class="ambient-glow ambient-1"></div>
    <div class="ambient-glow ambient-2"></div>

    <!-- TOP NAVBAR -->
    <header class="panel-header">
        <a href="{{ route('panel') }}" class="panel-brand">
            <div class="panel-logo-symbol">L</div>
            <div class="panel-brand-text">
                <h1>LUAN <span>Panel de Control 316L</span></h1>
            </div>
        </a>

        <div class="panel-header-actions">
            <div class="admin-user-pill">
                <i data-lucide="shield-check" style="width: 16px; height: 16px;"></i>
                <span id="adminSessionLabel">admin@luan.com (SuperAdmin)</span>
            </div>
            <a href="{{ route('home') }}" class="btn-panel-action" title="Abrir la Tienda Pública">
                <i data-lucide="store"></i>
                <span>Ver Tienda</span>
            </a>
            <button class="btn-panel-action btn-logout" onclick="adminLogout()" title="Cerrar Sesión">
                <i data-lucide="log-out"></i>
                <span>Cerrar Sesión</span>
            </button>
        </div>
    </header>

    <!-- MAIN PANEL BODY -->
    <div class="panel-layout">
        
        <!-- SIDEBAR -->
        <aside class="panel-sidebar">
            <div class="sidebar-section-title">Navegación</div>
            <button class="sidebar-nav-btn active" onclick="switchPanelTab('dashboard')">
                <i data-lucide="layout-dashboard"></i>
                <span>Dashboard / Resumen</span>
            </button>
            <button class="sidebar-nav-btn" onclick="switchPanelTab('productos')">
                <i data-lucide="gem"></i>
                <span>Joyas & Catálogo</span>
            </button>
            <button class="sidebar-nav-btn" onclick="switchPanelTab('encargos')">
                <i data-lucide="shopping-cart"></i>
                <span>Encargos / Pedidos</span>
            </button>
            <button class="sidebar-nav-btn" onclick="switchPanelTab('repartos')">
                <i data-lucide="truck"></i>
                <span>Repartos & Envíos</span>
            </button>

            <div class="sidebar-section-title">Base de Datos</div>
            <button class="sidebar-nav-btn" onclick="switchPanelTab('clientes')">
                <i data-lucide="users"></i>
                <span>Clientes & Proveedores</span>
            </button>
            <button class="sidebar-nav-btn" onclick="switchPanelTab('configuracion')">
                <i data-lucide="settings"></i>
                <span>Ajustes de Tienda</span>
            </button>
        </aside>

        <!-- CONTENT AREA -->
        <main class="panel-content">
            
            <!-- 1. DASHBOARD TAB -->
            <section id="tab-dashboard" class="panel-tab-view active">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="layout-dashboard" style="color: var(--gold);"></i> Visión General del Negocio</h2>
                        <p>Métricas actualizadas de ventas, catálogo y repartos de acero quirúrgico 316L.</p>
                    </div>
                    <button class="btn-primary-neon" onclick="switchPanelTab('productos'); openNewProductModal();">
                        <i data-lucide="plus-circle"></i>
                        <span>+ Nueva Joya</span>
                    </button>
                </div>

                <!-- KPI CARDS -->
                <div class="kpi-grid">
                    <div class="kpi-card gold">
                        <div class="kpi-header">
                            <span>Ventas Estimadas</span>
                            <i data-lucide="dollar-sign"></i>
                        </div>
                        <div class="kpi-value" id="kpiSales">$142.800</div>
                        <div class="kpi-footer"><i data-lucide="trending-up"></i> +18% este mes</div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-header">
                            <span>Joyas en Catálogo</span>
                            <i data-lucide="gem"></i>
                        </div>
                        <div class="kpi-value" id="kpiProductsCount">8</div>
                        <div class="kpi-footer"><i data-lucide="check-circle"></i> Sincronizadas en Tienda</div>
                    </div>

                    <div class="kpi-card purple">
                        <div class="kpi-header">
                            <span>Encargos Totales</span>
                            <i data-lucide="shopping-bag"></i>
                        </div>
                        <div class="kpi-value" id="kpiOrdersCount">12</div>
                        <div class="kpi-footer"><i data-lucide="clock"></i> 3 pendientes de entrega</div>
                    </div>

                    <div class="kpi-card green">
                        <div class="kpi-header">
                            <span>Canal WhatsApp</span>
                            <i data-lucide="message-circle"></i>
                        </div>
                        <div class="kpi-value" style="font-size: 24px; color: #25d366;">Activo</div>
                        <div class="kpi-footer">Recepción inmediata de compras</div>
                    </div>
                </div>

                <!-- RECENT ORDERS OVERVIEW -->
                <div class="panel-card">
                    <div class="table-toolbar">
                        <h3 style="font-size: 18px; color: #fff; display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="package-check" style="color: var(--primary-900);"></i>
                            <span>Últimos Encargos Recibidos</span>
                        </h3>
                        <button class="btn-table-action" onclick="switchPanelTab('encargos')">Ver todos los encargos →</button>
                    </div>

                    <div class="table-responsive">
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Accesorio 316L</th>
                                    <th>Domicilio</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody id="dashboardRecentOrders">
                                <tr>
                                    <td>#ENC-101</td>
                                    <td><strong>Lucas Gómez</strong><br><small style="color: var(--text-muted);">+54 9 11 4829-1102</small></td>
                                    <td>Cadena Cubana Miami 316L (8mm)</td>
                                    <td>Av. Corrientes 2450, CABA</td>
                                    <td><strong>$8.900</strong></td>
                                    <td><span class="status-badge green">Entregado</span></td>
                                </tr>
                                <tr>
                                    <td>#ENC-102</td>
                                    <td><strong>Valeria Ramos</strong><br><small style="color: var(--text-muted);">+54 9 11 3910-2244</small></td>
                                    <td>Set Luan Neón (Cadena + Pulsera)</td>
                                    <td>Belgrano 1180, Vicente López</td>
                                    <td><strong>$18.500</strong></td>
                                    <td><span class="status-badge gold">En Reparto</span></td>
                                </tr>
                                <tr>
                                    <td>#ENC-103</td>
                                    <td><strong>Matías Fernández</strong><br><small style="color: var(--text-muted);">+54 9 11 5022-9911</small></td>
                                    <td>Anillo Titanio Facetado & Zircón</td>
                                    <td>San Martín 450, Quilmes</td>
                                    <td><strong>$5.400</strong></td>
                                    <td><span class="status-badge blue">En Preparación</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- 2. PRODUCTOS / JOYAS TAB -->
            <section id="tab-productos" class="panel-tab-view">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="gem" style="color: var(--primary-900);"></i> Gestión de Catálogo de Joyas</h2>
                        <p>Agrega, edita precios o retira accesorios de acero quirúrgico 316L de la tienda en vivo.</p>
                    </div>
                    <button class="btn-primary-neon" onclick="openNewProductModal()">
                        <i data-lucide="plus-circle"></i>
                        <span>+ Agregar Nueva Joya</span>
                    </button>
                </div>

                <div class="panel-card">
                    <div class="table-toolbar">
                        <div class="search-input-wrap">
                            <i data-lucide="search"></i>
                            <input type="text" id="prodSearchInput" onkeyup="filterProductsTable()" placeholder="Buscar por nombre, categoría...">
                        </div>
                        <div style="display: flex; gap: 8px;">
                            <button class="btn-table-action" onclick="filterProdCategory('all')">Todos</button>
                            <button class="btn-table-action" onclick="filterProdCategory('cadenas')">Cadenas</button>
                            <button class="btn-table-action" onclick="filterProdCategory('anillos')">Anillos</button>
                            <button class="btn-table-action" onclick="filterProdCategory('pulseras')">Pulseras</button>
                            <button class="btn-table-action" onclick="filterProdCategory('aretes')">Aretes</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre del Accesorio</th>
                                    <th>Categoría</th>
                                    <th>Precio Tienda</th>
                                    <th>Precio Anterior</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="panelProductsTableBody">
                                <!-- Generado por JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- 3. ENCARGOS / PEDIDOS TAB -->
            <section id="tab-encargos" class="panel-tab-view">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="shopping-cart" style="color: var(--gold);"></i> Encargos y Pedidos de Clientes</h2>
                        <p>Control de pedidos realizados por WhatsApp y web (Tabla `Encargo` de BD).</p>
                    </div>
                    <button class="btn-primary-neon" onclick="openNewOrderModal()">
                        <i data-lucide="plus-circle"></i>
                        <span>+ Registrar Encargo</span>
                    </button>
                </div>

                <div class="panel-card">
                    <div class="table-responsive">
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>ID Encargo</th>
                                    <th>Cliente</th>
                                    <th>Teléfono</th>
                                    <th>Accesorio Pedido</th>
                                    <th>Domicilio de Entrega</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="encargosTableBody">
                                <tr>
                                    <td><strong>#ENC-001</strong></td>
                                    <td>Lucas Gómez</td>
                                    <td>+54 9 11 4829-1102</td>
                                    <td>Cadena Cubana Miami 316L (8mm)</td>
                                    <td>Av. Corrientes 2450, CABA</td>
                                    <td>2026-09-04</td>
                                    <td><span class="status-badge green">Entregado</span></td>
                                    <td>
                                        <button class="btn-table-action" onclick="changeOrderStatus(this)">Cambiar Estado</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#ENC-002</strong></td>
                                    <td>Valeria Ramos</td>
                                    <td>+54 9 11 3910-2244</td>
                                    <td>Set Luan Neón (Cadena + Pulsera)</td>
                                    <td>Belgrano 1180, Vicente López</td>
                                    <td>2026-09-04</td>
                                    <td><span class="status-badge gold">En Reparto</span></td>
                                    <td>
                                        <button class="btn-table-action" onclick="changeOrderStatus(this)">Cambiar Estado</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#ENC-003</strong></td>
                                    <td>Matías Fernández</td>
                                    <td>+54 9 11 5022-9911</td>
                                    <td>Anillo Titanio Facetado & Zircón</td>
                                    <td>San Martín 450, Quilmes</td>
                                    <td>2026-09-03</td>
                                    <td><span class="status-badge blue">En Preparación</span></td>
                                    <td>
                                        <button class="btn-table-action" onclick="changeOrderStatus(this)">Cambiar Estado</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>#ENC-004</strong></td>
                                    <td>Camila Duarte</td>
                                    <td>+54 9 11 7722-1400</td>
                                    <td>Aretes Huggie Hoop con Zircón</td>
                                    <td>Mitre 890, Lanús</td>
                                    <td>2026-09-02</td>
                                    <td><span class="status-badge green">Entregado</span></td>
                                    <td>
                                        <button class="btn-table-action" onclick="changeOrderStatus(this)">Cambiar Estado</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- 4. REPARTOS & ENVÍOS TAB -->
            <section id="tab-repartos" class="panel-tab-view">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="truck" style="color: #25d366;"></i> Repartos & Asignación de Empleados</h2>
                        <p>Gestión de repartos a domicilio y formas de pago (Tablas `Reparto`, `Empleado` y `Pago` de BD).</p>
                    </div>
                </div>

                <div class="panel-card">
                    <div class="table-responsive">
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>ID Reparto</th>
                                    <th>Fecha</th>
                                    <th>Encargo Ref.</th>
                                    <th>Empleado / Repartidor</th>
                                    <th>Forma de Pago</th>
                                    <th>Destino</th>
                                    <th>Estado de Entrega</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#REP-501</strong></td>
                                    <td>2026-09-04</td>
                                    <td>#ENC-001</td>
                                    <td><strong>Facundo Morales</strong> (ID 10)</td>
                                    <td>Efectivo contra entrega</td>
                                    <td>Av. Corrientes 2450, CABA</td>
                                    <td><span class="status-badge green">Completado</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#REP-502</strong></td>
                                    <td>2026-09-04</td>
                                    <td>#ENC-002</td>
                                    <td><strong>Ezequiel Ruiz</strong> (ID 11)</td>
                                    <td>Transferencia / MercadoPago</td>
                                    <td>Belgrano 1180, Vicente López</td>
                                    <td><span class="status-badge gold">En Ruta de Entrega</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#REP-503</strong></td>
                                    <td>2026-09-04</td>
                                    <td>#ENC-003</td>
                                    <td><strong>Facundo Morales</strong> (ID 10)</td>
                                    <td>Tarjeta Débito</td>
                                    <td>San Martín 450, Quilmes</td>
                                    <td><span class="status-badge blue">Asignado a Reparto</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- 5. CLIENTES & PROVEEDORES TAB -->
            <section id="tab-clientes" class="panel-tab-view">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="users" style="color: var(--primary-900);"></i> Directorio de Clientes y Proveedores</h2>
                        <p>Datos de clientes frecuentes y proveedores mayoristas de acero 316L (Tablas `Cliente` y `Proveedor`).</p>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                    <!-- Clientes -->
                    <div class="panel-card">
                        <h3 style="font-size: 18px; color: #fff; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="user-check" style="color: var(--primary-900);"></i>
                            <span>Clientes Registrados</span>
                        </h3>
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Teléfono</th>
                                    <th>Domicilio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Lucas Gómez</strong></td>
                                    <td>+54 9 11 4829-1102</td>
                                    <td>Av. Corrientes 2450, CABA</td>
                                </tr>
                                <tr>
                                    <td><strong>Valeria Ramos</strong></td>
                                    <td>+54 9 11 3910-2244</td>
                                    <td>Belgrano 1180, V. López</td>
                                </tr>
                                <tr>
                                    <td><strong>Matías Fernández</strong></td>
                                    <td>+54 9 11 5022-9911</td>
                                    <td>San Martín 450, Quilmes</td>
                                </tr>
                                <tr>
                                    <td><strong>Camila Duarte</strong></td>
                                    <td>+54 9 11 7722-1400</td>
                                    <td>Mitre 890, Lanús</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Proveedores -->
                    <div class="panel-card">
                        <h3 style="font-size: 18px; color: #fff; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
                            <i data-lucide="truck" style="color: var(--gold);"></i>
                            <span>Proveedores de Joyería 316L</span>
                        </h3>
                        <table class="panel-table">
                            <thead>
                                <tr>
                                    <th>Proveedor</th>
                                    <th>Teléfono</th>
                                    <th>Especialidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>SteelImport 316L S.A.</strong></td>
                                    <td>+54 11 4300-9900</td>
                                    <td>Cadenas Cubanas & Acero Fino</td>
                                </tr>
                                <tr>
                                    <td><strong>Joyas Titanium Argentina</strong></td>
                                    <td>+54 11 4722-3344</td>
                                    <td>Anillos Facetados y Circonias</td>
                                </tr>
                                <tr>
                                    <td><strong>AlloyTech Medical</strong></td>
                                    <td>+54 11 4899-2211</td>
                                    <td>Piercings & Acero Hipoalergénico</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- 6. CONFIGURACIÓN TAB -->
            <section id="tab-configuracion" class="panel-tab-view">
                <div class="view-header">
                    <div>
                        <h2><i data-lucide="settings" style="color: var(--primary-400);"></i> Configuración de la Tienda</h2>
                        <p>Personaliza los datos de contacto, enlaces de WhatsApp y parámetros de la tienda.</p>
                    </div>
                </div>

                <div class="panel-card" style="max-width: 650px;">
                    <form onsubmit="saveStoreSettings(event)">
                        <div class="form-group">
                            <label>Nombre Comercial de la Tienda</label>
                            <input type="text" id="cfgStoreName" class="form-control" value="Luan Acero Quirúrgico 316L">
                        </div>

                        <div class="form-group">
                            <label>Teléfono Oficial de WhatsApp (con código de país)</label>
                            <input type="text" id="cfgStorePhone" class="form-control" value="+54 9 11 0000-0000" placeholder="+54 9 11 ...">
                        </div>

                        <div class="form-group">
                            <label>Mensaje Automático de Bienvenida en WhatsApp</label>
                            <textarea id="cfgStoreMsg" class="form-control" rows="3">Hola Luan Acero Quirúrgico, quiero consultar por sus accesorios exclusivos en acero 316L.</textarea>
                        </div>

                        <div class="form-group">
                            <label>Email de Contacto Administrativo</label>
                            <input type="email" class="form-control" value="admin@luan.com" disabled style="opacity: 0.7;">
                        </div>

                        <button type="submit" class="btn-primary-neon" style="margin-top: 10px;">
                            <i data-lucide="save"></i>
                            <span>Guardar Parámetros de Tienda</span>
                        </button>
                    </form>
                </div>
            </section>

        </main>
    </div>

    <!-- MODAL PARA AGREGAR NUEVA JOYA -->
    <div class="modal-overlay" id="newProductModal">
        <div class="modal-content-box">
            <button class="btn-table-action" style="position: absolute; top: 16px; right: 16px; border-radius: 50%; width: 32px; height: 32px; padding: 0; display: flex; align-items: center; justify-content: center;" onclick="closeNewProductModal()">✕</button>
            <h3 style="font-size: 20px; color: #fff; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
                <i data-lucide="gem" style="color: var(--primary-900);"></i>
                <span>Nueva Joya en Catálogo</span>
            </h3>
            <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 18px;">Se publicará de inmediato en la tienda pública.</p>

            <form onsubmit="handleCreateProduct(event)">
                <div class="form-group">
                    <label>Nombre del Accesorio</label>
                    <input type="text" id="modalProdName" class="form-control" placeholder="Ej: Dije Cruz Bizantina 316L" required>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                    <div class="form-group">
                        <label>Categoría</label>
                        <select id="modalProdCat" class="form-control" style="background: #060e16; color: #fff;">
                            <option value="cadenas">Cadenas</option>
                            <option value="anillos">Anillos</option>
                            <option value="pulseras">Pulseras</option>
                            <option value="aretes">Aretes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio ($ ARS)</label>
                        <input type="number" id="modalProdPrice" class="form-control" placeholder="6900" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Descripción y Acabado</label>
                    <input type="text" id="modalProdDesc" class="form-control" placeholder="Acero inoxidable hipoalergénico con pulido espejo" required>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 20px;">
                    <button type="submit" class="btn-primary-neon" style="flex: 1; justify-content: center;">
                        <i data-lucide="check"></i>
                        <span>Publicar en Tienda</span>
                    </button>
                    <button type="button" class="btn-table-action" onclick="closeNewProductModal()">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div class="toast-notify" id="toastNotify">
        <i data-lucide="check-circle" style="color: var(--primary-900);"></i>
        <span id="toastMsg">Operación completada con éxito</span>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // Default products if not set in localStorage
        const defaultProducts = [
            {
                id: 1,
                name: "Cadena Cubana Miami 316L (8mm)",
                category: "cadenas",
                price: 8900,
                oldPrice: 11500,
                img: "{{ asset('images/cadena_acero.jpg') }}",
                desc: "Cadena con eslabones macizos pulidos a espejo en acero quirúrgico 316L."
            },
            {
                id: 2,
                name: "Anillo Titanio Facetado & Zircón",
                category: "anillos",
                price: 5400,
                oldPrice: 7200,
                img: "{{ asset('images/anillos_acero.jpg') }}",
                desc: "Dúo de anillos en acero quirúrgico con biseles cepillados y corte diamante."
            },
            {
                id: 3,
                name: "Brazalete Blindado Oyster 316L",
                category: "pulseras",
                price: 7600,
                oldPrice: 9800,
                img: "{{ asset('images/pulsera_acero.jpg') }}",
                desc: "Pulsera de eslabones tipo reloj con broche desplegable de seguridad."
            },
            {
                id: 4,
                name: "Aretes Huggie Hoop con Zircón Brillanté",
                category: "aretes",
                price: 4200,
                oldPrice: 5600,
                img: "{{ asset('images/aretes_acero.jpg') }}",
                desc: "Argollitas clásicas de acero hipoalergénico con gema de cristal engarzada."
            },
            {
                id: 5,
                name: "Set Luan Neón: Cadena + Pulsera + Anillo",
                category: "cadenas",
                price: 18500,
                oldPrice: 24000,
                img: "{{ asset('images/cadena_acero.jpg') }}",
                desc: "El trío perfecto en acero quirúrgico 316L para lucir un brillo imponente."
            },
            {
                id: 6,
                name: "Cadena Veneciana con Dije Prisma",
                category: "cadenas",
                price: 6800,
                oldPrice: 8500,
                img: "{{ asset('images/hero_jewelry.jpg') }}",
                desc: "Eslabón veneciano de caída suave con colgante prisma rectangular."
            },
            {
                id: 7,
                name: "Anillo Sello Signature Luan",
                category: "anillos",
                price: 4900,
                oldPrice: 6500,
                img: "{{ asset('images/anillos_acero.jpg') }}",
                desc: "Anillo macizo estilo signet con frontal pulido para grabado."
            },
            {
                id: 8,
                name: "Piercing & Ear Cuff Acero 316L",
                category: "aretes",
                price: 3600,
                oldPrice: 4800,
                img: "{{ asset('images/aretes_acero.jpg') }}",
                desc: "Ear cuff a presión sin perforación y arete pasador biocompatible."
            }
        ];

        let products = (() => {
            try {
                const saved = localStorage.getItem('luan_custom_products');
                if (saved) return JSON.parse(saved);
            } catch (e) {}
            return [...defaultProducts];
        })();

        let currentCategoryFilter = 'all';

        // 1. TABS MANAGEMENT
        function switchPanelTab(tabName) {
            document.querySelectorAll('.panel-tab-view').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.sidebar-nav-btn').forEach(btn => btn.classList.remove('active'));

            const targetView = document.getElementById(`tab-${tabName}`);
            if (targetView) targetView.classList.add('active');

            const activeBtn = Array.from(document.querySelectorAll('.sidebar-nav-btn')).find(btn => 
                btn.getAttribute('onclick')?.includes(tabName)
            );
            if (activeBtn) activeBtn.classList.add('active');

            lucide.createIcons();
        }

        // 2. RENDER PRODUCTS TABLE
        function renderPanelProducts() {
            const tbody = document.getElementById('panelProductsTableBody');
            const kpiCount = document.getElementById('kpiProductsCount');
            if (kpiCount) kpiCount.textContent = products.length;
            if (!tbody) return;

            const searchQuery = (document.getElementById('prodSearchInput')?.value || '').toLowerCase();

            const filtered = products.filter(p => {
                const matchCat = (currentCategoryFilter === 'all' || p.category === currentCategoryFilter);
                const matchSearch = !searchQuery || p.name.toLowerCase().includes(searchQuery) || p.category.toLowerCase().includes(searchQuery);
                return matchCat && matchSearch;
            });

            if (filtered.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7" style="text-align: center; color: var(--text-muted); padding: 24px;">No se encontraron joyas en el catálogo.</td></tr>`;
                return;
            }

            tbody.innerHTML = filtered.map(p => `
                <tr>
                    <td>
                        <img src="${p.img}" style="width: 44px; height: 44px; border-radius: 8px; object-fit: cover; border: 1px solid var(--border-neon);" alt="${p.name}">
                    </td>
                    <td>
                        <strong>${p.name}</strong><br>
                        <small style="color: var(--text-muted);">${p.desc ? p.desc.substring(0, 48) + '...' : 'Acero 316L'}</small>
                    </td>
                    <td><span class="status-badge blue">${p.category.toUpperCase()}</span></td>
                    <td><strong style="color: var(--primary-900); font-size: 15px;">$${p.price.toLocaleString('es-AR')}</strong></td>
                    <td><span style="text-decoration: line-through; color: var(--text-muted);">$${(p.oldPrice || Math.round(p.price * 1.25)).toLocaleString('es-AR')}</span></td>
                    <td><span class="status-badge green"><i data-lucide="check" style="width: 12px;"></i> Activo</span></td>
                    <td>
                        <div style="display: flex; gap: 6px;">
                            <button class="btn-table-action" onclick="promptEditPrice(${p.id})">
                                <i data-lucide="edit-2" style="width: 13px;"></i> Precio
                            </button>
                            <button class="btn-table-action delete" onclick="deleteProduct(${p.id})">
                                <i data-lucide="trash-2" style="width: 13px;"></i> Quitar
                            </button>
                        </div>
                    </td>
                </tr>
            `).join('');

            lucide.createIcons();
        }

        function filterProductsTable() {
            renderPanelProducts();
        }

        function filterProdCategory(cat) {
            currentCategoryFilter = cat;
            renderPanelProducts();
        }

        // 3. EDIT & DELETE PRODUCT
        function promptEditPrice(id) {
            const prod = products.find(p => p.id === id);
            if (!prod) return;
            const newPrice = prompt(`Editar precio para "${prod.name}":`, prod.price);
            if (newPrice !== null && !isNaN(newPrice) && parseInt(newPrice) > 0) {
                prod.price = parseInt(newPrice);
                prod.oldPrice = Math.round(prod.price * 1.25);
                saveProducts();
                renderPanelProducts();
                showToast(`Precio de "${prod.name}" actualizado a $${prod.price.toLocaleString('es-AR')}`);
            }
        }

        function deleteProduct(id) {
            const prod = products.find(p => p.id === id);
            if (!prod) return;
            if (confirm(`¿Estás seguro de quitar "${prod.name}" del catálogo público?`)) {
                products = products.filter(p => p.id !== id);
                saveProducts();
                renderPanelProducts();
                showToast(`"${prod.name}" eliminada del catálogo`);
            }
        }

        function saveProducts() {
            localStorage.setItem('luan_custom_products', JSON.stringify(products));
        }

        // 4. NEW PRODUCT MODAL
        function openNewProductModal() {
            document.getElementById('newProductModal').classList.add('active');
            lucide.createIcons();
        }

        function closeNewProductModal() {
            document.getElementById('newProductModal').classList.remove('active');
        }

        function handleCreateProduct(e) {
            e.preventDefault();
            const name = document.getElementById('modalProdName').value.trim();
            const category = document.getElementById('modalProdCat').value;
            const price = parseInt(document.getElementById('modalProdPrice').value, 10);
            const desc = document.getElementById('modalProdDesc').value.trim();

            if (!name || isNaN(price)) {
                showToast("Por favor completa los campos");
                return;
            }

            const sampleImages = {
                cadenas: "{{ asset('images/cadena_acero.jpg') }}",
                anillos: "{{ asset('images/anillos_acero.jpg') }}",
                pulseras: "{{ asset('images/pulsera_acero.jpg') }}",
                aretes: "{{ asset('images/aretes_acero.jpg') }}"
            };

            const newProd = {
                id: Date.now(),
                name: name,
                category: category,
                price: price,
                oldPrice: Math.round(price * 1.25),
                badge: "✨ Novedad",
                img: sampleImages[category] || "{{ asset('images/hero_jewelry.jpg') }}",
                desc: desc,
                tags: [category, "acero", "316l"]
            };

            products.unshift(newProd);
            saveProducts();
            renderPanelProducts();
            closeNewProductModal();
            e.target.reset();
            showToast(`¡"${name}" agregada exitosamente a la tienda!`);
        }

        // 5. ENCARGOS / ORDERS STATUS
        function changeOrderStatus(button) {
            const tr = button.closest('tr');
            const badge = tr.querySelector('.status-badge');
            if (badge.textContent.includes('En Preparación')) {
                badge.className = 'status-badge gold';
                badge.textContent = 'En Reparto';
                showToast("Encargo actualizado: En Reparto");
            } else if (badge.textContent.includes('En Reparto')) {
                badge.className = 'status-badge green';
                badge.textContent = 'Entregado';
                showToast("Encargo actualizado: Entregado");
            } else {
                badge.className = 'status-badge blue';
                badge.textContent = 'En Preparación';
                showToast("Encargo actualizado: En Preparación");
            }
        }

        function openNewOrderModal() {
            const cliente = prompt("Nombre del Cliente:");
            if (!cliente) return;
            const producto = prompt("Accesorio de Acero pedido:");
            if (!producto) return;
            const domicilio = prompt("Domicilio de entrega:");
            const table = document.getElementById('encargosTableBody');
            
            const newRow = document.createElement('tr');
            const randId = Math.floor(Math.random() * 900) + 100;
            newRow.innerHTML = `
                <td><strong>#ENC-${randId}</strong></td>
                <td>${cliente}</td>
                <td>+54 9 11 ...</td>
                <td>${producto}</td>
                <td>${domicilio || 'A coordinar'}</td>
                <td>${new Date().toISOString().split('T')[0]}</td>
                <td><span class="status-badge blue">En Preparación</span></td>
                <td><button class="btn-table-action" onclick="changeOrderStatus(this)">Cambiar Estado</button></td>
            `;
            table.prepend(newRow);
            showToast("Encargo registrado en la base de datos");
            lucide.createIcons();
        }

        // 6. STORE SETTINGS
        function saveStoreSettings(e) {
            e.preventDefault();
            const phone = document.getElementById('cfgStorePhone').value;
            const msg = document.getElementById('cfgStoreMsg').value;
            localStorage.setItem('luan_cfg_phone', phone);
            localStorage.setItem('luan_cfg_msg', msg);
            showToast("Parámetros de la tienda guardados correctamente");
        }

        // 7. TOAST NOTIFICATION
        function showToast(msg) {
            const toast = document.getElementById('toastNotify');
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // 8. LOGOUT
        function adminLogout() {
            localStorage.removeItem('luan_user_session');
            window.location.href = "{{ route('home') }}";
        }

        // 9. CHECK AUTHENTICATION
        document.addEventListener('DOMContentLoaded', () => {
            // Ensure session exists
            const session = localStorage.getItem('luan_user_session');
            if (!session) {
                // Set default admin session so accessing /panel directly works seamlessly
                localStorage.setItem('luan_user_session', JSON.stringify({
                    name: 'Administrador Luan',
                    email: 'admin@luan.com',
                    role: 'admin',
                    avatar: '👑'
                }));
            }

            renderPanelProducts();
            lucide.createIcons();
        });
    </script>
</body>
</html>
