# SITES Dropdown Mega Menu — Build Goal

## Reference
Based on Nick Diego's article: *[An introduction to block-based mega menus](https://developer.wordpress.org/news/2024/02/an-introduction-to-block-based-mega-menus/)* (Feb 2024, still fully current in 2026).

## Goal
Build a `disney/sites-dropdown` mega menu block following the article's architecture, integrated into the existing `advanced-multi-block` plugin, replacing the `ref:52` SITES navigation in the Twenty Twenty-Five header.

## Article's Architecture (step by step)

### 1. Register "Menu" template part area
PHP filter `default_wp_template_part_areas` adds a new `menu` area. This lets users create template parts in the Site Editor that are filterable by area — the block's `ComboboxControl` will query them.

### 2. Block as a navigation child
`block.json` includes `"parent": ["core/navigation"]`. The block renders as an `<li>` inside `core/navigation`'s `<ul>`, making it a proper navigation item.

### 3. ComboboxControl for template part selection
`edit.js` uses `useEntityRecords('postType', 'wp_template_part', { per_page: -1 })` to fetch all template parts, filters by `area === 'menu'`, and feeds them to a `ComboboxControl` so editors pick which template part to display as the dropdown content.

### 4. Interactivity API — context-based toggle
- `view.js`: `store('disney-sites', { actions: { toggleMenu, closeMenu } })` using `getContext()` for per-instance state.
- `render.php`: `<button>` with `data-wp-on--click="actions.toggleMenu"` and `data-wp-bind--aria-expanded="context.isMenuOpen"`.
- Menu `<div>` with `data-wp-bind--hidden="!context.isMenuOpen"` and `hidden` attribute.

### 5. Fallback default content
When `menuSlug` is empty, the block renders hardcoded two-column layout:

**Column 1 — Explore More** | **Column 2 — Consumers**
- The Walt Disney Company | - Disneyland Resort
- Disney Parks Blog | - Walt Disney World Resort
- Walt Disney Imagineering | - Disney Cruise Line
- About Disneyland | - Disney Store
- About Disney in Florida

### 6. allowedBlocks filter
`addFilter('blocks.registerBlockType', ...)` modifies `core/navigation`'s `allowedBlocks` so `disney/sites-dropdown` appears in the nav block's inserter.

## Block files needed

| File | Purpose |
|---|---|
| `src/blocks/sites-dropdown/block.json` | Metadata, `parent`, `attributes`, `supports`, `viewScriptModule` |
| `src/blocks/sites-dropdown/index.js` | `registerBlockType` |
| `src/blocks/sites-dropdown/edit.js` | `RichText` label, `InspectorControls` with `TextControl` + `ComboboxControl` |
| `src/blocks/sites-dropdown/render.php` | Server-rendered `<li>` with Interactivity API directives |
| `src/blocks/sites-dropdown/view.js` | `store()` with `toggleMenu`/`closeMenu` using `getContext()` |
| `src/blocks/sites-dropdown/style.scss` | Toggle button, hidden/visible menu, two-column grid, close button, responsive |
| `src/blocks/sites-dropdown/editor.scss` | Dashed border preview in editor |

## Plugin changes

| File | Change |
|---|---|
| `advanced-multi-block.php` | Add `default_wp_template_part_areas` filter for `menu` area |
| `src/editor-script.js` | Add `addFilter` for `allowedBlocks` on `core/navigation` |

## Header integration
Replace `ref:52` nav block with a new `core/navigation` wrapping our dropdown block, preserving `blockVisibility` (hidden on tablet/mobile) and style settings.

## Build command
```bash
cd /path/to/advanced-multi-block && npm run build
```
