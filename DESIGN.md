---
name: "Bug Zoo"
description: "Локальная площадка с живыми багами интерфейса, логики и форм."
colors:
  primary: "#0D6EFD"
  accent: "#FD7E14"
  success: "#198754"
  danger: "#DC3545"
  bg: "#FFFFFF"
  bg-alt: "#F8F9FA"
  ink: "#212529"
  mute: "#6C757D"
  line: "#DEE2E6"
  card: "#FFFFFF"
typography:
  display:
    fontFamily: "Syne, ui-sans-serif, system-ui, sans-serif"
    fontSize: "clamp(2.5rem, 6vw, 4.6rem)"
    fontWeight: 800
    lineHeight: 0.95
    letterSpacing: "-0.04em"
  headline:
    fontFamily: "Syne, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 700
    lineHeight: 1.25
  title:
    fontFamily: "Syne, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1.15rem"
    fontWeight: 700
    lineHeight: 1.25
  body:
    fontFamily: "Outfit, ui-sans-serif, system-ui, sans-serif"
    fontSize: "1.05rem"
    fontWeight: 400
    lineHeight: 1.55
  label:
    fontFamily: "Outfit, ui-sans-serif, system-ui, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 500
    letterSpacing: "0.03em"
    textTransform: "uppercase"
  mono:
    fontFamily: "ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace"
    fontSize: "11px"
    fontWeight: 600
rounded:
  sm: "0.5rem"
  md: "0.75rem"
  lg: "1.25rem"
  full: "999px"
spacing:
  xs: "0.25rem"
  sm: "0.5rem"
  md: "1rem"
  lg: "1.5rem"
  xl: "2rem"
  "2xl": "3rem"
components:
  btn-primary:
    backgroundColor: "{colors.primary}"
    textColor: "#FFFFFF"
    rounded: "{rounded.md}"
    padding: "12px 24px"
    fontWeight: 600
    fontSize: "15px"
    fontFamily: "Outfit, ui-sans-serif, system-ui, sans-serif"
    transition: "all 0.3s ease"
  btn-primary-hover:
    backgroundColor: "#0b5ed7"
    transform: "translateY(-2px)"
    boxShadow: "0 4px 8px rgba(0,0,0,0.15)"
  btn-primary-active:
    transform: "translateY(0)"
  btn-ghost:
    backgroundColor: "transparent"
    textColor: "{colors.primary}"
    border: "2px solid {colors.primary}"
    rounded: "{rounded.md}"
    padding: "12px 24px"
    fontWeight: 600
    fontSize: "15px"
    fontFamily: "Outfit, ui-sans-serif, system-ui, sans-serif"
    transition: "all 0.3s ease"
  btn-ghost-hover:
    backgroundColor: "rgba(13, 111, 253, 0.1)"
    borderColor: "#0b5ed7"
    transform: "translateY(-2px)"
  exhibit-card:
    backgroundColor: "{colors.card}"
    border: "1px solid {colors.line}"
    rounded: "{rounded.lg}"
    padding: "20px"
    minHeight: "250px"
    boxShadow: "0 4px 6px rgba(0,0,0,0.1)"
    transition: "all 0.3s ease"
  exhibit-card-hover:
    transform: "translateY(-4px)"
    boxShadow: "0 6px 12px rgba(0,0,0,0.15)"
    borderColor: "{colors.primary}"
  exhibit-colored-1:
    backgroundColor: "{colors.primary}"
    textColor: "#FFFFFF"
  exhibit-colored-2:
    backgroundColor: "{colors.accent}"
    textColor: "#FFFFFF"
  exhibit-colored-3:
    backgroundColor: "{colors.success}"
    textColor: "#FFFFFF"
  input-field:
    backgroundColor: "{colors.bg}"
    border: "1px solid {colors.line}"
    rounded: "{rounded.md}"
    padding: "11px 12px"
    color: "{colors.ink}"
    fontFamily: "inherit"
    transition: "border-color 0.2s ease, outline 0.2s ease"
  input-field-focus:
    outline: "2px solid {colors.primary}"
    borderColor: "{colors.primary}"
  dropdown-menu:
    backgroundColor: "{colors.bg}"
    border: "1px solid {colors.primary}"
    rounded: "{rounded.md}"
    boxShadow: "0 4px 12px rgba(0,0,0,0.15)"
    padding: "6px"
  modal-overlay:
    backgroundColor: "rgba(0, 0, 0, 0.5)"
    backdropFilter: "blur(8px)"
  modal-box:
    backgroundColor: "{colors.bg}"
    border: "1px solid {colors.accent}"
    rounded: "1.25rem"
    padding: "28px"
    maxWidth: "380px"
    boxShadow: "0 30px 80px rgba(0,0,0,0.3)"
