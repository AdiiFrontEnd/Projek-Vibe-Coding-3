<!doctype html>

<html class="dark" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About | CREATIVE.OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              surface: "#131313",
              "tertiary-fixed": "#b0ecff",
              "on-secondary-fixed-variant": "#514700",
              "surface-tint": "#b2c5ff",
              "on-tertiary-fixed": "#001f27",
              primary: "#b2c5ff",
              "on-surface-variant": "#c3c6d5",
              "on-error": "#690005",
              "secondary-container": "#a39118",
              "on-primary": "#002c72",
              "on-secondary": "#383100",
              "on-error-container": "#ffdad6",
              "on-secondary-container": "#302a00",
              "surface-dim": "#131313",
              "inverse-on-surface": "#313030",
              "tertiary-fixed-dim": "#8ad1e6",
              outline: "#8d909f",
              "secondary-fixed-dim": "#dbc74e",
              error: "#ffb4ab",
              "on-primary-fixed-variant": "#0040a0",
              "surface-container-low": "#1c1b1b",
              "surface-container-highest": "#353534",
              "surface-container-high": "#2a2a2a",
              "on-background": "#e5e2e1",
              "primary-fixed-dim": "#b2c5ff",
              "outline-variant": "#434653",
              "surface-container-lowest": "#0e0e0e",
              background: "#131313",
              secondary: "#dbc74e",
              "on-surface": "#e5e2e1",
              "on-primary-container": "#002666",
              "inverse-surface": "#e5e2e1",
              "primary-container": "#5d8dfe",
              "secondary-fixed": "#f9e467",
              tertiary: "#8ad1e6",
              "primary-fixed": "#dae2ff",
              "on-tertiary-container": "#002f3a",
              "on-tertiary": "#003641",
              "on-tertiary-fixed-variant": "#004e5e",
              "on-primary-fixed": "#001847",
              "error-container": "#93000a",
              "on-secondary-fixed": "#201c00",
              "surface-container": "#201f1f",
              "inverse-primary": "#1b58c6",
              "surface-variant": "#353534",
              "tertiary-container": "#539baf",
              "surface-bright": "#393939",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              "margin-desktop": "64px",
              gutter: "24px",
              unit: "8px",
              "margin-mobile": "20px",
              "container-max": "1280px",
            },
            fontFamily: {
              "display-lg": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "label-bold": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "headline-lg-mobile": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "display-lg": [
                "64px",
                {
                  lineHeight: "1.1",
                  letterSpacing: "-0.04em",
                  fontWeight: "800",
                },
              ],
              "headline-md": ["24px", { lineHeight: "1.3", fontWeight: "600" }],
              "label-bold": ["14px", { lineHeight: "1", fontWeight: "700" }],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "1.2",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-lg-mobile": [
                "28px",
                { lineHeight: "1.2", fontWeight: "700" },
              ],
              "body-md": ["16px", { lineHeight: "1.5", fontWeight: "400" }],
              "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
            },
          },
        },
      };
    </script>
    <style>
      body {
        background-color: #131313;
        color: #e5e2e1;
        font-family: "Plus Jakarta Sans", sans-serif;
        overflow-x: hidden;
      }
      .bento-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 24px;
      }
      @media (max-width: 1024px) {
        .bento-grid {
          grid-template-columns: repeat(6, 1fr);
        }
      }
      @media (max-width: 640px) {
        .bento-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      .bento-card {
        transition: transform 0.2s ease-out;
        cursor: default;
      }
      .bento-card:hover {
        transform: scale(1.015);
      }
      .material-symbols-outlined {
        font-variation-settings:
          "FILL" 0,
          "wght" 400,
          "GRAD" 0,
          "opsz" 24;
      }
    </style>
  </head>
  <body class="bg-surface text-on-surface">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md">
      <div
        class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto"
      >
        <div
          class="font-display-lg text-headline-md tracking-tighter text-on-surface"
        >
          CREATIVE.OS
        </div>
        <div class="hidden md:flex gap-8 items-center">
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold hover:scale-105 transition-transform duration-200"
            href="Work.html"
            >Work</a
          >
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold hover:scale-105 transition-transform duration-200"
            href="index.html"
            >Skills</a
          >
          <a
            class="text-secondary font-bold border-b-2 border-secondary pb-1 font-label-bold text-label-bold hover:scale-105 transition-transform duration-200"
            href="about.html"
            >About</a
          >
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold hover:scale-105 transition-transform duration-200"
            href="contact.html"
            >Contact</a
          >
        </div>
        <button
          class="bg-primary text-on-primary px-6 py-2 rounded-full font-label-bold text-label-bold hover:scale-105 transition-transform duration-200 active:scale-95"
        >
          Let's Talk
        </button>
      </div>
    </nav>
    <main
      class="pt-32 pb-20 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto"
    >
      <div class="bento-grid">
        <!-- Hero Header Card -->
        <section
          class="col-span-full md:col-span-8 bg-surface-container-high rounded-[40px] p-10 flex flex-col justify-end min-h-[320px] relative overflow-hidden bento-card"
        >
          <div class="absolute top-0 right-0 p-8 opacity-10">
            <span class="material-symbols-outlined text-[120px]"
              >architecture</span
            >
          </div>
          <h1
            class="font-display-lg text-display-lg md:text-display-lg text-primary mb-4 leading-tight"
          >
            Designing<br />The Future.
          </h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-md">
            CREATIVE.OS is the digital workspace of a multidisciplinary designer
            obsessed with clean code and electric aesthetics.
          </p>
        </section>
        <!-- Profile Image Card -->
        <section
          class="col-span-full md:col-span-4 bg-secondary-container rounded-[40px] overflow-hidden relative group bento-card min-h-[320px]"
        >
          <div
            class="absolute inset-0 grayscale hover:grayscale-0 transition-all duration-500"
          >
            <div
              class="w-full h-full bg-cover bg-center"
              data-alt="A striking professional portrait of a creative designer with a confident expression, set against a dark, moody studio background with subtle electric blue lighting accents. The style is modern and high-contrast, matching a sophisticated dark-mode UI aesthetic with sharp focus and cinematic depth of field."
              style="
                background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuAiwiTG6C01uyPfCUIkwAiJ_gp4pc4T0U2Dl6Zf4oD-s4ONUeg1xUOFoKucTLpKys7ViGRvhLWOjiHRjbQNtMm05PxVd-YuGDtlUxaf3Hb5xypnWtJBtVewuZ-C-CCJItnHaLNu7K5vPXjOJ_0KLQNDbFzCEVoiBA5U5pEaiDYk3k6cC69h2JTlZKQCiVL__4OOoEvtw_ZLoHGAk5VXjtoYgjek8ZElbTn1dHJneIv9sBdJHSk5U0PvXRdW3hNzdSaCdbkMvFejUA&quot;);
              "
            ></div>
          </div>
          <div
            class="absolute bottom-0 left-0 w-full p-8 bg-gradient-to-t from-surface/80 to-transparent"
          >
            <span
              class="font-label-bold text-label-bold bg-secondary text-on-secondary px-3 py-1 rounded-full uppercase tracking-wider"
              >Founder</span
            >
          </div>
        </section>
        <!-- Philosophy Block -->
        <section
          class="col-span-full md:col-span-5 bg-surface-container-highest rounded-[40px] p-10 flex flex-col justify-between bento-card"
        >
          <div>
            <div
              class="w-12 h-12 rounded-full bg-primary flex items-center justify-center mb-8"
            >
              <span class="material-symbols-outlined text-on-primary"
                >psychology</span
              >
            </div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">
              My Philosophy
            </h2>
            <p class="font-body-md text-body-md text-on-surface-variant">
              I believe that design is not just how it looks, but how it works
              at scale. My mission is to bridge the gap between high-energy
              visual storytelling and functional engineering precision. Every
              pixel has a purpose.
            </p>
          </div>
          <div class="mt-8 border-t border-outline-variant pt-6">
            <p class="font-label-bold text-label-bold text-tertiary">
              #Innovation #Precision #Craft
            </p>
          </div>
        </section>
        <!-- Skills & Tools Card -->
        <section
          class="col-span-full md:col-span-7 bg-surface-container rounded-[40px] p-10 bento-card"
        >
          <h2 class="font-headline-lg text-headline-lg text-on-surface mb-8">
            Skills &amp; Arsenal
          </h2>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-primary"
                >palette</span
              >
              <span class="font-label-bold text-label-bold">UI Design</span>
            </div>
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-secondary">code</span>
              <span class="font-label-bold text-label-bold">Frontend Dev</span>
            </div>
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-tertiary"
                >animation</span
              >
              <span class="font-label-bold text-label-bold">Motion Design</span>
            </div>
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-primary"
                >terminal</span
              >
              <span class="font-label-bold text-label-bold">Node.js</span>
            </div>
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-secondary"
                >token</span
              >
              <span class="font-label-bold text-label-bold">Design Ops</span>
            </div>
            <div
              class="flex items-center gap-3 p-4 bg-surface-container-low rounded-2xl border border-outline-variant/30"
            >
              <span class="material-symbols-outlined text-tertiary"
                >deployed_code</span
              >
              <span class="font-label-bold text-label-bold">Three.js</span>
            </div>
          </div>
          <div class="mt-8 flex flex-wrap gap-2">
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[12px] font-bold"
              >FIGMA</span
            >
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[12px] font-bold"
              >REACT</span
            >
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[12px] font-bold"
              >TAILWIND</span
            >
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[12px] font-bold"
              >TYPESCRIPT</span
            >
            <span
              class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-[12px] font-bold"
              >BLENDER</span
            >
          </div>
        </section>
        <!-- Experience Grid -->
        <section
          class="col-span-full bg-surface-container-high rounded-[40px] p-10 bento-card"
        >
          <div class="flex justify-between items-center mb-10">
            <h2 class="font-headline-lg text-headline-lg text-on-surface">
              Past Chapters
            </h2>
            <span
              class="text-on-surface-variant font-label-bold text-label-bold"
              >2018 — PRESENT</span
            >
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="space-y-4">
              <div class="text-secondary font-display-lg text-headline-md">
                01
              </div>
              <h3 class="font-headline-md text-headline-md">
                Lead Product Designer
              </h3>
              <p class="text-on-surface-variant font-body-md text-body-md">
                Streamline AI — 2021/2024
              </p>
              <p class="text-outline font-body-md text-body-md">
                Pioneered the design system used by 500k+ enterprise users
                worldwide.
              </p>
            </div>
            <div class="space-y-4">
              <div class="text-primary font-display-lg text-headline-md">
                02
              </div>
              <h3 class="font-headline-md text-headline-md">
                Visual Identity Specialist
              </h3>
              <p class="text-on-surface-variant font-body-md text-body-md">
                Neon Collective — 2019/2021
              </p>
              <p class="text-outline font-body-md text-body-md">
                Crafted high-contrast digital brands for emerging tech startups.
              </p>
            </div>
            <div class="space-y-4">
              <div class="text-tertiary font-display-lg text-headline-md">
                03
              </div>
              <h3 class="font-headline-md text-headline-md">
                Creative Technologist
              </h3>
              <p class="text-on-surface-variant font-body-md text-body-md">
                Freelance — 2018/2019
              </p>
              <p class="text-outline font-body-md text-body-md">
                Developing interactive web experiences and immersive UI
                experiments.
              </p>
            </div>
          </div>
        </section>
        <!-- Small CTA / Socials Card -->
        <section
          class="col-span-full md:col-span-4 bg-primary text-on-primary rounded-[40px] p-8 flex flex-col justify-between bento-card"
        >
          <h3 class="font-headline-md text-headline-md leading-tight">
            Got a project in mind?
          </h3>
          <div class="flex items-center justify-between mt-12">
            <span class="material-symbols-outlined text-4xl"
              >arrow_outward</span
            >
            <button
              class="bg-on-primary text-primary px-6 py-2 rounded-full font-label-bold text-label-bold"
            >
              Hire Me
            </button>
          </div>
        </section>
        <!-- Atmosphere Card -->
        <section
          class="col-span-full md:col-span-8 bg-surface-container-highest rounded-[40px] overflow-hidden relative bento-card group"
        >
          <div
            class="absolute inset-0 opacity-40 group-hover:opacity-60 transition-opacity"
          ></div>
          <div class="relative z-10 p-10 h-full flex flex-col justify-center">
            <h2 class="font-display-lg text-headline-lg text-on-surface">
              Atmospheric<br />Precision.
            </h2>
            <p
              class="font-body-md text-body-md text-on-surface-variant mt-4 max-w-sm"
            >
              Every project I take on is treated as a unique organism, evolving
              through code and color.
            </p>
          </div>
        </section>
      </div>
    </main>
    <!-- Footer -->
    <footer class="w-full rounded-t-xl bg-surface-container-low mt-20">
      <div
        class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-gutter max-w-container-max mx-auto"
      >
        <div
          class="font-display-lg text-headline-md text-on-surface mb-4 md:mb-0"
        >
          CREATIVE.OS
        </div>
        <div class="flex gap-6 mb-4 md:mb-0">
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >Dribbble</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >Behance</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >LinkedIn</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >GitHub</a
          >
        </div>
        <div class="font-body-md text-body-md text-tertiary">
          © 2024 CREATIVE.OS. All rights reserved.
        </div>
      </div>
    </footer>
    <script>
      // Micro-interaction for hover states
      document.querySelectorAll(".bento-card").forEach((card) => {
        card.addEventListener("mouseenter", () => {
          // Subtle interaction logic can be added here
        });
      });
    </script>
  </body>
</html>
