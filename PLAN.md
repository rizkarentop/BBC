# Plan: Remove Translate Icon from Language Switcher

## Information Gathered

The language switcher is located in:
- **File**: `resources/views/layouts/partials/lang-switch.blade.php`

### Current Structure:
```html
<div class="...rounded-full border... p-1...">
    <i class="bi bi-translate ml-2 mr-0.5 text-white [.nav-scrolled_&]:text-slate-500"></i>  ← ICON TO REMOVE
    <a href="...">EN</a>
    <a href="...">IND</a>
</div>
```

The Bootstrap Icons `bi bi-translate` icon is rendered inside a flex container before the two language links. It has `ml-2 mr-0.5` margins that add extra width.

## Plan

### File: `resources/views/layouts/partials/lang-switch.blade.php`
1. **Remove** the `<i class="bi bi-translate ...">` line (the translate icon)
2. **No other changes** needed — the existing `p-1`, `gap-1`, and flex layout will naturally adjust the width to be more compact after removing the icon and its margins

### What will be removed:
- The entire `<i>` element with class `bi bi-translate ml-2 mr-0.5 text-white [.nav-scrolled_&]:text-slate-500`

### What stays identical:
- All language switching logic (`route('locale.switch', ...)`)
- All active state styles (`bg-white text-[#252AB8] shadow`, etc.)
- All hover effects, transitions, border styles, backdrop blur
- The `p-1` padding and `gap-1` spacing between buttons
- All responsive behavior and scrolled-navbar states

### Dependent Files to Edit:
- None. This is a self-contained partial.

### Follow-up Steps:
- Run `npm run build` or `npm run dev` if using Vite to recompile assets (if needed)

