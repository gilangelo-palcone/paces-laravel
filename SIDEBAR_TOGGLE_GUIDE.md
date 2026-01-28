# Sidebar Toggle Functionality - Enabled ✅

The sidebar minimize/maximize toggle is **FULLY ENABLED** and ready to use in your Laravel Paces project.

## How to Use

### 1. Main Menu Toggle Button
Located in the top navigation bar (topbar), this button minimizes/maximizes the sidebar:

**Button:** Look for the menu button (☰ icon) in the top left of the navigation bar
- **Click once:** Minimize sidebar to small size (shows only icons)
- **Click again:** Maximize sidebar to full width (shows icons + labels)

**Technical Details:**
- Button ID: `#button-toggle-menu`
- Icon: Iconify `tabler--menu-4`
- Toggles between `default` and `sm` (small) sizes

### 2. Hover Mode Toggle Button
Located within the sidebar menu itself, this button controls pin/unpin behavior:

**Button:** Look for the circle icon (●) inside the sidebar
- **Click once:** Enable hover mode (sidebar auto-collapses, expands on hover)
- **Click again:** Disable hover mode (sidebar stays expanded)

**Technical Details:**
- Button ID: `#button-hover-toggle`
- Icon: Iconify `tabler--circle`
- Toggles between `on-hover` and `on-hover-active` states

## Sidebar Sizes

The sidebar supports multiple sizes:
- **default** - Full width with icons and labels
- **sm** (small) - Narrow width with icons only
- **md** (medium) - Medium width
- **condensed** - Very narrow
- **offcanvas** - Mobile overlay mode (automatic on small screens)
- **on-hover** - Auto-collapse on hover out
- **on-hover-active** - Pinned in hover mode
- **hidden** - Completely hidden

## Configuration

### Current Settings (from .env):
```env
PACES_SIDENAV_SIZE=default
PACES_SIDENAV_COLOR=light
PACES_SIDENAV_USER_INFO=true
```

### To Change Default Size:
Edit `.env` file:
```env
PACES_SIDENAV_SIZE=sm       # Start minimized
PACES_SIDENAV_SIZE=default  # Start maximized
PACES_SIDENAV_SIZE=on-hover # Start in hover mode
```

Then clear config cache:
```bash
php artisan config:clear
```

## JavaScript Implementation

The toggle functionality is implemented in `resources/js/app.js`:

### LayoutCustomizer Class Methods:

1. **_toggleSidebar()** - Main toggle logic
   - Handles size transitions based on current state
   - Shows/hides mobile backdrop
   - Toggles `sidenav-enable` class

2. **changeLeftbarSize(size, save)** - Changes sidebar size
   - Updates `data-sidenav-size` attribute
   - Optionally saves preference to localStorage

3. **Event Listeners:**
   ```javascript
   // Main menu toggle
   document.querySelector("#button-toggle-menu")
     .addEventListener("click", () => this._toggleSidebar())
   
   // Hover mode toggle
   document.querySelectorAll("#button-hover-toggle")
     .forEach(el => el.addEventListener("click", () => {
       const current = this.html.getAttribute("data-sidenav-size")
       this.changeLeftbarSize(
         current === "on-hover-active" ? "on-hover" : "on-hover-active",
         true
       )
     }))
   ```

## Responsive Behavior

- **Desktop (> 1140px):** Toggle between default and small sizes
- **Mobile (<= 1140px):** Automatically switches to offcanvas mode (overlay)
- **Backdrop:** Shown on mobile when sidebar is open

## Keyboard Shortcuts

No default keyboard shortcuts. You can add them by extending the JavaScript:

```javascript
// Example: Press 'M' to toggle sidebar
document.addEventListener('keydown', (e) => {
  if (e.key === 'm' || e.key === 'M') {
    document.querySelector("#button-toggle-menu").click()
  }
})
```

## Testing

1. **Start the server** (if not already running):
   ```bash
   php artisan serve
   ```

2. **Open in browser:** http://127.0.0.1:8000

3. **Test the toggles:**
   - Click the menu button in the topbar
   - Click the circle button in the sidebar
   - Try on different screen sizes

## User Profile Section

The sidebar includes a user profile section that can be toggled:

**Current Setting:** Enabled (`PACES_SIDENAV_USER_INFO=true`)

Shows user avatar, name, and role at the bottom of the sidebar.

## Troubleshooting

### Toggle not working?
1. Check browser console for JavaScript errors
2. Verify assets are built: `npm run build`
3. Clear browser cache (Ctrl+Shift+R or Cmd+Shift+R)

### Button not visible?
1. Check `resources/views/shared/partials/topbar.blade.php` for `#button-toggle-menu`
2. Check `resources/views/shared/partials/sidenav.blade.php` for `#button-hover-toggle`
3. Verify Iconify icons are loading

### Size not persisting?
- The toggle state is saved to browser's localStorage
- Clear localStorage to reset: `localStorage.clear()` in browser console

## Customization

### Change Toggle Icon:
Edit `resources/views/shared/partials/topbar.blade.php`:
```html
<button class="btn rounded-full bg-primary btn-icon text-white" id="button-toggle-menu">
  <i class="iconify tabler--menu-2 text-xl"></i> <!-- Change icon here -->
</button>
```

### Change Toggle Behavior:
Edit `resources/js/app.js` in the `_toggleSidebar()` method to customize the size transitions.

### Add Animation:
Add CSS transitions in your stylesheet:
```css
.sidenav {
  transition: width 0.3s ease-in-out;
}
```

## Summary

✅ **Sidebar toggle is fully functional**  
✅ **Two toggle modes available** (minimize/maximize + hover mode)  
✅ **Responsive design** (auto-switches to offcanvas on mobile)  
✅ **User preferences saved** (localStorage)  
✅ **No configuration needed** (works out of the box)

The sidebar minimize/maximize functionality is already enabled and working. Just click the menu button in the topbar to start using it!
