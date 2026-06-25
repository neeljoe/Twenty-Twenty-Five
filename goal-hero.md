# Goal Site Hero Section

Source: `https://disneyexperiences.com`

The hero section uses the **Aloha Hero Pro** plugin (`wp-block-aloha-hero-pro aloha-block-hero`). It is composed of two stacked containers within a single wrapper.

---

## Structure

```
.wp-block-aloha-hero-pro.aloha-block-hero.swiper-multiple
├── .hero-pro-content                          ← Video background + text overlay
│   └── .container.d-flex
│       └── .col-12.col-lg-6.mb-l.text-pos-bottom-left
│           ├── h1.h01.mb                      ← "Bringing Disney Stories to Life"
│           ├── p.p01                          ← Description paragraph
│           └── .mt-l
│               └── a.btn.btn-primary          ← "How We Do It" CTA
│
└── .hero-pro-quick-links.pb-l                ← Latest News carousel
    └── .container
        └── .row.justify-content-start
            ├── .col-12.col-lg-2              ← "Latest News" label
            └── .col-12.col-lg-10             ← Swiper carousel
                └── .aloha-swiper.swiper.swiper-multiple.swiper-right-overflow
                    ├── .swiper-wrapper        ← 12 slides
                    │   └── .wp-block-aloha-hero-pro-item.col-md-4.swiper-slide (×12)
                    │       └── a → .content-container.text-start.px-3.has-*-gradient-bg
                    │           ├── p.t06     ← Label (e.g. "Read More")
                    │           └── h4.t05    ← Headline
                    ├── .swiper-button-prev
                    └── .swiper-button-next
```

---

## Part 1 — Video Background Hero

### Container
- **Class**: `hero-pro-content rounded-bottom-0 m-0 aloha-block-bg z-bg has-media-bg text-light img-pos-center-center has-minor-overlay`
- **Role**: Full-width hero area with video behind text content

### Video Background
- **Element**: `<video class="aloha-bg-media">`
- **Attributes**: `playsinline`, `autoplay`, `muted`, `loop`
- **Style**: `object-position: center center`
- **Source**: `/app/uploads/2025/08/Connect-Sizzle-4.mp4`

### Overlay
- **Class**: `has-minor-overlay` — applies a dark/translucent overlay over the video for text legibility

### Text Content
- **Positioning**: Bottom-left (`text-pos-bottom-left`)
- **Layout**: `container d-flex` → `col-12 col-lg-6` — half-width on large screens, full on mobile
- **Heading**: `h1.h01.mb` — "Bringing Disney Stories to Life"
- **Paragraph**: `p.p01` — "Disney Experiences brings the magic of Disney stories and franchises to life through theme parks, resorts, cruise ships, unique vacation experiences, products and more around the world."
- **CTA**: `a.btn.btn-primary` → `/about/` — "How We Do It"

---

## Part 2 — Quick Links / Latest News Swiper

### Container
- **Class**: `hero-pro-quick-links pb-l`
- **Role**: Horizontal carousel of news cards below the hero

### Layout
- Bootstrap row: `row justify-content-start`
- Label column: `col-12 col-lg-2`
  - **Text**: `p.p03.quick-links-desc` — "Latest News"
- Swiper column: `col-12 col-lg-10`

### Swiper Configuration
- **Classes**: `aloha-swiper swiper swiper-multiple swiper-right-overflow swiper-initialized swiper-horizontal swiper-pointer-events`
- **Behavior**: Horizontal swipe with pointer events
- **Right overflow**: Cards extend past the container edge (partial adjacent slide visible)

### Slide Cards (`×12`)
Each is `wp-block-aloha-hero-pro-item col-md-4 mb-l swiper-slide` at 270px wide with 20px right margin.

Each card is a link wrapping a content container:

| Property | Values |
|---|---|
| Gradient backgrounds | `has-green-gradient-bg`, `has-blue-gradient-bg`, `has-red-gradient-bg`, `has-purple-gradient-bg` |
| Label text (`p.t06`) | "Read More", "Read more", "Shanghai Disney Resort", "Read on TWDC.com", "Read on disney parks blog", "Read on Disney Parks Blog" |
| Headline (`h4.t05`) | Varies by article (see below) |
| Target domains | `disneyexperiences.com`, `thewaltdisneycompany.com`, `disneyparksblog.com` |

