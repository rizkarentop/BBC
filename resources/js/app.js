document.addEventListener("DOMContentLoaded", () => {

/**
     * Projects page — live search + tag filter
     */
    const projectsSearch = document.getElementById("projects-search");
    const projectsGrid = document.getElementById("projects-grid");
    const projectsNoResults = document.getElementById("projects-no-results");
    const projectsFilter = document.getElementById("projects-filter");

    if (projectsSearch && projectsGrid && projectsNoResults && projectsFilter) {
        const projectCards = projectsGrid.querySelectorAll(".project-card");
        const filterButtons = projectsFilter.querySelectorAll(".project-filter-btn");
        let activeTag = "all";

        const applyProjectsFilter = () => {
            const query = projectsSearch.value.trim().toLowerCase();
            let visibleCount = 0;

            projectCards.forEach((card) => {
                const tagMatches = activeTag === "all" || card.dataset.tag === activeTag;
                const haystack = card.dataset.search || "";
                const textMatches = haystack.includes(query);
                const isMatch = tagMatches && textMatches;

                card.style.display = isMatch ? "" : "none";
                if (isMatch) visibleCount++;
            });

            projectsNoResults.classList.toggle("hidden", visibleCount > 0);
        };

        projectsSearch.addEventListener("input", applyProjectsFilter);

        filterButtons.forEach((btn) => {
            btn.addEventListener("click", () => {
                activeTag = btn.dataset.tag;

                filterButtons.forEach((b) => {
                    const isActive = b === btn;
                    b.classList.remove("bg-[#252AB8]", "text-white", "border-[#252AB8]");
                    b.classList.add("border-slate-300", "bg-white", "text-slate-600");
                    if (isActive) {
                        b.classList.add("bg-[#252AB8]", "text-white", "border-[#252AB8]");
                        b.classList.remove("border-slate-300", "bg-white", "text-slate-600");
                    }
                });

                applyProjectsFilter();
            });
        });
    }

    /**
     * Mobile navigation menu toggle
     */
    const menuButton = document.getElementById("menu-button");
    const menu = document.getElementById("mobile-menu");
    const iconOpen = document.getElementById("menu-icon-open");
    const iconClose = document.getElementById("menu-icon-close");

    if (menuButton && menu) {

        menuButton.addEventListener("click", () => {
            const isHidden = menu.classList.toggle("hidden");

            menuButton.setAttribute("aria-expanded", String(!isHidden));

            if (iconOpen && iconClose) {
                iconOpen.classList.toggle("hidden", !isHidden);
                iconClose.classList.toggle("hidden", isHidden);
            }
        });

        // Close mobile menu when a link inside it is clicked
        menu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                menu.classList.add("hidden");
                menuButton.setAttribute("aria-expanded", "false");

                if (iconOpen && iconClose) {
                    iconOpen.classList.remove("hidden");
                    iconClose.classList.add("hidden");
                }
            });
        });
    }

    /**
     * Navbar background switches from transparent to solid on scroll
     */
    const navbar = document.getElementById("navbar");

    const updateNavbarState = () => {
        if (!navbar) return;
        navbar.classList.toggle("nav-scrolled", window.scrollY > 40);
    };

    if (navbar) {
        updateNavbarState();
        window.addEventListener("scroll", updateNavbarState, { passive: true });
    }

    /**
     * Back-to-top button
     */
    const backToTop = document.getElementById("back-to-top");

    if (backToTop) {

        const updateBackToTopVisibility = () => {
            const shouldShow = window.scrollY > 500;
            backToTop.classList.toggle("hidden", !shouldShow);
            backToTop.classList.toggle("flex", shouldShow);
        };

        updateBackToTopVisibility();
        window.addEventListener("scroll", updateBackToTopVisibility, { passive: true });

        backToTop.addEventListener("click", (event) => {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    // ================================================================
    //  ORBIT SECTION — Scroll Reveal & Hover Interactions
    // ================================================================

    /**
     * Initialize orbit section interactions.
     */
    const orbitSection = document.querySelector(".orbit-section");
    if (!orbitSection) return;

    const orbitCenter = orbitSection.querySelector(".orbit-center");
    const orbitNodes = orbitSection.querySelectorAll(".orbit-node");
    const orbitLines = orbitSection.querySelectorAll(".orbit-line");
    const orbitTitle = orbitSection.querySelector(".orbit-title");
    const orbitSubtitle = orbitSection.querySelector(".orbit-subtitle");
    const orbitBadge = orbitSection.querySelector(".orbit-badge");

    // --- Scroll Reveal Sequence ---

    const revealOrbit = () => {
        // 1. Show badge + title + subtitle first (all at once)
        if (orbitBadge) {
            orbitBadge.style.transition = "opacity 0.6s ease, transform 0.6s ease";
            orbitBadge.style.opacity = "1";
            orbitBadge.style.transform = "translateY(0)";
        }
        if (orbitTitle) {
            orbitTitle.style.transition = "opacity 0.6s ease, transform 0.6s ease";
            orbitTitle.style.opacity = "1";
            orbitTitle.style.transform = "translateY(0)";
        }
        if (orbitSubtitle) {
            orbitSubtitle.style.transition = "opacity 0.6s ease, transform 0.6s ease 0.15s";
            orbitSubtitle.style.opacity = "1";
            orbitSubtitle.style.transform = "translateY(0)";
        }

        // 2. Show center hub after 300ms
        setTimeout(() => {
            if (orbitCenter) {
                orbitCenter.classList.add("revealed");
            }
        }, 300);

        // 3. Draw connection lines after 700ms
        setTimeout(() => {
            orbitLines.forEach((line, index) => {
                setTimeout(() => {
                    line.classList.add("revealed");
                }, index * 120);
            });
        }, 700);

        // 4. Show business cards sequentially after lines start drawing
        setTimeout(() => {
            orbitNodes.forEach((node, index) => {
                setTimeout(() => {
                    node.classList.add("revealed");
                }, index * 150);
            });
        }, 1000);
    };

    // Reset elements for reveal
    const resetOrbitForReveal = () => {
        if (orbitBadge) {
            orbitBadge.style.opacity = "0";
            orbitBadge.style.transform = "translateY(10px)";
        }
        if (orbitTitle) {
            orbitTitle.style.opacity = "0";
            orbitTitle.style.transform = "translateY(10px)";
        }
        if (orbitSubtitle) {
            orbitSubtitle.style.opacity = "0";
            orbitSubtitle.style.transform = "translateY(10px)";
        }
        if (orbitCenter) {
            orbitCenter.classList.remove("revealed");
        }
        orbitLines.forEach((line) => {
            line.classList.remove("revealed");
        });
        orbitNodes.forEach((node) => {
            node.classList.remove("revealed");
        });
    };

    resetOrbitForReveal();

    // Intersection Observer
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    revealOrbit();
                } else {
                    // Optional: reset when leaving viewport so it re-reveals
                    // Uncomment below if you want re-trigger on scroll back
                    // resetOrbitForReveal();
                }
            });
        },
        {
            threshold: 0.2,
            rootMargin: "0px 0px -50px 0px",
        }
    );

    observer.observe(orbitSection);

    // --- Hover Interaction: Connection Line Glow + Dot Speed Up ---

    // Store original durations for each dot
    const dotDurations = {
        'dot-power-plant': 3.8,
        'dot-contractor': 5,
        'dot-supplier': 4.5,
        'dot-plantation': 4.2,
    };

    orbitNodes.forEach((node) => {
        const card = node.querySelector(".orbit-card");
        const lineId = node.dataset.line;
        const glowLineId = node.dataset.glowLine;
        const dotId = node.dataset.dot;
        const dotGlowId = node.dataset.dotGlow;

        const mainLine = lineId ? document.getElementById(lineId) : null;
        const glowLine = glowLineId ? document.getElementById(glowLineId) : null;
        const dotEl = dotId ? document.getElementById(dotId) : null;
        const dotGlowEl = dotGlowId ? document.getElementById(dotGlowId) : null;

        if (!card) return;

        card.addEventListener("mouseenter", () => {
            if (mainLine) mainLine.classList.add("active");
            if (glowLine) glowLine.classList.add("card-hovered");

            // Speed up the corresponding energy dot by ~30%
            if (dotEl) {
                const motionEl = dotEl.querySelector("animateMotion");
                const motionGlow = dotGlowEl ? dotGlowEl.querySelector("animateMotion") : null;
                if (motionEl) {
                    const origDur = dotDurations[dotId] || 3.8;
                    motionEl.setAttribute("dur", (origDur * 0.7).toFixed(2) + "s");
                }
                if (motionGlow) {
                    const origDur = dotDurations[dotId] || 3.8;
                    motionGlow.setAttribute("dur", (origDur * 0.7).toFixed(2) + "s");
                }
            }
        });

        card.addEventListener("mouseleave", () => {
            if (mainLine) mainLine.classList.remove("active");
            if (glowLine) glowLine.classList.remove("card-hovered");

            // Restore original speed
            if (dotEl) {
                const motionEl = dotEl.querySelector("animateMotion");
                const motionGlow = dotGlowEl ? dotGlowEl.querySelector("animateMotion") : null;
                if (motionEl) {
                    const origDur = dotDurations[dotId] || 3.8;
                    motionEl.setAttribute("dur", origDur.toFixed(2) + "s");
                }
                if (motionGlow) {
                    const origDur = dotDurations[dotId] || 3.8;
                    motionGlow.setAttribute("dur", origDur.toFixed(2) + "s");
                }
            }
        });
    });

    // ================================================================
    //  TIMELINE (Mobile) — Scroll Reveal
    // ================================================================

    const timelineNodes = document.querySelectorAll(".orbit-timeline-node");
    if (timelineNodes.length > 0) {
        const timelineObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("revealed");
                    }
                });
            },
            {
                threshold: 0.15,
            }
        );

        timelineNodes.forEach((node) => timelineObserver.observe(node));
    }

});