---

# Design System: Bug Zoo

## Overview

**Creative North Star: "The Lab Notebook"**

The Bug Zoo interface embodies the spirit of a scientific field notebook — methodical, purposeful, and designed for close observation. It balances clinical precision with approachable warmth, using a clean white background as "paper" and three distinct accent colors as "highlighters" for categorizing different bug species. The design prioritizes scanability and information hierarchy over decoration, allowing developers to focus on the bug behaviors themselves.

**Key Characteristics:**
- Offline-first, self-contained aesthetic — no external dependencies or network calls
- Three-color exhibit categorization system (blue/orange/green) for instant visual parsing
- Fixed header with persistent navigation and context
- Generous whitespace and clear visual rhythm
- Purposeful micro-interactions (hover lifts, focus rings, transitions)
- Russian-language interface with technical precision

## Colors

The palette is deliberately constrained: one primary blue for actions and navigation, one warm orange for secondary emphasis, one green for success states, and one red for errors. Neutral tones handle all text, backgrounds, and structural elements.

### Primary
- **Deep Trust Blue** (#0D6EFD): Primary actions, navigation active state, focus rings, exhibit category 1. Used sparingly as a highlighter — never as a background wash.

### Secondary
- **Field Orange** (#FD7E14): Secondary accent, exhibit category 2, tags, warning highlights. Warmer than primary, signals "attention needed" without urgency.

### Tertiary
- **Lab Green** (#198754): Success states, confirmed findings, exhibit category 3. Represents "verified" and "complete."

### Neutral
- **Paper White** (#FFFFFF): Main canvas, card backgrounds, modal surfaces.
- **Warm Paper** (#F8F9FA): Subtle alternate backgrounds, journal sidebar, disabled states.
- **Carbon Ink** (#212529): Primary text, headings, high-contrast content.
- **Graphite Mute** (#6C757D): Secondary text, labels, placeholders, metadata.
- **Hairline Gray** (#DEE2E6): Borders, dividers, input strokes, subtle structure.

### Named Rules

**The Three-Highlighter Rule.** Only three accent colors exist in the system (blue, orange, green). They are used for exhibit categorization and semantic states exclusively. No additional accent colors are introduced.

**The Rarity Rule.** Primary blue appears on ≤15% of any screen. Its visual weight comes from scarcity. Large backgrounds never use accent colors — cards remain white or warm paper.

**The Ink Hierarchy Rule.** Text uses only two weights of gray: Carbon Ink (#212529) for content, Graphite Mute (#6C757D) for metadata. No intermediate grays.

## Typography

**Display Font:** Syne (with ui-sans-serif fallback) — distinctive, geometric, authoritative
**Body Font:** Outfit (with ui-sans-serif fallback) — clean, readable, technical
**Label/Mono Font:** ui-monospace stack — for indices, code, technical data

**Character:** Syne brings editorial personality to headlines (reminiscent of scientific publication headers), while Outfit provides calm, legible body text for extended reading. The mono stack grounds technical details in a "terminal" voice.

### Hierarchy
- **Display** (800, clamp(2.5rem, 6vw, 4.6rem), 0.95): Hero headlines only. Maximum impact, minimum frequency.
- **Headline** (700, 1.25rem, 1.25): Section headers, journal title, modal headlines.
- **Title** (700, 1.15rem, 1.25): Exhibit titles, card headers, bug names.
- **Body** (400, 1.05rem, 1.55): Descriptions, prompts, explanatory text. Max line length ~65ch.
- **Label** (500, 0.875rem, 0.03em tracking, uppercase): Categories, tags, form labels, fact badges.
- **Mono** (600, 11px): Exhibit indices, technical values, timestamps.

### Named Rules

**The Display-on-Demand Rule.** Display size appears exactly once per page — the hero. No other element competes at that scale.

**The Label Consistency Rule.** All uppercase labels use the same tracking (0.03em), weight (500), and size (0.875rem). No exceptions.

## Layout

The spatial model is a centered, max-width container (1280px) with 24px horizontal padding at all breakpoints. The header is fixed; content flows beneath with 80px top offset.

**Grid:** The exhibit grid (`.pens`) uses a responsive 3-column layout at ≥960px, collapsing to single column below. Gap is consistently 24px.

**Rhythm:** Vertical spacing follows a 4px base unit. Major sections (hero, stage, journal) are separated by 40px (10× base). Component internal padding uses 16px (4×) or 20px (5×).

**Responsive behavior:** At 960px, the sidebar journal moves above the exhibit grid (order: -1). Header stacks vertically. Exhibit cards stack to single column.

## Elevation & Depth

The system is predominantly flat with **tonal layering** as the primary depth mechanism. Shadows are reserved for interactive feedback, not static decoration.

### Shadow Vocabulary
- **Card Rest** (`0 4px 6px rgba(0,0,0,0.1)`): Default exhibit card elevation. Subtle, barely perceptible.
- **Card Hover** (`0 6px 12px rgba(0,0,0,0.15)`): Active engagement state. Lifts the card toward the user.
- **Dropdown** (`0 4px 12px rgba(0,0,0,0.15)`): Floating menus, disconnected from parent.
- **Modal** (`0 30px 80px rgba(0,0,0,0.3)`): Maximum elevation. Blocks background interaction.
- **Button Hover** (`0 4px 8px rgba(0,0,0,0.15)`): Primary button engagement.

### Named Rules

**The Flat-By-Default Rule.** Surfaces are flat at rest. Shadows appear only as a response to state (hover, focus, elevation, modal). No persistent shadows on static elements.

**The Lift-is-Meaningful Rule.** Every translateY(-4px) hover lift is paired with a shadow increase. The lift without the shadow feels weightless; the shadow without the lift feels detached.

## Shapes

The form language is **gently rounded** — never sharp, never pill-shaped. Radius scale: 8px (sm) for buttons/inputs, 12px (md) for cards/dropdowns, 20px (lg) for modals/exhibits.

**Border behavior:** 1px solid Hairline Gray for resting state. Primary blue on focus/active. Accent color on exhibit hover.

**Exhibit cards** use 20px (1.25rem) radius — the largest in the system — giving them a distinct "specimen container" presence.

**Tags/chips** use 999px (full) radius for category pills.

## Components

### Buttons
- **Shape:** 12px radius (md), generous horizontal padding (24px), 12px vertical.
- **Primary:** Deep Trust Blue background, white text, 600 weight. Hover lifts 2px, darkens to #0b5ed7, adds shadow. Active returns to plane.
- **Ghost:** Transparent background, Deep Trust Blue border (2px) and text. Hover adds 10% blue tint, lifts 2px. Active returns to plane.
- **Transitions:** 0.3s ease for all properties. No abrupt snaps.

### Cards / Containers (Exhibit Cards)
- **Corner Style:** 20px radius (lg) — distinctive "specimen container" feel.
- **Background:** Paper White by default. Three colored variants for categorization (Deep Trust Blue, Field Orange, Lab Green) with white text.
- **Shadow Strategy:** Card Rest at rest → Card Hover on interaction.
- **Border:** 1px Hairline Gray at rest → Deep Trust Blue on hover.
- **Internal Padding:** 20px (5× base). Consistent across all variants.
- **Min-height:** 250px to maintain grid alignment.

### Inputs / Fields
- **Style:** 1px Hairline Gray stroke, Paper White background, 12px radius (md), 11px/12px padding.
- **Focus:** 2px Deep Trust Blue outline, border shifts to blue. No glow, no box-shadow.
- **Disabled:** Warm Paper background, Graphite Mute text, no interaction.
- **Label:** Graphite Mute, 13px, above field with 6px gap.

### Dropdowns
- **Style:** Paper White background, Deep Trust Blue border, 12px radius, dropdown shadow.
- **Items:** 8px/10px padding, 8px radius, hover adds 10% blue tint.
- **Position:** 48px below trigger, left-aligned, 210px width.

### Modals
- **Overlay:** 50% black with 8px backdrop blur.
- **Box:** 380px max-width, Paper White, 20px radius, Accent border, Modal shadow, 28px padding.
- **Typography:** Headline for title, Body for content, Primary button for action.

### Navigation (Header)
- **Fixed** at top, full-width, Paper White background, Hairline Gray bottom border.
- **Brand:** Syne 700/15px uppercase kicker + Graphite Mute sub-text.
- **Nav Links:** 500 weight, 12px radius, Graphite Mute at rest → white on colored background on hover/active.
- **Meta:** Graphite Mute 13px, right-aligned.

### Journal (Sidebar)
- **Sticky** at 100px from top (below fixed header).
- **Style:** Warm Paper background, Hairline Gray border, 12px radius, subtle shadow.
- **Progress Meter:** 8px height, 999px radius, Hairline Gray track, gradient fill (orange→blue).
- **Checklist:** 18px custom checkboxes with Deep Trust Blue border, filled on check with 4px blue glow.

### Named Rules

**The Exhibit Trinity Rule.** Exhibit cards cycle through exactly three background colors (blue/orange/green) in grid order. This is structural, not decorative — it enables instant visual parsing of the grid.

**The Button Voice Rule.** Primary buttons speak in sentence case ("Проверить", "Оформить заказ"). Ghost buttons match. No all-caps on buttons — labels own uppercase.

**The Focus Clarity Rule.** Every interactive element has a visible focus state (2px outline). No element relies solely on color change for focus indication.

## Do's and Don'ts

### Do:
- **Do** use the three exhibit colors (primary/accent/success) only for exhibit card backgrounds and their semantic meanings (action/warning/success).
- **Do** keep the hero Display headline to one per page — it's the page title, not a section header.
- **Do** maintain 24px grid gap and 40px section rhythm consistently.
- **Do** use Syne for all headlines/titles (Display, Headline, Title roles) and Outfit for body/label/mono.
- **Do** pair every hover lift with a shadow increase (Card Rest → Card Hover, Button → Button Hover).
- **Do** use 2px solid outline for all focus states — never rely on color alone.
- **Do** keep exhibit cards at 250px minimum height for grid alignment.
- **Do** use the mono stack for technical data (indices, timestamps, code values).

### Don't:
- **Don't** introduce a fourth accent color — the three-color system is complete.
- **Don't** use accent colors for large background areas (hero, sections, full-width bars).
- **Don't** apply shadows to static, non-interactive elements.
- **Don't** mix font families within the same role — Syne owns headlines, Outfit owns body.
- **Don't** use border-radius smaller than 8px or larger than 20px (except 999px for pills).
- **Don't** make buttons uppercase — labels handle categorization, buttons handle actions.
- **Don't** reduce the fixed header — it provides persistent context for the offline experience.
- **Don't** add decorative gradients, patterns, or textures — the grain overlay is the only atmospheric layer.