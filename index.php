<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CREATIVE.OS | Portfolio</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #131313;
            color: #e5e2e1;
            overflow-x: hidden;
        }

        .bento-card {
            border-radius: 2.5rem;
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .bento-card:hover {
            transform: scale(1.02);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#131313",
                        "on-surface": "#e5e2e1",
                        "on-secondary-container": "#302a00",
                        "on-tertiary-fixed": "#001f27",
                        "secondary-fixed-dim": "#dbc74e",
                        "inverse-surface": "#e5e2e1",
                        "surface-container-low": "#1c1b1b",
                        "tertiary-fixed": "#b0ecff",
                        "error": "#ffb4ab",
                        "primary-fixed": "#dae2ff",
                        "on-primary-fixed": "#001847",
                        "on-tertiary": "#003641",
                        "on-secondary-fixed-variant": "#514700",
                        "surface-container": "#201f1f",
                        "inverse-on-surface": "#313030",
                        "surface": "#131313",
                        "surface-tint": "#b2c5ff",
                        "on-primary-fixed-variant": "#0040a0",
                        "tertiary-fixed-dim": "#8ad1e6",
                        "on-secondary-fixed": "#201c00",
                        "surface-container-highest": "#353534",
                        "on-tertiary-fixed-variant": "#004e5e",
                        "primary-container": "#5d8dfe",
                        "on-primary-container": "#002666",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-bright": "#393939",
                        "error-container": "#93000a",
                        "on-tertiary-container": "#002f3a",
                        "primary": "#b2c5ff",
                        "surface-container-high": "#2a2a2a",
                        "primary-fixed-dim": "#b2c5ff",
                        "on-primary": "#002c72",
                        "outline": "#8d909f",
                        "secondary": "#f9e467",
                        "on-surface-variant": "#c3c6d5",
                        "on-error": "#690005",
                        "tertiary-container": "#539baf",
                        "surface-dim": "#131313",
                        "secondary-container": "#a39118",
                        "on-background": "#e5e2e1",
                        "surface-variant": "#353534",
                        "inverse-primary": "#1b58c6",
                        "secondary-fixed": "#f9e467",
                        "on-secondary": "#383100",
                        "outline-variant": "#434653",
                        "tertiary": "#8ad1e6",
                        "on-error-container": "#ffdad6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-desktop": "64px",
                        "container-max": "1280px",
                        "gutter": "24px",
                        "margin-mobile": "20px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "headline-md": ["Plus Jakarta Sans"],
                        "label-bold": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {
                            "lineHeight": "1.3",
                            "fontWeight": "600"
                        }],
                        "label-bold": ["14px", {
                            "lineHeight": "1",
                            "fontWeight": "700"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "1.2",
                            "fontWeight": "700"
                        }],
                        "display-lg": ["64px", {
                            "lineHeight": "1.1",
                            "letterSpacing": "-0.04em",
                            "fontWeight": "800"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-surface">
    <!-- Header / TopNavBar -->
    <nav class="w-full sticky top-0 z-50 backdrop-blur-md bg-background/80">
        <div
            class="flex justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-unit h-20">
            <div class="font-headline-md text-headline-md font-black text-on-surface tracking-tighter">Porto</div>
            <div class="hidden md:flex gap-8 items-center">
                <a class="text-primary font-bold border-b-2 border-primary pb-1 font-label-bold text-label-bold"
                    href="Work.php">Work</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors duration-300 font-label-bold text-label-bold"
                    href="#">Skills</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors duration-300 font-label-bold text-label-bold"
                    href="about.php">About</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors duration-300 font-label-bold text-label-bold"
                    href="contact.php">Contact</a>
            </div>
            <button
                class="bg-primary-container text-on-primary-container px-6 py-3 rounded-full font-label-bold text-label-bold scale-95 active:scale-90 transition-transform">
                Hire Me
            </button>
        </div>
    </nav>
    <main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop pt-12 pb-24">
        <!-- Hero Section -->
        <section class="mb-16">
            <div class="max-w-4xl">
                <h1 class="font-display-lg text-display-lg mb-6 leading-[1.05]">
                    Hi Am Adii. <br> My Dream Is <span class="text-primary">Raja Iblis</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    A meticulous fusion of strategy, design, and motion. Crafting digital ecosystems that don't just
                    exist—they perform with precision and energy.
                </p>
            </div>
        </section>
        <!-- Bento Grid Showcase (Subtle shift applied) -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
            <!-- Status Card (Blue) - SWAPPED WITH MAIN CARD -->
            <div
                class="md:col-span-4 h-[400px] bento-card bg-primary-container text-on-primary-container p-10 flex flex-col justify-between">
                <div class="flex justify-between items-start">
                    <div class="bg-black rounded-2xl w-16 h-16 flex items-center justify-center">
                        <div class="text-white font-black text-xl leading-none text-center">TO<br />DO</div>
                    </div>
                    <span class="font-label-bold">ToDo</span>
                </div>
                <div class="space-y-4">
                    <div class="bg-secondary/20 p-6 rounded-3xl border border-secondary/30 backdrop-blur-sm">
                        <p class="font-headline-md text-headline-md">Almost there! Just one more task to complete your
                            daily goal.</p>
                    </div>
                    <div class="bg-black p-6 rounded-3xl">
                        <p class="text-on-surface font-body-md">Stay focused! Your most important task is calling...</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full bg-secondary text-black flex items-center justify-center">
                        <span class="material-symbols-outlined">close</span>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-secondary text-black flex items-center justify-center">
                        <span class="material-symbols-outlined"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </div>
                </div>
            </div>
            <!-- Main Portfolio Card (Yellow) - SWAPPED WITH STATUS CARD -->
            <div
                class="md:col-span-8 h-[400px] bento-card bg-secondary text-on-secondary-container p-10 flex flex-col justify-center items-center relative overflow-hidden group">
                <div class="text-[120px] font-black tracking-tighter flex items-center gap-4">
                    T<span
                        class="bg-black text-secondary rounded-full w-24 h-24 flex items-center justify-center text-5xl">
                        <span class="material-symbols-outlined !text-6xl"
                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                    </span>D<span
                        class="bg-black text-secondary rounded-full w-24 h-24 flex items-center justify-center text-5xl">
                        <span class="material-symbols-outlined !text-6xl"
                            style="font-variation-settings: 'FILL' 1;">close</span>
                    </span>
                </div>
                <div
                    class="absolute bottom-10 right-10 opacity-0 group-hover:opacity-100 transition-opacity bg-black text-secondary px-6 py-2 rounded-full font-label-bold">
                    View Project
                </div>
            </div>
            <!-- Side Image/App Card -->
            <div
                class="md:col-span-4 h-[440px] bento-card bg-tertiary-container p-10 flex flex-col justify-center items-center relative overflow-hidden">
                <div class="w-40 h-40 bg-black rounded-[40px] flex items-center justify-center z-10 shadow-2xl">
                    <div class="text-white font-black text-4xl text-center leading-none">TO<br />DO</div>
                </div>
                <div class="absolute bottom-20 flex gap-4 w-full justify-center px-6">
                    <div
                        class="bg-white/30 backdrop-blur-md p-4 rounded-2xl flex-1 max-w-[80px] h-20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-white">explore</span>
                    </div>
                    <div
                        class="bg-white/30 backdrop-blur-md p-4 rounded-2xl flex-1 max-w-[80px] h-20 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-white">music_note</span>
                    </div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
            <!-- Quote/Typo Card -->
            <div class="md:col-span-3 h-[440px] bento-card bg-white text-black p-10 flex flex-col justify-between">
                <div class="space-y-2">
                    <h2 class="text-[44px] font-black leading-tight">Your Life,<br />Your Tasks,<br />Your Way.</h2>
                    <p class="text-black/50 font-label-bold">todo.com</p>
                </div>
                <div class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center">
                    <span class="material-symbols-outlined">arrow_outward</span>
                </div>
            </div>
            <!-- Abstract Graphic Card -->
            <div
                class="md:col-span-2 h-[440px] bento-card bg-primary text-on-primary p-10 flex flex-col justify-end relative overflow-hidden">
                <div class="absolute top-10 left-10 text-6xl">
                    <span class="material-symbols-outlined !text-8xl opacity-20"
                        style="font-variation-settings: 'FILL' 1;">schedule</span>
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full border-4 border-on-primary/30 flex items-center justify-center">
                        <span class="material-symbols-outlined !text-4xl">add</span>
                    </div>
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-64 h-64 border-8 border-on-primary/10 rounded-full scale-150"></div>
                </div>
            </div>
            <!-- Activity List Card -->
            <div class="md:col-span-3 h-[440px] flex flex-col gap-4">
                <div
                    class="flex-1 bento-card bg-tertiary-fixed text-on-tertiary-fixed p-6 flex flex-col justify-center">
                    <span class="text-[10px] font-bold opacity-60 uppercase tracking-widest mb-1">Today 1:10 AM</span>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">check</span>
                        </div>
                        <span class="font-headline-md text-headline-md">Exercise in GYM</span>
                    </div>
                </div>
                <div
                    class="flex-1 bento-card bg-secondary text-on-secondary-container p-6 flex flex-col justify-center">
                    <span class="text-[10px] font-bold opacity-60 uppercase tracking-widest mb-1">Today 3:15 AM</span>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">check</span>
                        </div>
                        <span class="font-headline-md text-headline-md">Client Work</span>
                    </div>
                </div>
                <div
                    class="flex-1 bento-card bg-primary-container text-on-primary-container p-6 flex flex-col justify-center">
                    <span class="text-[10px] font-bold opacity-60 uppercase tracking-widest mb-1">Today 9:10 PM</span>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm">close</span>
                        </div>
                        <span class="font-headline-md text-headline-md">Dinner with JK</span>
                    </div>
                </div>
                <div class="flex-1 bento-card bg-white text-black p-6 flex flex-col justify-center">
                    <span class="text-[10px] font-bold opacity-60 uppercase tracking-widest mb-1">Today 2:10 AM</span>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">check</span>
                        </div>
                        <span class="font-headline-md text-headline-md">Family Time</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Project Showcase (Modified Layout: 2/3 and 1/3) -->
        <section class="mt-24">
            <div class="flex justify-between items-end mb-12">
                <h2 class="font-display-lg text-[48px]">Featured Projects</h2>
                <button class="text-primary font-label-bold flex items-center gap-2 group">
                    View All Works
                    <span
                        class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- Larger Hero Project (2/3 width) -->
                <div
                    class="md:col-span-8 group relative rounded-[2.5rem] overflow-hidden aspect-[16/9] md:aspect-auto md:h-[500px] bg-surface-container">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A sophisticated dark mode dashboard UI on a glass surface with electric blue glowing data visualizations. The interface shows complex analytics with a minimalist, high-end feel."
                        src="luca-bravo-XJXWbfSo2f0-unsplash.jpg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent p-10 flex flex-col justify-end">
                        <h3 class="font-headline-lg text-headline-lg text-white">Project Nebula</h3>
                        <p class="text-on-surface-variant font-body-md mt-2">UX/UI Design &amp; Motion Systems</p>
                    </div>
                </div>
                <!-- Smaller Project (1/3 width) -->
                <div
                    class="md:col-span-4 group relative rounded-[2.5rem] overflow-hidden aspect-[4/5] md:aspect-auto md:h-[500px] bg-surface-container">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="A vibrant mobile app interface featuring bold sunshine yellow buttons and elegant typography on a deep charcoal background. The design is sleek, modern, and focuses on high-quality user experience."
                        src="mohammad-rahmani-DwDZ5mgwhsc-unsplash.jpg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent p-10 flex flex-col justify-end">
                        <h3 class="font-headline-lg text-headline-lg text-white">Quantum Pulse</h3>
                        <p class="text-on-surface-variant font-body-md mt-2">Brand Identity &amp; WebGL Development</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full py-12 mt-12 bg-surface-container-lowest border-t border-outline-variant">
        <div
            class="flex flex-col md:flex-row justify-between items-center max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="font-headline-md text-headline-md text-on-surface font-black tracking-tighter mb-8 md:mb-0">
                CREATIVE.OS</div>
            <div class="flex gap-8 mb-8 md:mb-0">
                <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md"
                    href="#">Dribbble</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md"
                    href="#">Behance</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md"
                    href="#">LinkedIn</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md"
                    href="#">GitHub</a>
            </div>
            <div class="font-body-md text-body-md text-on-surface-variant text-center md:text-right">
                © 2024 Creative Portfolio. Built with Precision.
            </div>
        </div>
    </footer>
    <script>
        // Smooth hover micro-interactions
        document.querySelectorAll('.bento-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'rotate(15deg) scale(1.1)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'rotate(0deg) scale(1)';
                }
            });
        });
    </script>
</body>

</html>
