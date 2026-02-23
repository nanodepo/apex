# nanodepo/apex

## Overview
Blade icon components for NanoDepo UI. Icons are exposed as `x-icon::*` components.

## Usage
```html
<x-icon::cube />
<x-icon::cube type="solid" />
<x-icon::cog class="w-12 h-12 animate-spin text-blue-400" />
```

## Parameters
- `type`: icon style/size preset. Allowed values: `outline` (default), `solid`, `mini`, `micro`.
- Any HTML attributes are supported (class, aria-*).

## Important
- If you pass a custom `class`, you must set size classes explicitly (for example `w-5 h-5`), because the default size classes are replaced.

## Icon List
See `docs/icons.md` for a full list of available icons.
