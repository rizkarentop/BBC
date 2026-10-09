# TODO_LANG - progress tracking

## Completed
- [x] Locale switch route (`/locale/{locale}`) sets `session('locale')` to `en`/`id`
- [x] `App::setLocale()` from `session('locale')` in `AppServiceProvider`
- [x] Update `resources/views/layouts/navbar.blade.php` (logo subtitle, nav labels, Contact button, language buttons) + added the EN/IND switch UI at the end of the navbar (desktop + mobile)
- [x] `<html lang="...">` in `resources/views/layouts/app.blade.php` now follows `app()->getLocale()`

## Remaining (must migrate all user-visible text)
- [ ] Update `resources/views/layouts/app.blade.php` meta/title/description/OG language strings to use `__('...')`
- [ ] Contact alert success/error moved to `resources/lang/*/contact.php` and wired in `ContactController`
- [ ] Update `resources/views/layouts/footer.blade.php` (all headings/paragraphs/addresses/copyright/links)
- [ ] Update all page files: `pages/*` (`@section('title')`, `@section('description')`) + all visible text to `__('...')`
- [ ] Update all section files: `sections/*` and `sections/about/*` + all visible text to `__('...')`
- [ ] Remove any bilingual/hardcoded arrays in pages (services/projects/gallery/certificates): move their text to lang keys and render via `__('...')`
- [ ] Contact page: replace hardcoded banner/form/map/card labels with `__('contact.*')` keys; keep `@if` for session display but ensure displayed messages themselves come from translation


## Final cleanup
- [ ] Ensure no remaining user-visible hardcoded text in Blade
- [ ] Ensure Blade only displays translations using `__('file.key')` for all text nodes