### Slide Content (all 12)

| # | Label | Headline | Link |
|---|---|---|---|
| 1 | Read More | Disney Experiences' Economic Impact Reaches All 50 States | `/america-250-economic-impact/` |
| 2 | Read more | Two Brothers and Infinite Magic at Walt Disney World | `/walt-disney-world-brothers-mechanics-careers/` |
| 3 | Shanghai Disney Resort | They Packed Their Bags, Crossed the World, and Made Disney History! | `/shanghai-disney-resort-opening-task-force-team/` |
| 4 | Read on TWDC.com | Inside Shanghai Disney Resort's First Decade of Storytelling and Expansion | TWDC (external) |
| 5 | read on Twdc.com | Shanghai Disney Resort Celebrates 10th Birthday with Guests and Cast | TWDC (external) |
| 6 | Read on disney parks blog | Shanghai Disney Resort's First Decade and Its Vision for the Future | disneyparksblog.com (external) |
| 7 | Read on Disney Parks Blog | Saddle Up for 'Toy Story 5' with These Products | disneyparksblog.com (external) |
| 8 | Read More | Disney Cruise Line Recognized by Vancouver Port for Commitment to Sustainability | `/cruise-line-vancouver-port-sustainability/` |
| 9 | Read on Disney Parks Blog | The Evolution of ESPN Wide World of Sports | disneyparksblog.com (external) |
| 10 | Read on TWDC.com | Bluey's Next Chapter: From Streaming Sensation to Real-World Magic | TWDC (external) |
| 11 | Read on TWDC.com | Disney Consumer Products Ushers in a New Era with 'Icons Unleashed' | TWDC (external) |
| 12 | Read More | How Millennium Falcon: Smugglers Run Evolved With 'The Mandalorian and Grogu' | `/smugglers-run-new-mandalorian-mission/` |

### Navigation
- `.swiper-button-prev` — previous slide (disabled at start)
- `.swiper-button-next` — next slide

---

## Key CSS Classes Inventory

| Class | Component | Purpose |
|---|---|---|
| `aloha-block-hero` | Wrapper | Main hero block container |
| `swiper-multiple` | Wrapper | Enables Swiper.js carousel mode |
| `hero-pro-content` | Container | Video + text overlay area |
| `has-media-bg` | Container | Signals media background (video/image) |
| `has-minor-overlay` | Container | Dark overlay over background media |
| `img-pos-center-center` | Container | Background media focal point |
| `text-pos-bottom-left` | Content | Text alignment inside hero |
| `text-light` | Content | Light text color |
| `hero-pro-quick-links` | Section | Quick links / carousel section |
| `quick-links-desc` | Text | "Latest News" label style |
| `aloha-swiper` | Swiper | Swiper.js instance wrapper |
| `swiper-right-overflow` | Swiper | Allows right-side card overflow |
| `has-green-gradient-bg` | Card | Green gradient background |
| `has-blue-gradient-bg` | Card | Blue gradient background |
| `has-red-gradient-bg` | Card | Red gradient background |
| `has-purple-gradient-bg` | Card | Purple gradient background |
| `h01` | Typography | Hero heading |
| `p01` | Typography | Hero description |
| `p03` | Typography | Quick links label |
| `t05` | Typography | Card headline |
| `t06` | Typography | Card label |

---

## Notes for Replication

1. **Video background** — WordPress `core/cover` block supports video natively (`<video>` element with `autoplay`, `muted`, `loop` + `dimRatio` for overlay)
2. **No Bootstrap** in this theme — grid layout will need CSS Grid / Flexbox or block editor layout system equivalents
3. **Swiper.js** is not a current dependency — options:
   - Add Swiper.js via npm
   - Build a minimal carousel with the Interactivity API + CSS scroll-snap
   - Show static grid of cards
4. **Gradient backgrounds** — custom CSS needed; not in current `theme.json` palette
5. **Typography** — `h01`/`p01`/`p03`/`t05`/`t06` are Aloha-specific classes with no current equivalents; map to theme.json font sizes
