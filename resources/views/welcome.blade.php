<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luan Acero Quirúrgico | Joyería Exclusiva 316L & Estilo Neón</title>
    <meta name="description" content="Descubre la colección de joyas de acero quirúrgico 316L de Luan. Anillos, cadenas, pulseras y aretes hipoalergénicos con diseño moderno y brillo eterno.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;900&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        /* ==========================================================
           PALETA DE COLORES - Diseño.txt & Variables LED
           ========================================================== */
        :root {
            --primary-50: #e5fffc;
            --primary-100: #ccfff8;
            --primary-200: #99fff1;
            --primary-300: #66ffeb;
            --primary-400: #33ffe4;
            --primary-500: #ccfff8;
            --primary-600: #99fff1;
            --primary-700: #66ffeb;
            --primary-800: #33ffe4;
            --primary-900: #00ffdd;

            /* Deep Space & Dark luxury base */
            --bg-dark: #05090e;
            --bg-card: rgba(9, 18, 28, 0.75);
            --bg-card-hover: rgba(14, 28, 44, 0.85);
            --border-neon: rgba(0, 255, 221, 0.35);
            --border-neon-bright: rgba(0, 255, 221, 0.9);
            --text-main: #f0fdfc;
            --text-muted: #8ca2b0;
            --accent-glow: rgba(0, 255, 221, 0.45);
            --led-shadow: 0 0 15px rgba(0, 255, 221, 0.45), 0 0 30px rgba(0, 255, 221, 0.2);
            --led-shadow-lg: 0 0 25px rgba(0, 255, 221, 0.8), 0 0 50px rgba(51, 255, 228, 0.35);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            overflow-x: hidden;
            position: relative;
            line-height: 1.6;
        }

        h1, h2, h3, .brand-font {
            font-family: 'Cinzel', serif;
            letter-spacing: 1px;
        }

        /* Starfield Canvas Background */
        #starfield-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            pointer-events: none;
        }

        /* Glowing LED Ambient Gradients */
        .ambient-glow {
            position: fixed;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.15;
            pointer-events: none;
            z-index: 0;
            animation: floatGlow 12s ease-in-out infinite alternate;
        }
        .ambient-1 {
            top: -10%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, var(--primary-900), transparent 70%);
        }
        .ambient-2 {
            bottom: 10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, var(--primary-400), transparent 70%);
            animation-duration: 16s;
        }
        .ambient-3 {
            top: 45%;
            left: 40%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, var(--primary-700), transparent 70%);
            animation-duration: 20s;
        }

        @keyframes floatGlow {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(50px, 40px) scale(1.15); }
        }

        /* LED Neon Tube Lines */
        .led-neon-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-900), var(--primary-300), var(--primary-900), transparent);
            box-shadow: 0 0 10px var(--primary-900), 0 0 20px var(--primary-400);
            position: relative;
            overflow: hidden;
        }
        .led-neon-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 40%;
            height: 100%;
            background: linear-gradient(90deg, transparent, #ffffff, transparent);
            animation: pulseLine 3s infinite;
        }
        @keyframes pulseLine {
            0% { left: -100%; }
            100% { left: 200%; }
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 2;
        }

        /* ==========================================================
           HEADER & NAVIGATION
           ========================================================== */
        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(5, 9, 14, 0.82);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(0, 255, 221, 0.18);
            transition: all 0.3s ease;
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #fff;
        }

        .logo-symbol {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(0, 255, 221, 0.2), rgba(0, 0, 0, 0.6));
            border: 1.5px solid var(--primary-900);
            box-shadow: var(--led-shadow);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-900);
            font-weight: 800;
            font-size: 20px;
            font-family: 'Cinzel', serif;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .logo:hover .logo-symbol {
            transform: scale(1.08) rotate(3deg);
            box-shadow: var(--led-shadow-lg);
        }

        .logo-text h1 {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 2px;
            background: linear-gradient(90deg, #ffffff, var(--primary-200), var(--primary-900));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
        }

        .logo-text span {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--primary-400);
            display: block;
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 6px 0;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary-900);
            text-shadow: 0 0 10px rgba(0, 255, 221, 0.6);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: var(--primary-900);
            box-shadow: 0 0 8px var(--primary-900);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after, .nav-links a.active::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .btn-neon-icon {
            background: rgba(10, 22, 34, 0.7);
            border: 1px solid rgba(0, 255, 221, 0.3);
            color: var(--primary-100);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .btn-neon-icon:hover {
            border-color: var(--primary-900);
            box-shadow: var(--led-shadow);
            color: #fff;
            transform: translateY(-2px);
        }

        .cart-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            background: var(--primary-900);
            color: #05090e;
            font-size: 11px;
            font-weight: 800;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 8px var(--primary-900);
        }

        .btn-primary-neon {
            background: linear-gradient(135deg, var(--primary-900), #00c4aa);
            color: #04080d;
            border: none;
            padding: 10px 22px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.5px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(0, 255, 221, 0.5);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary-neon:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 0 25px rgba(0, 255, 221, 0.85);
            background: linear-gradient(135deg, #33ffe4, #00ffdd);
        }

        /* ==========================================================
           HERO SECTION
           ========================================================== */
        .hero {
            padding: 80px 0 60px;
            position: relative;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 48px;
            align-items: center;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 30px;
            background: rgba(0, 255, 221, 0.08);
            border: 1px solid var(--border-neon);
            color: var(--primary-300);
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.15);
        }

        .hero-tag .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-900);
            box-shadow: 0 0 8px var(--primary-900);
            animation: blinkDot 1.5s infinite;
        }

        @keyframes blinkDot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.7); }
        }

        .hero-title {
            font-size: 52px;
            line-height: 1.15;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero-title .glow-word {
            color: #ffffff;
            text-shadow: 0 0 20px rgba(0, 255, 221, 0.6), 0 0 40px rgba(0, 255, 221, 0.3);
            background: linear-gradient(90deg, #ffffff, var(--primary-300), var(--primary-900));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            font-size: 18px;
            color: var(--text-muted);
            margin-bottom: 36px;
            max-width: 540px;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-outline-neon {
            background: rgba(10, 20, 30, 0.6);
            color: var(--primary-200);
            border: 1.5px solid var(--border-neon);
            padding: 10px 24px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            backdrop-filter: blur(8px);
        }

        .btn-outline-neon:hover {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.12);
            color: #fff;
            box-shadow: var(--led-shadow);
            transform: translateY(-2px);
        }

        .hero-badges {
            display: flex;
            gap: 24px;
            margin-top: 40px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .hero-badge-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hero-badge-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(0, 255, 221, 0.1);
            border: 1px solid rgba(0, 255, 221, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-900);
            font-size: 16px;
        }

        .hero-badge-item span {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.3;
        }
        .hero-badge-item strong {
            color: #fff;
            display: block;
        }

        /* Hero Showcase Showcase Card with LED Frame */
        .hero-visual {
            position: relative;
        }

        .hero-card-frame {
            position: relative;
            background: var(--bg-card);
            border-radius: 24px;
            padding: 12px;
            border: 1.5px solid var(--border-neon);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), var(--led-shadow);
            overflow: hidden;
            backdrop-filter: blur(12px);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .hero-card-frame:hover {
            transform: translateY(-6px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8), var(--led-shadow-lg);
            border-color: var(--primary-900);
        }

        .hero-img-container {
            width: 100%;
            height: 380px;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
        }

        .hero-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .hero-card-frame:hover .hero-img-container img {
            transform: scale(1.05);
        }

        .hero-overlay-tag {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(4, 9, 14, 0.88);
            backdrop-filter: blur(12px);
            border: 1px solid var(--border-neon);
            border-radius: 16px;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-overlay-tag h4 {
            font-size: 17px;
            color: #fff;
            margin-bottom: 2px;
        }

        .hero-overlay-tag p {
            font-size: 13px;
            color: var(--primary-300);
        }

        .hero-price-tag {
            font-size: 22px;
            font-weight: 800;
            color: var(--primary-900);
            text-shadow: 0 0 10px rgba(0, 255, 221, 0.5);
        }

        /* Floating mini badge */
        .floating-led-badge {
            position: absolute;
            top: -15px;
            right: -15px;
            background: #050b11;
            border: 1.5px solid var(--primary-900);
            box-shadow: var(--led-shadow);
            border-radius: 30px;
            padding: 8px 16px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            z-index: 5;
            animation: floatSlow 4s ease-in-out infinite;
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        /* ==========================================================
           INTERACTIVE RECOMMENDER (Quiz "¿Qué accesorio buscas?")
           ========================================================== */
        .quiz-section {
            padding: 80px 0;
            position: relative;
        }

        .section-header {
            text-align: center;
            max-width: 680px;
            margin: 0 auto 48px;
        }

        .section-tag {
            display: inline-block;
            padding: 4px 14px;
            background: rgba(0, 255, 221, 0.1);
            border: 1px solid var(--border-neon);
            color: var(--primary-300);
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 12px;
        }

        .section-title {
            font-size: 38px;
            margin-bottom: 14px;
            color: #fff;
        }

        .section-title span {
            color: var(--primary-900);
            text-shadow: 0 0 15px rgba(0, 255, 221, 0.4);
        }

        .section-subtitle {
            color: var(--text-muted);
            font-size: 16px;
        }

        .quiz-card-wrapper {
            background: linear-gradient(160deg, rgba(12, 24, 38, 0.85), rgba(5, 11, 18, 0.95));
            border: 1.5px solid var(--border-neon);
            border-radius: 24px;
            padding: 36px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7), var(--led-shadow);
            backdrop-filter: blur(16px);
            position: relative;
            overflow: hidden;
        }

        .quiz-steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 36px;
        }

        .quiz-step-box {
            background: rgba(6, 14, 23, 0.6);
            border: 1px solid rgba(0, 255, 221, 0.15);
            border-radius: 16px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .quiz-step-box:hover {
            border-color: rgba(0, 255, 221, 0.4);
        }

        .quiz-step-title {
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .step-num {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: var(--primary-900);
            color: #04080d;
            font-size: 13px;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .quiz-opt-btn {
            background: rgba(12, 26, 40, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            padding: 10px 14px;
            color: var(--text-main);
            font-size: 14px;
            text-align: left;
            cursor: pointer;
            transition: all 0.25s ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .quiz-opt-btn:hover {
            border-color: var(--primary-400);
            background: rgba(0, 255, 221, 0.08);
            transform: translateX(4px);
        }

        .quiz-opt-btn.active {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.16);
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 255, 221, 0.3);
            font-weight: 600;
        }

        .quiz-opt-btn.active::after {
            content: '✓';
            color: var(--primary-900);
            font-weight: 900;
        }

        .quiz-recommendation-result {
            background: rgba(4, 9, 14, 0.8);
            border: 1.5px solid var(--primary-900);
            box-shadow: var(--led-shadow);
            border-radius: 18px;
            padding: 24px;
            display: flex;
            gap: 24px;
            align-items: center;
            animation: fadeIn 0.4s ease;
        }

        .rec-img-wrap {
            width: 130px;
            height: 130px;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--border-neon);
            flex-shrink: 0;
        }

        .rec-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .rec-content h4 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 6px;
        }

        .rec-content p {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 12px;
        }

        .rec-opinion-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 255, 221, 0.1);
            border: 1px solid var(--border-neon);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            color: var(--primary-200);
            margin-bottom: 12px;
        }

        /* ==========================================================
           SEARCH & GALLERY (CATALOGO DE PRODUCTOS)
           ========================================================== */
        .catalog-section {
            padding: 80px 0;
            position: relative;
        }

        .search-filter-panel {
            background: var(--bg-card);
            border: 1px solid var(--border-neon);
            border-radius: 20px;
            padding: 20px 24px;
            margin-bottom: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 15px rgba(0, 255, 221, 0.1);
            backdrop-filter: blur(12px);
        }

        .search-main-row {
            display: flex;
            gap: 16px;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .search-input-box {
            flex: 1;
            min-width: 280px;
            position: relative;
        }

        .search-input-box i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-300);
        }

        .search-input-box input {
            width: 100%;
            background: rgba(5, 12, 20, 0.8);
            border: 1.5px solid rgba(0, 255, 221, 0.25);
            border-radius: 30px;
            padding: 12px 20px 12px 46px;
            color: #fff;
            font-size: 15px;
            font-family: inherit;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input-box input:focus {
            border-color: var(--primary-900);
            box-shadow: 0 0 15px rgba(0, 255, 221, 0.4);
            background: rgba(5, 14, 24, 0.95);
        }

        .search-input-box input::placeholder {
            color: #627b8a;
        }

        .price-filter-box {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(5, 12, 20, 0.8);
            border: 1px solid rgba(0, 255, 221, 0.2);
            border-radius: 30px;
            padding: 8px 18px;
            font-size: 14px;
            color: var(--text-muted);
        }

        .price-filter-box input[type="range"] {
            accent-color: var(--primary-900);
            cursor: pointer;
        }

        .category-tabs {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 6px;
        }

        .category-tab-btn {
            background: rgba(10, 22, 34, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: var(--text-muted);
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.3s ease;
        }

        .category-tab-btn:hover {
            color: #fff;
            border-color: var(--primary-400);
        }

        .category-tab-btn.active {
            background: rgba(0, 255, 221, 0.15);
            border-color: var(--primary-900);
            color: var(--primary-900);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.3);
            font-weight: 700;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 28px;
        }

        .product-card {
            background: var(--bg-card);
            border: 1px solid rgba(0, 255, 221, 0.2);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.2, 0.8, 0.2, 1);
            position: relative;
            display: flex;
            flex-direction: column;
            backdrop-filter: blur(8px);
        }

        .product-card:hover {
            transform: translateY(-8px);
            border-color: var(--primary-900);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.8), var(--led-shadow);
        }

        .product-card-thumb {
            position: relative;
            height: 250px;
            background: #070d14;
            overflow: hidden;
        }

        .product-card-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-card-thumb img {
            transform: scale(1.08);
        }

        .product-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(4, 9, 14, 0.85);
            border: 1px solid var(--primary-900);
            color: var(--primary-300);
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
            box-shadow: 0 0 8px rgba(0, 255, 221, 0.3);
            z-index: 2;
        }

        .product-quick-btn {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(5, 11, 18, 0.9);
            border: 1px solid var(--primary-900);
            color: #fff;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: var(--led-shadow);
            transition: all 0.3s ease;
            white-space: nowrap;
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .product-card:hover .product-quick-btn {
            bottom: 14px;
        }

        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-category {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary-400);
            margin-bottom: 6px;
            font-weight: 600;
        }

        .product-name {
            font-size: 18px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .product-desc {
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 16px;
            flex-grow: 1;
        }

        .product-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
        }

        .product-price {
            display: flex;
            flex-direction: column;
        }

        .price-old {
            font-size: 12px;
            color: #677b88;
            text-decoration: line-through;
        }

        .price-current {
            font-size: 20px;
            font-weight: 800;
            color: var(--primary-900);
            text-shadow: 0 0 10px rgba(0, 255, 221, 0.4);
        }

        .btn-add-cart {
            background: linear-gradient(135deg, rgba(0, 255, 221, 0.2), rgba(0, 255, 221, 0.05));
            border: 1px solid var(--border-neon);
            color: var(--primary-100);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-add-cart:hover {
            background: var(--primary-900);
            color: #04080d;
            border-color: var(--primary-900);
            box-shadow: 0 0 15px var(--primary-900);
            transform: scale(1.1);
        }

        /* ==========================================================
           STEEL BENEFITS SECTION (POR QUÉ ACERO QUIRÚRGICO)
           ========================================================== */
        .benefits-section {
            padding: 70px 0;
            background: rgba(3, 8, 14, 0.6);
            border-top: 1px solid rgba(0, 255, 221, 0.1);
            border-bottom: 1px solid rgba(0, 255, 221, 0.1);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
        }

        .benefit-card {
            background: rgba(8, 18, 28, 0.6);
            border: 1px solid rgba(0, 255, 221, 0.18);
            border-radius: 18px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .benefit-card:hover {
            border-color: var(--primary-900);
            box-shadow: var(--led-shadow);
            transform: translateY(-4px);
        }

        .benefit-icon-box {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background: rgba(0, 255, 221, 0.12);
            border: 1px solid var(--primary-900);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-900);
            margin: 0 auto 16px;
        }

        .benefit-card h4 {
            font-size: 18px;
            color: #fff;
            margin-bottom: 8px;
        }

        .benefit-card p {
            font-size: 14px;
            color: var(--text-muted);
        }

        /* ==========================================================
           REVIEWS & OPINIONS SECTION
           ========================================================== */
        .reviews-section {
            padding: 80px 0;
            position: relative;
        }

        .reviews-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }

        .reviews-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review-card {
            background: var(--bg-card);
            border: 1px solid rgba(0, 255, 221, 0.2);
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
        }

        .review-card:hover {
            border-color: var(--primary-400);
            box-shadow: 0 0 15px rgba(0, 255, 221, 0.25);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .reviewer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-900), #083b38);
            color: #04080d;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .reviewer-name {
            font-weight: 700;
            color: #fff;
            font-size: 15px;
        }

        .reviewer-tag {
            font-size: 12px;
            color: var(--primary-300);
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .stars-row {
            color: #ffd700;
            font-size: 14px;
            display: flex;
            gap: 2px;
        }

        .review-body {
            font-size: 14px;
            color: #c2d6e3;
            line-height: 1.5;
            font-style: italic;
        }

        .review-accessory {
            margin-top: 10px;
            font-size: 12px;
            color: var(--primary-400);
            font-weight: 600;
        }

        /* Review Form Box */
        .review-form-card {
            background: linear-gradient(145deg, rgba(12, 24, 38, 0.9), rgba(5, 11, 18, 0.95));
            border: 1.5px solid var(--border-neon);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7), var(--led-shadow);
        }

        .review-form-card h3 {
            font-size: 22px;
            color: #fff;
            margin-bottom: 8px;
        }

        .review-form-card p {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 13px;
            color: var(--text-main);
            font-weight: 600;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            background: rgba(5, 12, 20, 0.8);
            border: 1px solid rgba(0, 255, 221, 0.25);
            border-radius: 12px;
            padding: 12px 16px;
            color: #fff;
            font-size: 14px;
            font-family: inherit;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-900);
            box-shadow: 0 0 10px rgba(0, 255, 221, 0.3);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 90px;
        }

        .rating-select-group {
            display: flex;
            gap: 10px;
            margin-top: 6px;
        }

        .star-rating-btn {
            background: transparent;
            border: none;
            color: #526674;
            font-size: 24px;
            cursor: pointer;
            transition: color 0.2s ease, transform 0.2s ease;
        }

        .star-rating-btn:hover, .star-rating-btn.active {
            color: #ffd700;
            transform: scale(1.15);
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
        }

        /* ==========================================================
           MODALS (Quick View & Cart)
           ========================================================== */
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
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }

        .modal-content-box {
            background: linear-gradient(145deg, #0a1624, #050b12);
            border: 1.5px solid var(--border-neon-bright);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9), var(--led-shadow-lg);
            border-radius: 24px;
            max-width: 780px;
            width: 100%;
            padding: 32px;
            position: relative;
            animation: modalScale 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            max-height: 90vh;
            overflow-y: auto;
        }

        @keyframes modalScale {
            0% { transform: scale(0.85); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .modal-close-btn {
            position: absolute;
            top: 18px;
            right: 18px;
            background: rgba(0, 255, 221, 0.1);
            border: 1px solid var(--border-neon);
            color: #fff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .modal-close-btn:hover {
            background: var(--primary-900);
            color: #04080d;
            box-shadow: 0 0 10px var(--primary-900);
        }

        .quick-view-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            align-items: center;
        }

        .modal-img-wrap {
            height: 320px;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--border-neon);
        }

        .modal-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Cart Drawer / Modal */
        .cart-items-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
            max-height: 280px;
            overflow-y: auto;
        }

        .cart-item-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px;
            background: rgba(8, 18, 28, 0.7);
            border: 1px solid rgba(0, 255, 221, 0.15);
            border-radius: 12px;
        }

        .cart-item-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cart-item-thumb {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: cover;
        }

        .cart-total-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 18px;
            font-weight: 700;
        }

        /* ==========================================================
           FOOTER
           ========================================================== */
        footer {
            background: #03060a;
            border-top: 1px solid rgba(0, 255, 221, 0.15);
            padding: 60px 0 30px;
            position: relative;
            z-index: 10;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 16px;
            color: #fff;
            margin-bottom: 18px;
            position: relative;
            display: inline-block;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            bottom: -6px;
            left: 0;
            width: 25px;
            height: 2px;
            background: var(--primary-900);
            box-shadow: 0 0 6px var(--primary-900);
        }

        .footer-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-col ul a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            transition: all 0.25s ease;
        }

        .footer-col ul a:hover {
            color: var(--primary-300);
            padding-left: 6px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: #5f7584;
            font-size: 13px;
        }

        /* Toast notification */
        .toast-notify {
            position: fixed;
            bottom: 96px;
            right: 28px;
            background: rgba(6, 14, 22, 0.95);
            border: 1.5px solid var(--primary-900);
            box-shadow: var(--led-shadow-lg);
            border-radius: 14px;
            padding: 14px 20px;
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

        /* ==========================================================
           WHATSAPP (ICONO EN NAV & BOTÓN FLOTANTE)
           ========================================================== */
        .btn-whatsapp-icon {
            color: #25d366;
            border-color: rgba(37, 211, 102, 0.45);
        }

        .btn-whatsapp-icon:hover {
            border-color: #25d366;
            box-shadow: 0 0 16px rgba(37, 211, 102, 0.6);
            color: #ffffff;
            background: rgba(37, 211, 102, 0.15);
            transform: translateY(-2px);
        }

        .floating-whatsapp-btn {
            position: fixed;
            bottom: 28px;
            right: 28px;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: linear-gradient(135deg, #25d366, #128c7e);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 20px rgba(37, 211, 102, 0.65), 0 8px 24px rgba(0, 0, 0, 0.6);
            z-index: 990;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .floating-whatsapp-btn:hover {
            transform: scale(1.1) rotate(-8deg);
            box-shadow: 0 0 30px rgba(37, 211, 102, 0.9), 0 12px 28px rgba(0, 0, 0, 0.7);
            color: #ffffff;
        }

        .whatsapp-pulse-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid #25d366;
            animation: wspPulse 2s infinite ease-out;
            pointer-events: none;
        }

        @keyframes wspPulse {
            0% { transform: scale(1); opacity: 0.9; }
            100% { transform: scale(1.65); opacity: 0; }
        }

        .floating-whatsapp-tooltip {
            position: absolute;
            right: 70px;
            background: rgba(5, 12, 18, 0.95);
            border: 1px solid rgba(37, 211, 102, 0.6);
            box-shadow: 0 0 15px rgba(37, 211, 102, 0.3), 0 8px 20px rgba(0,0,0,0.6);
            color: #e5fffc;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
            pointer-events: none;
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.3s ease;
        }

        .floating-whatsapp-btn:hover .floating-whatsapp-tooltip {
            opacity: 1;
            transform: translateX(0);
        }

        /* ==========================================================
           AUTH / MODAL INICIO DE SESIÓN
           ========================================================== */
        .auth-modal-box {
            max-width: 460px;
            width: 100%;
            background: linear-gradient(145deg, #091523, #04080e);
            border: 1.5px solid var(--border-neon-bright);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.95), var(--led-shadow-lg);
            border-radius: 24px;
            padding: 32px;
            position: relative;
            animation: modalScale 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            max-height: 92vh;
            overflow-y: auto;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 22px;
        }

        .auth-logo-badge {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: linear-gradient(135deg, rgba(0, 255, 221, 0.2), rgba(0, 0, 0, 0.7));
            border: 1.5px solid var(--primary-900);
            box-shadow: var(--led-shadow);
            color: var(--primary-900);
            font-weight: 800;
            font-size: 24px;
            font-family: 'Cinzel', serif;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
        }

        .auth-header h3 {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .auth-header p {
            font-size: 13px;
            color: var(--text-muted);
        }

        .auth-tabs-nav {
            display: flex;
            background: rgba(10, 22, 34, 0.7);
            padding: 4px;
            border-radius: 14px;
            border: 1px solid rgba(0, 255, 221, 0.2);
            margin-bottom: 22px;
            gap: 4px;
        }

        .auth-tab-btn {
            flex: 1;
            padding: 10px 14px;
            background: transparent;
            border: none;
            color: var(--text-muted);
            font-size: 14px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Outfit', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .auth-tab-btn.active {
            background: linear-gradient(135deg, rgba(0, 255, 221, 0.25), rgba(0, 196, 170, 0.15));
            color: #ffffff;
            border: 1px solid var(--border-neon);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.25);
        }

        .auth-field {
            margin-bottom: 16px;
            text-align: left;
        }

        .auth-field label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            color: var(--primary-100);
            margin-bottom: 6px;
        }

        .auth-input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .auth-input-wrap .field-icon {
            position: absolute;
            left: 14px;
            color: var(--primary-400);
            width: 18px;
            height: 18px;
            pointer-events: none;
        }

        .auth-input {
            width: 100%;
            background: rgba(14, 25, 38, 0.8);
            border: 1px solid rgba(0, 255, 221, 0.25);
            border-radius: 12px;
            padding: 12px 42px 12px 42px;
            color: #ffffff;
            font-size: 14px;
            font-family: 'Outfit', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .auth-input:focus {
            border-color: var(--primary-900);
            box-shadow: 0 0 15px rgba(0, 255, 221, 0.4);
            background: rgba(18, 33, 50, 0.95);
        }

        .auth-pw-toggle {
            position: absolute;
            right: 14px;
            background: none;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }

        .auth-pw-toggle:hover {
            color: var(--primary-900);
        }

        .auth-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 13px;
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .auth-checkbox-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            user-select: none;
        }

        .auth-checkbox-label input[type="checkbox"] {
            accent-color: var(--primary-900);
            cursor: pointer;
        }

        .auth-link {
            color: var(--primary-300);
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .auth-link:hover {
            color: var(--primary-900);
            text-decoration: underline;
            text-shadow: 0 0 8px rgba(0, 255, 221, 0.5);
        }

        .auth-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 22px 0 18px;
            color: var(--text-muted);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .auth-divider::before, .auth-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .auth-social-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .btn-social {
            background: rgba(14, 25, 38, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #fff;
            padding: 10px 14px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Outfit', sans-serif;
        }

        .btn-social:hover {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.1);
            color: var(--primary-100);
            box-shadow: 0 0 12px rgba(0, 255, 221, 0.2);
            transform: translateY(-2px);
        }

        /* Vista de perfil logueado en modal */
        .auth-profile-box {
            text-align: center;
            padding: 10px 0;
        }

        .auth-profile-avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-900), #00a896);
            color: #04080d;
            font-size: 28px;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--led-shadow-lg);
            margin-bottom: 14px;
        }

        .auth-profile-name {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 4px;
        }

        .auth-profile-email {
            font-size: 14px;
            color: var(--primary-300);
            margin-bottom: 20px;
        }

        .auth-profile-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 24px;
        }

        .auth-stat-card {
            background: rgba(14, 25, 38, 0.7);
            border: 1px solid rgba(0, 255, 221, 0.2);
            border-radius: 12px;
            padding: 12px;
        }

        .auth-stat-value {
            font-size: 18px;
            font-weight: 700;
            color: var(--primary-900);
        }

        .auth-stat-label {
            font-size: 12px;
            color: var(--text-muted);
        }

        /* ==========================================================
           ADMIN CARD & PANEL STYLES
           ========================================================== */
        .admin-credentials-card {
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.12), rgba(0, 255, 221, 0.08));
            border: 1.5px dashed rgba(255, 215, 0, 0.6);
            border-radius: 14px;
            padding: 12px 16px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.1);
        }

        .admin-credentials-card:hover {
            transform: translateY(-2px);
            border-color: #ffd700;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(0, 255, 221, 0.15));
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        .btn-autofill-admin {
            background: rgba(255, 215, 0, 0.2);
            border: 1px solid #ffd700;
            color: #ffd700;
            font-size: 11px;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 20px;
            cursor: pointer;
            white-space: nowrap;
            transition: all 0.2s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-autofill-admin:hover {
            background: #ffd700;
            color: #04080d;
            box-shadow: 0 0 10px #ffd700;
        }

        .admin-crown-badge {
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.25), rgba(255, 140, 0, 0.25));
            border: 1.5px solid #ffd700;
            color: #ffd700;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 12px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
        }

        .admin-action-btn {
            background: rgba(14, 25, 38, 0.85);
            border: 1px solid var(--border-neon);
            color: var(--primary-100);
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .admin-action-btn:hover {
            border-color: var(--primary-900);
            background: rgba(0, 255, 221, 0.15);
            color: #fff;
            transform: translateY(-2px);
        }

        .admin-product-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 12px;
            background: rgba(8, 16, 26, 0.8);
            border: 1px solid rgba(0, 255, 221, 0.15);
            border-radius: 10px;
            margin-bottom: 8px;
            gap: 10px;
        }

        .admin-product-thumb {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid rgba(0, 255, 221, 0.3);
        }

        /* ==========================================================
           RESPONSIVE STYLES
           ========================================================== */
        @media (max-width: 992px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            .hero-title { font-size: 40px; }
            .hero-description { margin: 0 auto 30px; }
            .hero-buttons { justify-content: center; }
            .hero-badges { justify-content: center; }
            .quiz-steps { grid-template-columns: 1fr; }
            .reviews-layout { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .quick-view-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 640px) {
            .hero-title { font-size: 32px; }
            .nav-links { display: none; }
            .footer-grid { grid-template-columns: 1fr; }
            .quiz-recommendation-result { flex-direction: column; text-align: center; }
            .floating-whatsapp-btn {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            .floating-whatsapp-tooltip {
                display: none;
            }
            .toast-notify {
                bottom: 80px;
                right: 16px;
                left: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Starfield Interactive Canvas -->
    <canvas id="starfield-canvas"></canvas>

    <!-- Ambient Neon Glowing Orbs -->
    <div class="ambient-glow ambient-1"></div>
    <div class="ambient-glow ambient-2"></div>
    <div class="ambient-glow ambient-3"></div>

    <!-- HEADER / NAVIGATION -->
    <header>
        <div class="container">
            <div class="nav-inner">
                <a href="#" class="logo">
                    <div class="logo-symbol">L</div>
                    <div class="logo-text">
                        <h1>LUAN</h1>
                        <span>Acero Quirúrgico 316L</span>
                    </div>
                </a>

                <ul class="nav-links">
                    <li><a href="#inicio" class="active">Inicio</a></li>
                    <li><a href="#asesor">Asesor de Joyas</a></li>
                    <li><a href="#catalogo">Catálogo & Precios</a></li>
                    <li><a href="#beneficios">Beneficios</a></li>
                    <li><a href="#opiniones">Opiniones</a></li>
                </ul>

                <div class="nav-actions">
                    <a href="https://wa.me/?text=Hola%20Luan%20Acero%20Quir%C3%BArgico,%20quiero%20consultar%20por%20sus%20accesorios" target="_blank" class="btn-neon-icon btn-whatsapp-icon" title="Consultas rápidas por WhatsApp">
                        <i data-lucide="message-circle"></i>
                    </a>
                    <button class="btn-neon-icon" id="cartOpenBtn" title="Ver Carrito de Compras">
                        <i data-lucide="shopping-bag"></i>
                        <span class="cart-badge" id="cartBadgeCount">0</span>
                    </button>
                    <button class="btn-primary-neon" id="loginOpenBtn" onclick="openLoginModal()" title="Acceder a tu cuenta de cliente">
                        <i data-lucide="user" id="loginBtnIcon"></i>
                        <span id="loginBtnText">Iniciar Sesión</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="led-neon-line"></div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero" id="inicio">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-text-content">
                    <div class="hero-tag">
                        <span class="dot"></span>
                        <span>Colección Neón & Brillo Eterno</span>
                    </div>
                    <h1 class="hero-title">
                        Joyería en Acero Quirúrgico <span class="glow-word">Inoxidable & LED Style</span>
                    </h1>
                    <p class="hero-description">
                        Piezas exclusivas en Acero 316L de máxima pureza. 100% hipoalergénicas, resistentes al agua, perfume y sudor. Diseños que elevan tu presencia de día y de noche.
                    </p>

                    <div class="hero-buttons">
                        <a href="#catalogo" class="btn-primary-neon">
                            <i data-lucide="sparkles"></i>
                            <span>Ver Joyas & Precios</span>
                        </a>
                        <a href="#asesor" class="btn-outline-neon">
                            <i data-lucide="compass"></i>
                            <span>Asesor: ¿Qué accesorio buscas?</span>
                        </a>
                    </div>

                    <div class="hero-badges">
                        <div class="hero-badge-item">
                            <div class="hero-badge-icon"><i data-lucide="shield-check"></i></div>
                            <div>
                                <strong>Acero 316L</strong>
                                <span>No se oxida jamás</span>
                            </div>
                        </div>
                        <div class="hero-badge-item">
                            <div class="hero-badge-icon"><i data-lucide="droplet"></i></div>
                            <div>
                                <strong>Waterproof</strong>
                                <span>Resiste agua y sudor</span>
                            </div>
                        </div>
                        <div class="hero-badge-item">
                            <div class="hero-badge-icon"><i data-lucide="heart"></i></div>
                            <div>
                                <strong>Hipoalergénico</strong>
                                <span>Cero irritaciones</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="floating-led-badge">
                        <i data-lucide="award" style="color: var(--primary-900);"></i>
                        <span>Garantía de Calidad 316L</span>
                    </div>

                    <div class="hero-card-frame">
                        <div class="hero-img-container">
                            <img src="{{ asset('images/hero_jewelry.jpg') }}" alt="Colección Luan Acero Quirúrgico">
                        </div>
                        <div class="hero-overlay-tag">
                            <div>
                                <h4>Set Luan Luxury Steel</h4>
                                <p>Cadena Cubana + Pulsera + Anillos Facetados</p>
                            </div>
                            <div class="hero-price-tag">$18.500</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION ASESOR / INTERACTIVE RECOMMENDER -->
    <section class="quiz-section" id="asesor">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i data-lucide="help-circle" style="width: 14px; display: inline;"></i> Recomendador Inteligente</span>
                <h2 class="section-title">¿Qué clase de accesorio de <span>acero quirúrgico buscas?</span></h2>
                <p class="section-subtitle">Selecciona tus preferencias y nuestro asesor virtual te dará la mejor recomendación y opinión experta sobre tu accesorio ideal.</p>
            </div>

            <div class="quiz-card-wrapper">
                <div class="quiz-steps">
                    <!-- Step 1 -->
                    <div class="quiz-step-box">
                        <div class="quiz-step-title">
                            <span class="step-num">1</span>
                            <span>¿Para quién es la joya?</span>
                        </div>
                        <div class="quiz-options">
                            <button class="quiz-opt-btn active" onclick="selectQuiz(1, 'hombre', this)">
                                <span>Hombre</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(1, 'mujer', this)">
                                <span>Mujer</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(1, 'unisex', this)">
                                <span>Unisex / Parejas</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(1, 'regalo', this)">
                                <span>Regalo Especial</span>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="quiz-step-box">
                        <div class="quiz-step-title">
                            <span class="step-num">2</span>
                            <span>¿Cuál es tu estilo u ocasión?</span>
                        </div>
                        <div class="quiz-options">
                            <button class="quiz-opt-btn active" onclick="selectQuiz(2, 'urbano', this)">
                                <span>Urbano & Streetwear</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(2, 'elegante', this)">
                                <span>Elegante & Formal</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(2, 'minimalista', this)">
                                <span>Minimalista de uso diario</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(2, 'rock', this)">
                                <span>Imponente & Atrevido</span>
                            </button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="quiz-step-box">
                        <div class="quiz-step-title">
                            <span class="step-num">3</span>
                            <span>¿Qué accesorio prefieres?</span>
                        </div>
                        <div class="quiz-options">
                            <button class="quiz-opt-btn active" onclick="selectQuiz(3, 'cadena', this)">
                                <span>Cadena / Collar</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(3, 'anillo', this)">
                                <span>Anillo Quirúrgico</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(3, 'pulsera', this)">
                                <span>Pulsera / Brazalete</span>
                            </button>
                            <button class="quiz-opt-btn" onclick="selectQuiz(3, 'aretes', this)">
                                <span>Aretes / Piercings</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Live Recommendation Box -->
                <div class="quiz-recommendation-result" id="quizResultBox">
                    <div class="rec-img-wrap">
                        <img id="recImg" src="{{ asset('images/cadena_acero.jpg') }}" alt="Recomendación">
                    </div>
                    <div class="rec-content">
                        <div class="rec-opinion-badge">
                            <i data-lucide="thumbs-up" style="width: 14px;"></i>
                            <span id="recOpinionLabel">Opinión del Joyero: Excelente para impacto visual</span>
                        </div>
                        <h4 id="recTitle">Cadena Cubana Premium 316L (8mm)</h4>
                        <p id="recDesc">Eslabones macizos pulidos a espejo en acero quirúrgico 316L. Ideal para destacar en looks urbanos, no se decolora con el sudor ni el uso continuo.</p>
                        <div style="display: flex; gap: 14px; align-items: center; flex-wrap: wrap;">
                            <span id="recPrice" style="font-size: 22px; font-weight: 800; color: var(--primary-900);">$8.900</span>
                            <button class="btn-primary-neon" onclick="addRecommendedToCart()">
                                <i data-lucide="shopping-cart"></i>
                                <span>Pedir este accesorio</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATALOG & SEARCH GALLERY SECTION -->
    <section class="catalog-section" id="catalogo">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i data-lucide="grid" style="width: 14px; display: inline;"></i> Galería & Tienda</span>
                <h2 class="section-title">Nuestras Joyas con <span>Precios & Calidad</span></h2>
                <p class="section-subtitle">Explora cada accesorio de acero quirúrgico 316L con fotos reales, precios transparentes y garantía de por vida.</p>
            </div>

            <!-- Search and Filter Bar -->
            <div class="search-filter-panel">
                <div class="search-main-row">
                    <div class="search-input-box">
                        <i data-lucide="search"></i>
                        <input type="text" id="searchInput" placeholder="Buscar por nombre, anillo, cadena, pulsera, aretes..." oninput="filterProducts()">
                    </div>

                    <div class="price-filter-box">
                        <span>Precio máx: <strong id="priceDisplay" style="color: var(--primary-900);">$20.000</strong></span>
                        <input type="range" id="priceRange" min="2000" max="25000" step="500" value="25000" oninput="updatePriceFilter(this.value)">
                    </div>
                </div>

                <div class="category-tabs">
                    <button class="category-tab-btn active" onclick="setCategory('all', this)">✨ Todos</button>
                    <button class="category-tab-btn" onclick="setCategory('cadenas', this)">🔗 Cadenas & Collares</button>
                    <button class="category-tab-btn" onclick="setCategory('anillos', this)">💍 Anillos</button>
                    <button class="category-tab-btn" onclick="setCategory('pulseras', this)">🛡️ Pulseras & Brazaletes</button>
                    <button class="category-tab-btn" onclick="setCategory('aretes', this)">✨ Aretes & Piercings</button>
                    <button class="category-tab-btn" onclick="setCategory('sets', this)">💎 Sets Completos</button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid" id="productsContainer">
                <!-- Products dynamically rendered by JS -->
            </div>
        </div>
    </section>

    <!-- SURGICAL STEEL BENEFITS -->
    <section class="benefits-section" id="beneficios">
        <div class="container">
            <div class="section-header" style="margin-bottom: 36px;">
                <span class="section-tag"><i data-lucide="check-circle" style="width: 14px; display: inline;"></i> Pureza 316L</span>
                <h2 class="section-title">¿Por qué elegir <span>Acero Quirúrgico Luan?</span></h2>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon-box"><i data-lucide="shield"></i></div>
                    <h4>Inalterable & No se Mancha</h4>
                    <p>No se pone negro, no se oxida y mantiene su brillo espejo intacto ante perfumes, cremas y cloro.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon-box"><i data-lucide="feather"></i></div>
                    <h4>100% Hipoalergénico</h4>
                    <p>Libre de níquel reactivo, ideal para pieles sensibles que sufren alergias con otros metales.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon-box"><i data-lucide="droplets"></i></div>
                    <h4>Resistente al Agua</h4>
                    <p>Báñate en la piscina, mar o entrena en el gimnasio sin tener que quitarte tus joyas.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon-box"><i data-lucide="zap"></i></div>
                    <h4>Durabilidad Extrema</h4>
                    <p>Mayor dureza que la plata y el oro, resiste golpes y rayones sin deformarse.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- OPINIONS & REVIEWS SECTION -->
    <section class="reviews-section" id="opiniones">
        <div class="container">
            <div class="section-header">
                <span class="section-tag"><i data-lucide="message-square" style="width: 14px; display: inline;"></i> Opiniones Reales</span>
                <h2 class="section-title">Qué opinan de <span>nuestros accesorios</span></h2>
                <p class="section-subtitle">Conoce las experiencias de quienes ya visten piezas de acero quirúrgico Luan.</p>
            </div>

            <div class="reviews-layout">
                <!-- Left: List of Customer Reviews -->
                <div class="reviews-list" id="reviewsList">
                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">M</div>
                                <div>
                                    <div class="reviewer-name">Matías Romero</div>
                                    <div class="reviewer-tag"><i data-lucide="check-circle-2" style="width: 13px;"></i> Comprador Verificado</div>
                                </div>
                            </div>
                            <div class="stars-row">★★★★★</div>
                        </div>
                        <p class="review-body">"La cadena cubana es tremenda, tiene un peso y un brillo espectacular. Llevo 3 meses usándola para entrenar y bañarme y está como el primer día, cero manchas."</p>
                        <div class="review-accessory">Accesorio: Cadena Cubana 8mm 316L</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">V</div>
                                <div>
                                    <div class="reviewer-name">Valentina Castro</div>
                                    <div class="reviewer-tag"><i data-lucide="check-circle-2" style="width: 13px;"></i> Compradora Verificada</div>
                                </div>
                            </div>
                            <div class="stars-row">★★★★★</div>
                        </div>
                        <p class="review-body">"Tengo piel súper alérgica a la bisutería común y estos aros no me causaron ninguna molestia. Además las luces y empaque con el que llegó fueron de 10."</p>
                        <div class="review-accessory">Accesorio: Huggie Hoops con Circones</div>
                    </div>

                    <div class="review-card">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">F</div>
                                <div>
                                    <div class="reviewer-name">Facundo Gómez</div>
                                    <div class="reviewer-tag"><i data-lucide="check-circle-2" style="width: 13px;"></i> Comprador Verificado</div>
                                </div>
                            </div>
                            <div class="stars-row">★★★★★</div>
                        </div>
                        <p class="review-body">"El anillo facetado tiene un acabado increíble, refleja la luz con mucha facha. El asesor virtual me ayudó a elegir justo el estilo que buscaba."</p>
                        <div class="review-accessory">Accesorio: Anillo Titanio Facetado</div>
                    </div>
                </div>

                <!-- Right: Form to Leave User's Opinion -->
                <div class="review-form-card">
                    <h3>Deja tu Opinión o Consulta</h3>
                    <p>¿Qué clase de accesorio estás buscando o cómo ha sido tu experiencia con nuestras joyas de acero?</p>

                    <form id="opinionForm" onsubmit="submitOpinion(event)">
                        <div class="form-group">
                            <label for="opName">Tu Nombre Completo</label>
                            <input type="text" id="opName" class="form-control" placeholder="Ej. Camila Peralta" required>
                        </div>

                        <div class="form-group">
                            <label for="opAccessory">¿Qué tipo de accesorio buscas o compraste?</label>
                            <select id="opAccessory" class="form-control" required>
                                <option value="Cadena de Acero Quirúrgico">Cadena de Acero Quirúrgico</option>
                                <option value="Anillo de Acero 316L">Anillo de Acero 316L</option>
                                <option value="Pulsera / Brazalete">Pulsera / Brazalete</option>
                                <option value="Aretes o Piercing Hipoalergénico">Aretes o Piercing Hipoalergénico</option>
                                <option value="Set Completo de Joyería">Set Completo de Joyería</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tu Calificación</label>
                            <div class="rating-select-group">
                                <button type="button" class="star-rating-btn active" onclick="setRating(1)">★</button>
                                <button type="button" class="star-rating-btn active" onclick="setRating(2)">★</button>
                                <button type="button" class="star-rating-btn active" onclick="setRating(3)">★</button>
                                <button type="button" class="star-rating-btn active" onclick="setRating(4)">★</button>
                                <button type="button" class="star-rating-btn active" onclick="setRating(5)">★</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="opComment">Tu Opinión / Comentario</label>
                            <textarea id="opComment" class="form-control" placeholder="Escribe tu experiencia o qué diseño te gustaría ver en la tienda..." required></textarea>
                        </div>

                        <button type="submit" class="btn-primary-neon" style="width: 100%; justify-content: center; padding: 12px;">
                            <i data-lucide="send"></i>
                            <span>Publicar mi Opinión</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK VIEW MODAL -->
    <div class="modal-overlay" id="quickViewModal">
        <div class="modal-content-box">
            <button class="modal-close-btn" onclick="closeQuickView()">✕</button>
            <div class="quick-view-grid">
                <div class="modal-img-wrap">
                    <img id="modalProductImg" src="" alt="Vista previa de joya">
                </div>
                <div>
                    <span class="product-category" id="modalCategory">Acero 316L</span>
                    <h3 class="product-name" id="modalTitle" style="font-size: 24px; margin-bottom: 10px;">Nombre del Accesorio</h3>
                    <p class="product-desc" id="modalDescription">Descripción completa del accesorio.</p>
                    
                    <div style="margin: 18px 0;">
                        <span style="font-size: 13px; color: var(--text-muted); display: block; margin-bottom: 6px;">Talle / Medida:</span>
                        <div style="display: flex; gap: 8px;" id="modalSizes">
                            <button class="quiz-opt-btn active" style="padding: 6px 14px;">Ajustable / Estándar</button>
                        </div>
                    </div>

                    <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 20px;">
                        <span class="price-current" id="modalPrice" style="font-size: 28px;">$0</span>
                        <span class="price-old" id="modalOldPrice">$0</span>
                    </div>

                    <div style="display: flex; gap: 12px;">
                        <button class="btn-primary-neon" id="modalAddCartBtn" style="flex: 1; justify-content: center;">
                            <i data-lucide="shopping-bag"></i>
                            <span>Agregar al Carrito</span>
                        </button>
                        <a id="modalWhatsAppBtn" href="#" target="_blank" class="btn-outline-neon" style="justify-content: center;">
                            <i data-lucide="message-circle"></i>
                            <span>Consultar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CART MODAL -->
    <div class="modal-overlay" id="cartModal">
        <div class="modal-content-box" style="max-width: 520px;">
            <button class="modal-close-btn" onclick="closeCartModal()">✕</button>
            <h3 style="font-size: 22px; color: #fff; display: flex; align-items: center; gap: 10px;">
                <i data-lucide="shopping-bag" style="color: var(--primary-900);"></i>
                <span>Tu Carrito de Compras</span>
            </h3>
            <p style="font-size: 13px; color: var(--text-muted);">Accesorios seleccionados en Acero Quirúrgico 316L</p>

            <div class="cart-items-list" id="cartList">
                <!-- Cart items dynamically listed -->
            </div>

            <div class="cart-total-box">
                <span>Total Estimado:</span>
                <span id="cartTotalSum" style="color: var(--primary-900); font-size: 24px;">$0</span>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 14px;">
                <button class="btn-primary-neon" style="flex: 1; justify-content: center;" onclick="sendCartToWhatsApp()">
                    <i data-lucide="send"></i>
                    <span>Completar Pedido por WhatsApp</span>
                </button>
            </div>
        </div>
    </div>

    <!-- LOGIN / INICIO DE SESIÓN MODAL -->
    <div class="modal-overlay" id="loginModal">
        <div class="auth-modal-box">
            <button class="modal-close-btn" onclick="closeLoginModal()">✕</button>

            <!-- VISTA USUARIO LOGUEADO (CLIENTE O ADMINISTRADOR) -->
            <div id="authProfileView" style="display: none;">
                <!-- VISTA CLIENTE -->
                <div id="clientProfileBox" class="auth-profile-box">
                    <div class="auth-profile-avatar" id="authProfileAvatar">L</div>
                    <h3 class="auth-profile-name" id="authProfileName">Usuario Luan</h3>
                    <p class="auth-profile-email" id="authProfileEmail">usuario@luan.com</p>

                    <div class="auth-profile-stats">
                        <div class="auth-stat-card">
                            <div class="auth-stat-value" id="profileCartCount">0</div>
                            <div class="auth-stat-label">En Carrito</div>
                        </div>
                        <div class="auth-stat-card">
                            <div class="auth-stat-value">316L VIP</div>
                            <div class="auth-stat-label">Nivel Exclusivo</div>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <button class="btn-primary-neon" style="width: 100%; justify-content: center;" onclick="closeLoginModal(); document.getElementById('cartOpenBtn').click();">
                            <i data-lucide="shopping-bag"></i>
                            <span>Ver mis compras / Carrito</span>
                        </button>
                        <button class="btn-outline-neon" style="width: 100%; justify-content: center; border-color: rgba(255, 77, 77, 0.4); color: #ff8888;" onclick="handleLogout()">
                            <i data-lucide="log-out"></i>
                            <span>Cerrar Sesión</span>
                        </button>
                    </div>
                </div>

                <!-- VISTA PANEL DE ADMINISTRADOR -->
                <div id="adminProfileBox" class="auth-profile-box" style="display: none;">
                    <div class="admin-crown-badge">
                        <i data-lucide="shield-check" style="width: 16px; height: 16px;"></i>
                        <span>MODO ADMINISTRADOR ACTIVO</span>
                    </div>

                    <h3 class="auth-profile-name" style="color: #ffd700; font-size: 22px;">Panel de Control Luan 316L</h3>
                    <p class="auth-profile-email" style="color: var(--primary-200); margin-bottom: 16px;">admin@luan.com &bull; SuperAdmin</p>

                    <div class="auth-profile-stats" style="grid-template-columns: 1fr 1fr 1fr; margin-bottom: 20px;">
                        <div class="auth-stat-card" style="border-color: rgba(255, 215, 0, 0.4);">
                            <div class="auth-stat-value" id="adminTotalProductsCount" style="color: #ffd700;">8</div>
                            <div class="auth-stat-label">Joyas Activas</div>
                        </div>
                        <div class="auth-stat-card">
                            <div class="auth-stat-value" style="color: var(--primary-900);">4</div>
                            <div class="auth-stat-label">Categorías</div>
                        </div>
                        <div class="auth-stat-card" style="border-color: rgba(37, 211, 102, 0.4);">
                            <div class="auth-stat-value" style="color: #25d366;">Online</div>
                            <div class="auth-stat-label">WhatsApp</div>
                        </div>
                    </div>

                    <!-- Botón para ir al Panel de Control completo -->
                    <div style="margin-bottom: 14px;">
                        <a href="{{ route('panel') }}" class="btn-primary-neon" style="width: 100%; justify-content: center; background: linear-gradient(135deg, #ffd700, #ff9900); color: #04080d; font-size: 15px; text-decoration: none; padding: 12px;">
                            <i data-lucide="layout-dashboard"></i>
                            <span>Ir al Panel de Control Completo →</span>
                        </a>
                    </div>

                    <!-- Botón para desplegar formulario de agregar joya rápido -->
                    <div style="margin-bottom: 18px;">
                        <button type="button" class="btn-outline-neon" style="width: 100%; justify-content: center; border-color: rgba(255, 215, 0, 0.5); color: #ffd700;" onclick="toggleAddProductForm()">
                            <i data-lucide="plus-circle"></i>
                            <span id="btnToggleAddText">+ Agregar Nueva Joya Rápida</span>
                        </button>
                    </div>

                    <!-- Formulario dinámico para agregar producto -->
                    <form id="adminAddProductForm" style="display: none; background: rgba(6, 14, 22, 0.85); border: 1px solid var(--border-neon); border-radius: 14px; padding: 16px; margin-bottom: 18px; text-align: left;" onsubmit="handleAdminAddProduct(event)">
                        <div class="auth-field">
                            <label>Nombre de la Joya</label>
                            <input type="text" id="newProdName" class="auth-input" style="padding-left: 14px;" placeholder="Ej: Dije Cruz Acero 316L" required>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                            <div class="auth-field">
                                <label>Categoría</label>
                                <select id="newProdCategory" class="auth-input" style="padding-left: 14px; background: #0b1726; color: #fff;">
                                    <option value="cadenas">Cadenas</option>
                                    <option value="anillos">Anillos</option>
                                    <option value="pulseras">Pulseras</option>
                                    <option value="aretes">Aretes</option>
                                </select>
                            </div>
                            <div class="auth-field">
                                <label>Precio ($ ARS)</label>
                                <input type="number" id="newProdPrice" class="auth-input" style="padding-left: 14px;" placeholder="6500" required>
                            </div>
                        </div>
                        <div class="auth-field">
                            <label>Descripción del accesorio</label>
                            <input type="text" id="newProdDesc" class="auth-input" style="padding-left: 14px;" placeholder="Detalles de acabado y brillo" required>
                        </div>
                        <button type="submit" class="btn-primary-neon" style="width: 100%; justify-content: center;">
                            <i data-lucide="check"></i>
                            <span>Publicar Inmediatamente en Tienda</span>
                        </button>
                    </form>

                    <!-- Lista resumida de joyas para eliminar o gestionar -->
                    <div style="text-align: left; margin-bottom: 20px;">
                        <span style="font-size: 13px; font-weight: 600; color: var(--primary-200); display: block; margin-bottom: 8px;">Gestión de Catálogo (Eliminar / Revisar):</span>
                        <div id="adminProductsList" style="max-height: 180px; overflow-y: auto; padding-right: 4px;">
                            <!-- Elementos generados por JS -->
                        </div>
                    </div>

                    <button class="btn-outline-neon" style="width: 100%; justify-content: center; border-color: rgba(255, 77, 77, 0.5); color: #ff8888;" onclick="handleLogout()">
                        <i data-lucide="log-out"></i>
                        <span>Cerrar Sesión de Administrador</span>
                    </button>
                </div>
            </div>

            <!-- VISTA FORMULARIOS (INICIAR SESIÓN / REGISTRO) -->
            <div id="authFormsView">
                <div class="auth-header">
                    <div class="auth-logo-badge">L</div>
                    <h3 id="authModalTitle">Iniciar Sesión</h3>
                    <p id="authModalSubtitle">Accede a tu cuenta y disfruta de promociones exclusivas en acero 316L</p>
                </div>

                <!-- Selector de pestañas -->
                <div class="auth-tabs-nav">
                    <button type="button" class="auth-tab-btn active" id="tabBtnLogin" onclick="switchAuthTab('login')">
                        <i data-lucide="log-in" style="width: 16px; height: 16px;"></i>
                        <span>Iniciar Sesión</span>
                    </button>
                    <button type="button" class="auth-tab-btn" id="tabBtnRegister" onclick="switchAuthTab('register')">
                        <i data-lucide="user-plus" style="width: 16px; height: 16px;"></i>
                        <span>Crear Cuenta</span>
                    </button>
                </div>

                <!-- Tarjeta de Acceso Rápido Administrador -->
                <div class="admin-credentials-card" onclick="fillAdminCredentials()" title="Clic para cargar credenciales de Administrador">
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <i data-lucide="shield-check" style="width: 22px; height: 22px; color: #ffd700; flex-shrink: 0;"></i>
                        <div>
                            <div style="font-size: 13px; font-weight: 700; color: #ffd700;">👑 Acceso Administrador</div>
                            <div style="font-size: 12px; color: #ccfff8;">Usuario: <strong style="color: #fff;">admin@luan.com</strong> | Clave: <strong style="color: #fff;">admin123</strong></div>
                        </div>
                    </div>
                    <button type="button" class="btn-autofill-admin">Completar</button>
                </div>

                <!-- Formulario Iniciar Sesión -->
                <form id="loginForm" onsubmit="handleLoginSubmit(event)">
                    <div class="auth-field">
                        <label for="loginEmail">Correo electrónico o Usuario</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="mail" class="field-icon"></i>
                            <input type="email" id="loginEmail" class="auth-input" placeholder="ejemplo@correo.com" required>
                        </div>
                    </div>

                    <div class="auth-field">
                        <label for="loginPassword">Contraseña</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="lock" class="field-icon"></i>
                            <input type="password" id="loginPassword" class="auth-input" placeholder="••••••••" required>
                            <button type="button" class="auth-pw-toggle" onclick="togglePasswordVisibility('loginPassword', 'loginEyeIcon')" title="Mostrar u ocultar contraseña">
                                <i data-lucide="eye" id="loginEyeIcon" style="width: 18px; height: 18px;"></i>
                            </button>
                        </div>
                    </div>

                    <div class="auth-options">
                        <label class="auth-checkbox-label">
                            <input type="checkbox" id="loginRemember" checked>
                            <span>Recordarme</span>
                        </label>
                        <a href="javascript:void(0)" class="auth-link" onclick="showToast('Enlace de recuperación enviado a tu correo')">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button type="submit" class="btn-primary-neon" style="width: 100%; justify-content: center; padding: 12px; font-size: 15px;">
                        <i data-lucide="arrow-right-circle"></i>
                        <span>Ingresar a mi Cuenta</span>
                    </button>
                </form>

                <!-- Formulario Registro -->
                <form id="registerForm" style="display: none;" onsubmit="handleRegisterSubmit(event)">
                    <div class="auth-field">
                        <label for="regName">Nombre y Apellido</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="user" class="field-icon"></i>
                            <input type="text" id="regName" class="auth-input" placeholder="Tu nombre completo" required>
                        </div>
                    </div>

                    <div class="auth-field">
                        <label for="regEmail">Correo electrónico</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="mail" class="field-icon"></i>
                            <input type="email" id="regEmail" class="auth-input" placeholder="ejemplo@correo.com" required>
                        </div>
                    </div>

                    <div class="auth-field">
                        <label for="regPhone">Teléfono / WhatsApp</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="phone" class="field-icon"></i>
                            <input type="tel" id="regPhone" class="auth-input" placeholder="+54 9 11 ...">
                        </div>
                    </div>

                    <div class="auth-field">
                        <label for="regPassword">Crear Contraseña</label>
                        <div class="auth-input-wrap">
                            <i data-lucide="lock" class="field-icon"></i>
                            <input type="password" id="regPassword" class="auth-input" placeholder="Mínimo 6 caracteres" required minlength="6">
                            <button type="button" class="auth-pw-toggle" onclick="togglePasswordVisibility('regPassword', 'regEyeIcon')" title="Mostrar u ocultar contraseña">
                                <i data-lucide="eye" id="regEyeIcon" style="width: 18px; height: 18px;"></i>
                            </button>
                        </div>
                    </div>

                    <div class="auth-options" style="margin-bottom: 18px;">
                        <label class="auth-checkbox-label" style="font-size: 12px;">
                            <input type="checkbox" required checked>
                            <span>Acepto beneficios y promociones en Acero 316L</span>
                        </label>
                    </div>

                    <button type="submit" class="btn-primary-neon" style="width: 100%; justify-content: center; padding: 12px; font-size: 15px;">
                        <i data-lucide="user-check"></i>
                        <span>Crear Cuenta Exclusiva</span>
                    </button>
                </form>

                <div class="auth-divider">o ingresar con</div>

                <div class="auth-social-row">
                    <button type="button" class="btn-social" onclick="simulateSocialAuth('Google')">
                        <svg width="18" height="18" viewBox="0 0 24 24">
                            <path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.7l3.1-3.1C17.3 1.8 14.8 1 12 1 7.5 1 3.7 3.6 1.9 7.3l3.7 2.9C6.5 7.3 9 5 12 5z"/>
                            <path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.6h6.5c-.3 1.5-1.1 2.8-2.4 3.7l3.7 2.9c2.2-2 3.7-5.1 3.7-8.9z"/>
                            <path fill="#FBBC05" d="M5.6 14.8c-.2-.7-.4-1.5-.4-2.3 0-.8.1-1.6.4-2.3L1.9 7.3C.7 9.7 0 12 0 14.5s.7 4.8 1.9 7.2l3.7-2.9z"/>
                            <path fill="#34A853" d="M12 23.5c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3 0-5.5-2.3-6.4-5.2L1.9 16.5C3.7 20.2 7.5 23.5 12 23.5z"/>
                        </svg>
                        <span>Google</span>
                    </button>
                    <button type="button" class="btn-social" onclick="simulateSocialAuth('Apple')">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M15.97 6.85c.65-.79 1.09-1.89.97-2.99-1 .04-2.14.67-2.81 1.45-.58.67-1.1 1.77-.96 2.85 1.12.09 2.16-.54 2.8-1.31z"/>
                        </svg>
                        <span>Apple</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTÓN FLOTANTE DE WHATSAPP (ACCESO RÁPIDO) -->
    <a href="https://wa.me/?text=Hola%20Luan%20Acero%20Quir%C3%BArgico,%20quiero%20consultar%20por%20sus%20accesorios" target="_blank" class="floating-whatsapp-btn" id="floatingWhatsAppBtn" title="Contactar por WhatsApp">
        <span class="whatsapp-pulse-ring"></span>
        <i data-lucide="message-circle" style="width: 30px; height: 30px;"></i>
        <span class="floating-whatsapp-tooltip">¿Dudas? ¡Escríbenos a WhatsApp!</span>
    </a>

    <!-- FLOATING TOAST NOTIFICATION -->
    <div class="toast-notify" id="toastNotify">
        <i data-lucide="check-circle" style="color: var(--primary-900);"></i>
        <span id="toastMsg">Producto agregado al carrito</span>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 14px;">
                        <div class="logo-symbol">L</div>
                        <div class="logo-text">
                            <h1>LUAN</h1>
                            <span>Acero Quirúrgico 316L</span>
                        </div>
                    </div>
                    <p style="font-size: 14px; color: var(--text-muted); max-width: 320px;">
                        Especialistas en joyería fina de acero quirúrgico de alta pureza. Diseños futuristas, elegantes y duraderos con estética neón LED.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Categorías</h4>
                    <ul>
                        <li><a href="#catalogo" onclick="setCategory('cadenas')">Cadenas Cubanas</a></li>
                        <li><a href="#catalogo" onclick="setCategory('anillos')">Anillos Facetados</a></li>
                        <li><a href="#catalogo" onclick="setCategory('pulseras')">Pulseras & Brazaletes</a></li>
                        <li><a href="#catalogo" onclick="setCategory('aretes')">Aretes & Piercings</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Garantías</h4>
                    <ul>
                        <li><a href="#beneficios">Acero Inoxidable 316L</a></li>
                        <li><a href="#beneficios">Hipoalergénico Certificado</a></li>
                        <li><a href="#beneficios">Waterproof / Sumergible</a></li>
                        <li><a href="#opiniones">Opiniones de Clientes</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Contacto Directo</h4>
                    <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 12px;">
                        Atención personalizada y envíos a todo el país.
                    </p>
                    <a href="https://wa.me/?text=Hola%20Luan,%20quiero%20hacer%20un%20pedido" target="_blank" class="btn-primary-neon" style="font-size: 13px;">
                        <i data-lucide="message-circle"></i>
                        <span>Contactar Asesor</span>
                    </a>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; {{ date('Y') }} Luan Acero Quirúrgico. Todos los derechos reservados. Diseñado con luces LED y brillo estelar.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // ==========================================================
        // 1. STARFIELD & SHOOTING STARS CANVAS ENGINE
        // ==========================================================
        const canvas = document.getElementById('starfield-canvas');
        const ctx = canvas.getContext('2d');
        let stars = [];
        let meteors = [];
        const numStars = 160;

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class Star {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 1.8 + 0.3;
                this.baseAlpha = Math.random() * 0.7 + 0.2;
                this.alpha = this.baseAlpha;
                this.twinkleSpeed = (Math.random() * 0.02 + 0.005) * (Math.random() > 0.5 ? 1 : -1);
                const colors = ['#00ffdd', '#99fff1', '#ffffff', '#66ffeb', '#ccfff8'];
                this.color = colors[Math.floor(Math.random() * colors.length)];
            }
            update() {
                this.alpha += this.twinkleSpeed;
                if (this.alpha > 1 || this.alpha < 0.15) {
                    this.twinkleSpeed = -this.twinkleSpeed;
                }
            }
            draw() {
                ctx.save();
                ctx.globalAlpha = Math.max(0, Math.min(1, this.alpha));
                ctx.fillStyle = this.color;
                ctx.shadowBlur = this.size * 3;
                ctx.shadowColor = this.color;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();
            }
        }

        class Meteor {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * canvas.width * 1.2;
                this.y = -50;
                this.length = Math.random() * 80 + 50;
                this.speed = Math.random() * 8 + 6;
                this.angle = Math.PI / 4 + (Math.random() * 0.2 - 0.1);
                this.alpha = 1;
                this.active = false;
            }
            spawn() {
                this.reset();
                this.active = true;
            }
            update() {
                if (!this.active) return;
                this.x += Math.cos(this.angle) * this.speed;
                this.y += Math.sin(this.angle) * this.speed;
                this.alpha -= 0.012;
                if (this.alpha <= 0 || this.y > canvas.height + 100) {
                    this.active = false;
                }
            }
            draw() {
                if (!this.active) return;
                ctx.save();
                ctx.globalAlpha = this.alpha;
                const tailX = this.x - Math.cos(this.angle) * this.length;
                const tailY = this.y - Math.sin(this.angle) * this.length;
                const grad = ctx.createLinearGradient(this.x, this.y, tailX, tailY);
                grad.addColorStop(0, '#ffffff');
                grad.addColorStop(0.3, '#00ffdd');
                grad.addColorStop(1, 'transparent');

                ctx.strokeStyle = grad;
                ctx.lineWidth = 2;
                ctx.beginPath();
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(tailX, tailY);
                ctx.stroke();
                ctx.restore();
            }
        }

        for (let i = 0; i < numStars; i++) {
            stars.push(new Star());
        }
        for (let i = 0; i < 3; i++) {
            meteors.push(new Meteor());
        }

        // Spawn meteor periodically
        setInterval(() => {
            const m = meteors.find(meteor => !meteor.active);
            if (m) m.spawn();
        }, 3500);

        function animateCanvas() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            stars.forEach(star => {
                star.update();
                star.draw();
            });
            meteors.forEach(meteor => {
                meteor.update();
                meteor.draw();
            });
            requestAnimationFrame(animateCanvas);
        }
        animateCanvas();

        // ==========================================================
        // 2. PRODUCTS DATA WITH REAL PRICES AND 316L ATTRIBUTES
        // ==========================================================
        const defaultProducts = [
            {
                id: 1,
                name: "Cadena Cubana Miami 316L (8mm)",
                category: "cadenas",
                price: 8900,
                oldPrice: 11500,
                badge: "🔥 Más Vendido",
                img: "{{ asset('images/cadena_acero.jpg') }}",
                desc: "Cadena con eslabones macizos pulidos a espejo en acero quirúrgico 316L. Cierre de mosquetón reforzado.",
                tags: ["cadena", "cubana", "collar", "hombre", "urbano", "inoxidable"]
            },
            {
                id: 2,
                name: "Anillo Titanio Facetado & Zircón",
                category: "anillos",
                price: 5400,
                oldPrice: 7200,
                badge: "💎 Estilo Neón",
                img: "{{ asset('images/anillos_acero.jpg') }}",
                desc: "Dúo de anillos en acero quirúrgico con biseles cepillados y corte diamante con incrustación baguette.",
                tags: ["anillo", "titanio", "facetado", "pareja", "elegante", "zircon"]
            },
            {
                id: 3,
                name: "Brazalete Blindado Oyster 316L",
                category: "pulseras",
                price: 7600,
                oldPrice: 9800,
                badge: "🛡️ Ultra Resistente",
                img: "{{ asset('images/pulsera_acero.jpg') }}",
                desc: "Pulsera de eslabones tipo reloj con broche desplegable de seguridad. Acabado cepillado satinado.",
                tags: ["pulsera", "brazalete", "eslabones", "hombre", "reloj", "seguridad"]
            },
            {
                id: 4,
                name: "Aretes Huggie Hoop con Zircón Brillanté",
                category: "aretes",
                price: 4200,
                oldPrice: 5600,
                badge: "✨ Hipoalergénico",
                img: "{{ asset('images/aretes_acero.jpg') }}",
                desc: "Argollitas clásicas de acero hipoalergénico con gema de cristal engarzada. Cierre a presión seguro.",
                tags: ["aretes", "aros", "piercing", "mujer", "zircon", "minimalista"]
            },
            {
                id: 5,
                name: "Set Luan Neón: Cadena + Pulsera + Anillo",
                category: "cadenas",
                price: 18500,
                oldPrice: 24000,
                badge: "⚡ Combo Ahorro",
                img: "{{ asset('images/cadena_acero.jpg') }}",
                desc: "El trío perfecto en acero quirúrgico 316L para lucir un brillo imponente de día y de noche.",
                tags: ["set", "cadena", "pulsera", "anillo", "dije", "completo", "regalo"]
            },
            {
                id: 6,
                name: "Cadena Veneciana con Dije Prisma",
                category: "cadenas",
                price: 6800,
                oldPrice: 8500,
                badge: "✨ Nuevo",
                img: "{{ asset('images/hero_jewelry.jpg') }}",
                desc: "Eslabón veneciano de caída suave con colgante prisma rectangular facetado a mano.",
                tags: ["cadena", "dije", "prisma", "collar", "minimalista", "colgante"]
            },
            {
                id: 7,
                name: "Anillo Sello Signature Luan",
                category: "anillos",
                price: 4900,
                oldPrice: 6500,
                badge: "👑 Exclusivo",
                img: "{{ asset('images/anillos_acero.jpg') }}",
                desc: "Anillo macizo estilo signet con frontal pulido para grabado personalizado de iniciales.",
                tags: ["anillo", "sello", "signet", "grabado", "hombre", "clasico"]
            },
            {
                id: 8,
                name: "Piercing & Ear Cuff Acero 316L",
                category: "aretes",
                price: 3600,
                oldPrice: 4800,
                badge: "🌿 Cero Alergias",
                img: "{{ asset('images/aretes_acero.jpg') }}",
                desc: "Ear cuff a presión sin perforación y arete pasador en acero quirúrgico biocompatible.",
                tags: ["piercing", "earcuff", "aretes", "aros", "perforacion"]
            }
        ];

        let products = (() => {
            try {
                const saved = localStorage.getItem('luan_custom_products');
                if (saved) return JSON.parse(saved);
            } catch (e) {}
            return [...defaultProducts];
        })();

        let currentCategory = 'all';
        let currentSearchQuery = '';
        let currentMaxPrice = 25000;
        let cart = [];

        // Render products
        function renderProducts() {
            const container = document.getElementById('productsContainer');
            const filtered = products.filter(p => {
                const matchCategory = (currentCategory === 'all' || p.category === currentCategory);
                const matchPrice = p.price <= currentMaxPrice;
                const matchSearch = currentSearchQuery === '' || 
                    p.name.toLowerCase().includes(currentSearchQuery) || 
                    p.desc.toLowerCase().includes(currentSearchQuery) ||
                    p.tags.some(tag => tag.includes(currentSearchQuery));
                return matchCategory && matchPrice && matchSearch;
            });

            if (filtered.length === 0) {
                container.innerHTML = `
                    <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
                        <i data-lucide="package-x" style="width: 48px; height: 48px; color: var(--text-muted); margin-bottom: 14px;"></i>
                        <h3 style="color: #fff; font-size: 20px;">No encontramos accesorios con ese criterio</h3>
                        <p style="color: var(--text-muted); font-size: 14px; margin-top: 6px;">Intenta buscar por otro término o restablece los filtros de precio.</p>
                        <button class="btn-outline-neon" style="margin-top: 18px;" onclick="resetFilters()">Restablecer Filtros</button>
                    </div>
                `;
                lucide.createIcons();
                return;
            }

            container.innerHTML = filtered.map(p => `
                <div class="product-card">
                    <div class="product-card-thumb">
                        <span class="product-badge">${p.badge}</span>
                        <img src="${p.img}" alt="${p.name}" loading="lazy">
                        <button class="product-quick-btn" onclick="openQuickView(${p.id})">
                            <i data-lucide="eye" style="width: 14px;"></i>
                            <span>Vista Rápida</span>
                        </button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Acero 316L • ${p.category}</span>
                        <h3 class="product-name">${p.name}</h3>
                        <p class="product-desc">${p.desc}</p>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-old">$${p.oldPrice.toLocaleString('es-AR')}</span>
                                <span class="price-current">$${p.price.toLocaleString('es-AR')}</span>
                            </div>
                            <button class="btn-add-cart" onclick="addToCart(${p.id})" title="Añadir al Carrito">
                                <i data-lucide="plus" style="width: 18px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');

            lucide.createIcons();
        }

        function setCategory(cat, btn) {
            currentCategory = cat;
            document.querySelectorAll('.category-tab-btn').forEach(b => b.classList.remove('active'));
            if (btn) btn.classList.add('active');
            renderProducts();
        }

        function filterProducts() {
            currentSearchQuery = document.getElementById('searchInput').value.toLowerCase().trim();
            renderProducts();
        }

        function updatePriceFilter(val) {
            currentMaxPrice = parseInt(val);
            document.getElementById('priceDisplay').textContent = `$${currentMaxPrice.toLocaleString('es-AR')}`;
            renderProducts();
        }

        function resetFilters() {
            document.getElementById('searchInput').value = '';
            document.getElementById('priceRange').value = 25000;
            currentSearchQuery = '';
            currentMaxPrice = 25000;
            currentCategory = 'all';
            document.getElementById('priceDisplay').textContent = `$25.000`;
            document.querySelectorAll('.category-tab-btn').forEach((b, i) => {
                b.classList.toggle('active', i === 0);
            });
            renderProducts();
        }

        // ==========================================================
        // 3. INTERACTIVE ACCESSORY RECOMMENDER (QUIZ)
        // ==========================================================
        let quizState = {
            target: 'hombre',
            style: 'urbano',
            type: 'cadena'
        };

        const recommendationsDB = {
            'cadena': {
                title: 'Cadena Cubana Miami 316L (8mm)',
                desc: 'Eslabones macizos de acero quirúrgico 316L pulido a espejo. Resistente al agua, no produce manchas ni decoloración.',
                price: '$8.900',
                img: "{{ asset('images/cadena_acero.jpg') }}",
                opinion: 'Opinión del Joyero: Excelente para impacto visual y uso diario sin desgaste.',
                productId: 1
            },
            'anillo': {
                title: 'Anillo Titanio Facetado & Zircón',
                desc: 'Bisel facetado con destellos de luz. Acero quirúrgico de alta pureza hipoalergénico.',
                price: '$5.400',
                img: "{{ asset('images/anillos_acero.jpg') }}",
                opinion: 'Opinión del Joyero: Ideal si buscas elegancia moderna y comodidad ergonómica.',
                productId: 2
            },
            'pulsera': {
                title: 'Brazalete Blindado Oyster 316L',
                desc: 'Diseño imponente con broche plegable seguro. Inalterable ante el sudor y agua salada.',
                price: '$7.600',
                img: "{{ asset('images/pulsera_acero.jpg') }}",
                opinion: 'Opinión del Joyero: La mejor elección para proyectar solidez y buen gusto.',
                productId: 3
            },
            'aretes': {
                title: 'Aretes Huggie Hoop con Zircón Brillanté',
                desc: 'Argollas biocompatibles para cero alergias ni irritaciones en el lóbulo o cartílago.',
                price: '$4.200',
                img: "{{ asset('images/aretes_acero.jpg') }}",
                opinion: 'Opinión del Joyero: Recomendado 100% para personas con piel sensible o recién perforadas.',
                productId: 4
            }
        };

        function selectQuiz(step, value, btn) {
            const parent = btn.parentElement;
            parent.querySelectorAll('.quiz-opt-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            if (step === 1) quizState.target = value;
            if (step === 2) quizState.style = value;
            if (step === 3) quizState.type = value;

            updateRecommendation();
        }

        let currentRecommendedProduct = recommendationsDB['cadena'];

        function updateRecommendation() {
            const rec = recommendationsDB[quizState.type] || recommendationsDB['cadena'];
            currentRecommendedProduct = rec;

            document.getElementById('recTitle').textContent = rec.title;
            document.getElementById('recDesc').textContent = rec.desc;
            document.getElementById('recPrice').textContent = rec.price;
            document.getElementById('recImg').src = rec.img;
            document.getElementById('recOpinionLabel').textContent = rec.opinion;
        }

        function addRecommendedToCart() {
            if (currentRecommendedProduct && currentRecommendedProduct.productId) {
                addToCart(currentRecommendedProduct.productId);
            }
        }

        // ==========================================================
        // 4. QUICK VIEW MODAL LOGIC
        // ==========================================================
        let selectedProductForModal = null;

        function openQuickView(id) {
            const product = products.find(p => p.id === id);
            if (!product) return;
            selectedProductForModal = product;

            document.getElementById('modalProductImg').src = product.img;
            document.getElementById('modalTitle').textContent = product.name;
            document.getElementById('modalCategory').textContent = `Acero 316L • ${product.category.toUpperCase()}`;
            document.getElementById('modalDescription').textContent = product.desc;
            document.getElementById('modalPrice').textContent = `$${product.price.toLocaleString('es-AR')}`;
            document.getElementById('modalOldPrice').textContent = `$${product.oldPrice.toLocaleString('es-AR')}`;

            document.getElementById('modalAddCartBtn').onclick = () => {
                addToCart(product.id);
                closeQuickView();
            };

            const wpMsg = encodeURIComponent(`Hola Luan Acero Quirúrgico, me interesa el producto: ${product.name} ($${product.price})`);
            document.getElementById('modalWhatsAppBtn').href = `https://wa.me/?text=${wpMsg}`;

            const modal = document.getElementById('quickViewModal');
            modal.classList.add('active');
        }

        function closeQuickView() {
            document.getElementById('quickViewModal').classList.remove('active');
        }

        // ==========================================================
        // 5. SHOPPING CART & WHATSAPP CHECKOUT
        // ==========================================================
        function addToCart(id) {
            const product = products.find(p => p.id === id);
            if (!product) return;

            const existing = cart.find(item => item.id === id);
            if (existing) {
                existing.quantity += 1;
            } else {
                cart.push({ ...product, quantity: 1 });
            }

            updateCartUI();
            showToast(`"${product.name}" agregado al carrito`);
        }

        function removeFromCart(id) {
            cart = cart.filter(item => item.id !== id);
            updateCartUI();
        }

        function changeCartQty(id, delta) {
            const item = cart.find(i => i.id === id);
            if (!item) return;
            item.quantity += delta;
            if (item.quantity <= 0) {
                removeFromCart(id);
            } else {
                updateCartUI();
            }
        }

        function updateCartUI() {
            const totalCount = cart.reduce((sum, i) => sum + i.quantity, 0);
            const totalSum = cart.reduce((sum, i) => sum + (i.price * i.quantity), 0);

            document.getElementById('cartBadgeCount').textContent = totalCount;
            document.getElementById('cartTotalSum').textContent = `$${totalSum.toLocaleString('es-AR')}`;

            const listContainer = document.getElementById('cartList');
            if (cart.length === 0) {
                listContainer.innerHTML = `
                    <div style="text-align: center; padding: 30px 10px; color: var(--text-muted);">
                        <i data-lucide="shopping-bag" style="width: 36px; height: 36px; margin-bottom: 10px;"></i>
                        <p>Tu carrito está vacío</p>
                    </div>
                `;
            } else {
                listContainer.innerHTML = cart.map(item => `
                    <div class="cart-item-row">
                        <div class="cart-item-info">
                            <img src="${item.img}" alt="${item.name}" class="cart-item-thumb">
                            <div>
                                <h4 style="font-size: 14px; color: #fff; margin-bottom: 2px;">${item.name}</h4>
                                <span style="font-size: 13px; color: var(--primary-900); font-weight: 700;">$${item.price.toLocaleString('es-AR')}</span>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <button class="btn-neon-icon" style="width: 28px; height: 28px; font-size: 14px;" onclick="changeCartQty(${item.id}, -1)">-</button>
                            <span style="font-size: 14px; font-weight: 700; min-width: 18px; text-align: center;">${item.quantity}</span>
                            <button class="btn-neon-icon" style="width: 28px; height: 28px; font-size: 14px;" onclick="changeCartQty(${item.id}, 1)">+</button>
                            <button class="btn-neon-icon" style="width: 28px; height: 28px; color: #ff6b6b; margin-left: 4px;" onclick="removeFromCart(${item.id})">
                                <i data-lucide="trash-2" style="width: 14px;"></i>
                            </button>
                        </div>
                    </div>
                `).join('');
            }

            lucide.createIcons();
        }

        document.getElementById('cartOpenBtn').addEventListener('click', () => {
            document.getElementById('cartModal').classList.add('active');
        });

        function closeCartModal() {
            document.getElementById('cartModal').classList.remove('active');
        }

        function sendCartToWhatsApp() {
            if (cart.length === 0) {
                showToast("Tu carrito está vacío");
                return;
            }

            let msg = "¡Hola Luan Acero Quirúrgico! Quiero realizar el siguiente pedido:\n\n";
            let total = 0;
            cart.forEach((item, index) => {
                const sub = item.price * item.quantity;
                total += sub;
                msg += `${index + 1}. ${item.name} x${item.quantity} - $${sub.toLocaleString('es-AR')}\n`;
            });
            msg += `\n*TOTAL:* $${total.toLocaleString('es-AR')}\n`;
            msg += `\n¿Tienen disponibilidad y cómo coordinamos el envío? ¡Muchas gracias!`;

            window.open(`https://wa.me/?text=${encodeURIComponent(msg)}`, '_blank');
        }

        // ==========================================================
        // 6. OPINIONS SUBMISSION & STAR RATING
        // ==========================================================
        let selectedStars = 5;

        function setRating(rating) {
            selectedStars = rating;
            const buttons = document.querySelectorAll('.star-rating-btn');
            buttons.forEach((btn, index) => {
                btn.classList.toggle('active', index < rating);
            });
        }

        function submitOpinion(e) {
            e.preventDefault();
            const name = document.getElementById('opName').value.trim();
            const accessory = document.getElementById('opAccessory').value;
            const comment = document.getElementById('opComment').value.trim();

            if (!name || !comment) return;

            const initial = name.charAt(0).toUpperCase();
            const starsStr = '★'.repeat(selectedStars) + '☆'.repeat(5 - selectedStars);

            const newCard = document.createElement('div');
            newCard.className = 'review-card';
            newCard.style.animation = 'fadeIn 0.5s ease';
            newCard.innerHTML = `
                <div class="review-header">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">${initial}</div>
                        <div>
                            <div class="reviewer-name">${name}</div>
                            <div class="reviewer-tag"><i data-lucide="check-circle-2" style="width: 13px;"></i> Opinión Reciente</div>
                        </div>
                    </div>
                    <div class="stars-row">${starsStr}</div>
                </div>
                <p class="review-body">"${comment}"</p>
                <div class="review-accessory">Accesorio: ${accessory}</div>
            `;

            const list = document.getElementById('reviewsList');
            list.prepend(newCard);

            lucide.createIcons();
            showToast("¡Gracias por tu opinión!");

            // Reset form
            document.getElementById('opinionForm').reset();
            setRating(5);
        }

        // ==========================================================
        // 7. TOAST NOTIFICATION
        // ==========================================================
        function showToast(msg) {
            const toast = document.getElementById('toastNotify');
            document.getElementById('toastMsg').textContent = msg;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Close modals on backdrop click
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.remove('active');
                }
            });
        });

        // ==========================================================
        // 8. AUTHENTICATION & LOGIN / REGISTER LOGIC
        // ==========================================================
        let currentUser = null;

        function openLoginModal() {
            const modal = document.getElementById('loginModal');
            modal.classList.add('active');
            renderAuthState();
            lucide.createIcons();
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.remove('active');
        }

        function switchAuthTab(tab) {
            const tabBtnLogin = document.getElementById('tabBtnLogin');
            const tabBtnRegister = document.getElementById('tabBtnRegister');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const title = document.getElementById('authModalTitle');
            const subtitle = document.getElementById('authModalSubtitle');

            if (tab === 'login') {
                tabBtnLogin.classList.add('active');
                tabBtnRegister.classList.remove('active');
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
                title.textContent = 'Iniciar Sesión';
                subtitle.textContent = 'Accede a tu cuenta y disfruta de promociones exclusivas en acero 316L';
            } else {
                tabBtnRegister.classList.add('active');
                tabBtnLogin.classList.remove('active');
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                title.textContent = 'Crear Cuenta';
                subtitle.textContent = 'Únete al club exclusivo Luan y obtén beneficios en cada compra';
            }
            lucide.createIcons();
        }

        function togglePasswordVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (!input || !icon) return;

            if (input.type === 'password') {
                input.type = 'text';
                icon.setAttribute('data-lucide', 'eye-off');
            } else {
                input.type = 'password';
                icon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        }

        function fillAdminCredentials() {
            document.getElementById('loginEmail').value = 'admin@luan.com';
            document.getElementById('loginPassword').value = 'admin123';
            showToast("👑 Credenciales cargadas: admin@luan.com / admin123");
        }

        function toggleAddProductForm() {
            const form = document.getElementById('adminAddProductForm');
            const btnText = document.getElementById('btnToggleAddText');
            if (form.style.display === 'none' || !form.style.display) {
                form.style.display = 'block';
                btnText.textContent = '✕ Ocultar Formulario de Joya';
            } else {
                form.style.display = 'none';
                btnText.textContent = '+ Agregar Nueva Joya al Catálogo';
            }
            lucide.createIcons();
        }

        function handleAdminAddProduct(e) {
            e.preventDefault();
            const name = document.getElementById('newProdName').value.trim();
            const category = document.getElementById('newProdCategory').value;
            const price = parseInt(document.getElementById('newProdPrice').value, 10);
            const desc = document.getElementById('newProdDesc').value.trim();

            if (!name || isNaN(price)) {
                showToast("Por favor completa los datos requeridos");
                return;
            }

            const sampleImages = {
                cadenas: "{{ asset('images/cadena_acero.jpg') }}",
                anillos: "{{ asset('images/anillos_acero.jpg') }}",
                pulseras: "{{ asset('images/pulsera_acero.jpg') }}",
                aretes: "{{ asset('images/aretes_acero.jpg') }}"
            };

            const newProduct = {
                id: Date.now(),
                name: name,
                category: category,
                price: price,
                oldPrice: Math.round(price * 1.25),
                badge: "✨ Novedad Admin",
                img: sampleImages[category] || "{{ asset('images/hero_jewelry.jpg') }}",
                desc: desc,
                tags: [category, "acero", "316l", "nuevo"]
            };

            products.unshift(newProduct);
            localStorage.setItem('luan_custom_products', JSON.stringify(products));
            renderProducts();
            renderAdminProductsList();
            document.getElementById('adminAddProductForm').reset();
            toggleAddProductForm();
            showToast(`¡"${name}" agregada exitosamente al catálogo!`);
        }

        function handleAdminDeleteProduct(id) {
            const p = products.find(prod => prod.id === id);
            const name = p ? p.name : 'producto';
            if (confirm(`¿Eliminar "${name}" del catálogo?`)) {
                products = products.filter(prod => prod.id !== id);
                localStorage.setItem('luan_custom_products', JSON.stringify(products));
                renderProducts();
                renderAdminProductsList();
                showToast(`"${name}" eliminada del catálogo`);
            }
        }

        function renderAdminProductsList() {
            const container = document.getElementById('adminProductsList');
            const counter = document.getElementById('adminTotalProductsCount');
            if (counter) counter.textContent = products.length;
            if (!container) return;

            if (products.length === 0) {
                container.innerHTML = `<div style="font-size: 13px; color: var(--text-muted); text-align: center; padding: 12px;">No hay productos en el catálogo.</div>`;
                return;
            }

            container.innerHTML = products.map(p => `
                <div class="admin-product-row">
                    <div style="display: flex; align-items: center; gap: 10px; overflow: hidden;">
                        <img src="${p.img}" class="admin-product-thumb" alt="${p.name}">
                        <div style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                            <div style="font-size: 13px; font-weight: 600; color: #fff; text-overflow: ellipsis; overflow: hidden;">${p.name}</div>
                            <div style="font-size: 11px; color: var(--primary-300);">$${p.price.toLocaleString('es-AR')} &bull; ${p.category}</div>
                        </div>
                    </div>
                    <button type="button" onclick="handleAdminDeleteProduct(${p.id})" style="background: rgba(255, 77, 77, 0.2); border: 1px solid rgba(255, 77, 77, 0.4); color: #ff8888; border-radius: 8px; padding: 5px 10px; cursor: pointer; font-size: 12px; white-space: nowrap;">
                        🗑️ Quitar
                    </button>
                </div>
            `).join('');

            lucide.createIcons();
        }

        function handleLoginSubmit(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value.trim();
            const password = document.getElementById('loginPassword').value;

            // Validación de credenciales del Administrador
            const isEmailAdmin = (email.toLowerCase() === 'admin@luan.com' || email.toLowerCase() === 'admin');
            if (isEmailAdmin) {
                if (password !== 'admin123') {
                    showToast("❌ Contraseña incorrecta para Administrador (use: admin123)");
                    return;
                }
                currentUser = {
                    name: 'Administrador Luan',
                    email: 'admin@luan.com',
                    role: 'admin',
                    avatar: '👑'
                };
                localStorage.setItem('luan_user_session', JSON.stringify(currentUser));
                updateHeaderUserUI();
                closeLoginModal();
                showToast("👑 Ingresando al Panel de Control...");
                setTimeout(() => {
                    window.location.href = "{{ route('panel') }}";
                }, 500);
                return;
            }

            // Usuario Cliente común
            const name = email.split('@')[0] || 'Cliente Luan';
            const capitalizedName = name.charAt(0).toUpperCase() + name.slice(1);

            currentUser = {
                name: capitalizedName,
                email: email,
                role: 'client',
                avatar: capitalizedName.charAt(0).toUpperCase()
            };

            localStorage.setItem('luan_user_session', JSON.stringify(currentUser));
            updateHeaderUserUI();
            closeLoginModal();
            showToast(`¡Bienvenido/a de nuevo, ${currentUser.name}!`);
        }

        function handleRegisterSubmit(e) {
            e.preventDefault();
            const name = document.getElementById('regName').value.trim();
            const email = document.getElementById('regEmail').value.trim();

            currentUser = {
                name: name,
                email: email,
                role: 'client',
                avatar: name.charAt(0).toUpperCase()
            };

            localStorage.setItem('luan_user_session', JSON.stringify(currentUser));
            updateHeaderUserUI();
            closeLoginModal();
            showToast(`¡Cuenta creada con éxito! Bienvenido/a, ${currentUser.name}`);
        }

        function simulateSocialAuth(provider) {
            currentUser = {
                name: provider === 'Google' ? 'Usuario Google' : 'Usuario Apple',
                email: provider === 'Google' ? 'usuario@gmail.com' : 'usuario@icloud.com',
                role: 'client',
                avatar: provider === 'Google' ? 'G' : 'A'
            };
            localStorage.setItem('luan_user_session', JSON.stringify(currentUser));
            updateHeaderUserUI();
            closeLoginModal();
            showToast(`Ingresaste correctamente con ${provider}`);
        }

        function handleLogout() {
            currentUser = null;
            localStorage.removeItem('luan_user_session');
            updateHeaderUserUI();
            closeLoginModal();
            showToast('Has cerrado sesión correctamente');
        }

        function updateHeaderUserUI() {
            const btnText = document.getElementById('loginBtnText');
            const btnIcon = document.getElementById('loginBtnIcon');
            const loginBtn = document.getElementById('loginOpenBtn');

            if (currentUser) {
                if (currentUser.role === 'admin') {
                    btnText.textContent = '👑 Panel de Control';
                    btnIcon.setAttribute('data-lucide', 'layout-dashboard');
                    loginBtn.style.background = 'linear-gradient(135deg, #ffd700, #ff9900)';
                    loginBtn.style.color = '#04080d';
                    loginBtn.style.boxShadow = '0 0 20px rgba(255, 215, 0, 0.6)';
                    loginBtn.title = 'Ir al Panel de Control de Administrador';
                    loginBtn.onclick = () => { window.location.href = "{{ route('panel') }}"; };
                } else {
                    btnText.textContent = currentUser.name;
                    btnIcon.setAttribute('data-lucide', 'user-check');
                    loginBtn.style.background = '';
                    loginBtn.style.color = '';
                    loginBtn.style.boxShadow = '';
                    loginBtn.title = `Cuenta de ${currentUser.name} (Click para ver perfil)`;
                    loginBtn.onclick = () => { openLoginModal(); };
                }
            } else {
                btnText.textContent = 'Iniciar Sesión';
                btnIcon.setAttribute('data-lucide', 'user');
                loginBtn.style.background = '';
                loginBtn.style.color = '';
                loginBtn.style.boxShadow = '';
                loginBtn.title = 'Acceder a tu cuenta de cliente';
                loginBtn.onclick = () => { openLoginModal(); };
            }
            lucide.createIcons();
        }

        function renderAuthState() {
            const formsView = document.getElementById('authFormsView');
            const profileView = document.getElementById('authProfileView');
            const clientBox = document.getElementById('clientProfileBox');
            const adminBox = document.getElementById('adminProfileBox');
            const profileCartCount = document.getElementById('profileCartCount');

            if (profileCartCount) {
                profileCartCount.textContent = cart.reduce((sum, i) => sum + i.quantity, 0);
            }

            if (currentUser) {
                formsView.style.display = 'none';
                profileView.style.display = 'block';

                if (currentUser.role === 'admin') {
                    if (clientBox) clientBox.style.display = 'none';
                    if (adminBox) adminBox.style.display = 'block';
                    renderAdminProductsList();
                } else {
                    if (clientBox) clientBox.style.display = 'block';
                    if (adminBox) adminBox.style.display = 'none';
                    document.getElementById('authProfileAvatar').textContent = currentUser.avatar;
                    document.getElementById('authProfileName').textContent = currentUser.name;
                    document.getElementById('authProfileEmail').textContent = currentUser.email;
                }
            } else {
                formsView.style.display = 'block';
                profileView.style.display = 'none';
                if (clientBox) clientBox.style.display = 'none';
                if (adminBox) adminBox.style.display = 'none';
            }
        }

        function loadSavedUserSession() {
            try {
                const saved = localStorage.getItem('luan_user_session');
                if (saved) {
                    currentUser = JSON.parse(saved);
                    updateHeaderUserUI();
                }
            } catch (err) {
                console.error('Error al cargar sesión guardada:', err);
            }
        }

        // Initialize Lucide icons and products on load
        document.addEventListener('DOMContentLoaded', () => {
            renderProducts();
            updateCartUI();
            loadSavedUserSession();
            lucide.createIcons();
        });
    </script>
</body>
</html>