// ================================================================
//  VISION & MISSION — Fade-up Reveal on Scroll
//  (Separate listener so it runs independently of the orbit section)
// ================================================================
document.addEventListener("DOMContentLoaded", () => {

    const vmRevealEls = document.querySelectorAll(".vm-reveal");

    if (vmRevealEls.length === 0) return;

    // Respect the user's reduced-motion preference.
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (prefersReducedMotion) {
        // Show everything immediately, no animation.
        vmRevealEls.forEach((el) => el.classList.add("is-visible"));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    // Stop observing once revealed.
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.15,
            rootMargin: "0px 0px -60px 0px",
        }
    );

    vmRevealEls.forEach((el) => observer.observe(el));
});

// ================================================================
//  VISION & MISSION (PREMIUM) — Scroll Reveal
//  Separate observer for the vmp-* premium layout.
//  The whole container fades upward, then the three columns
//  (Mission / Vision / Core Values) appear sequentially.
// ================================================================
document.addEventListener("DOMContentLoaded", () => {

    const vmpRevealEls = document.querySelectorAll(".vmp-reveal");

    if (vmpRevealEls.length === 0) return;

    // Respect the user's reduced-motion preference.
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (prefersReducedMotion) {
        // Show everything immediately, no animation.
        vmpRevealEls.forEach((el) => el.classList.add("is-visible"));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    // Stop observing once revealed.
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -80px 0px",
        }
    );

    vmpRevealEls.forEach((el) => observer.observe(el));
});

// ================================================================
//  VISION & MISSION (PREMIUM HIGHLIGHT) — Scroll Reveal
//  Separate observer for the vmg-* layout.
//  Heading → Highlight container → Mission/Vision columns → Values
// ================================================================
document.addEventListener("DOMContentLoaded", () => {

    const vmgRevealEls = document.querySelectorAll(".vmg-reveal");

    if (vmgRevealEls.length === 0) return;

    // Respect the user's reduced-motion preference.
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    if (prefersReducedMotion) {
        // Show everything immediately, no animation.
        vmgRevealEls.forEach((el) => el.classList.add("is-visible"));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    // Stop observing once revealed.
                    observer.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -80px 0px",
        }
    );

    vmgRevealEls.forEach((el) => observer.observe(el));
});

