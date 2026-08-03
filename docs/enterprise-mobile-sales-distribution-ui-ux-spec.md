# Enterprise Mobile Sales & Distribution Management System UI/UX Specification

## 1. Document Purpose

This document defines a production-ready UI/UX design specification for an Enterprise Mobile Sales & Distribution Management System. It covers the design system, navigation model, role-based information architecture, responsive behavior, accessibility requirements, offline-first interaction patterns, and all core screens needed by sales representatives, supervisors, warehouse staff, accountants, sales managers, administrators, and executives.

> Note: No separate SRS attachment was present in the repository at the time of authoring, so this specification translates the provided requirements into a complete enterprise UI/UX blueprint and includes the standard workflows expected in a mobile sales and distribution ERP system.

## 2. Product Experience Principles

- **Fast field execution:** Critical actions such as starting a visit, creating an order, collecting payment, scanning inventory, and syncing data are reachable within two taps from role dashboards.
- **Low cognitive load:** Screens use plain language, grouped forms, progressive disclosure, smart defaults, and contextual actions.
- **Offline first:** Every field workflow shows offline availability, local save status, conflict status, and sync recovery options.
- **Readable in harsh environments:** High-contrast surfaces, large typography, 44px minimum touch targets, sticky actions, and clear hierarchy support use outdoors, in vehicles, warehouses, and offices.
- **Enterprise confidence:** Layouts are professional, consistent, auditable, accessible, and optimized for high-volume transactional use.

## 3. Design System

### 3.1 Color Tokens

| Token | Hex | Usage |
|---|---:|---|
| Primary | `#2563EB` | Primary actions, selected navigation, active filters |
| Primary Hover | `#1D4ED8` | Hover, pressed, active button states |
| Primary Light | `#DBEAFE` | Selected rows, informational backgrounds, active chips |
| Success | `#16A34A` | Completed visits, paid invoices, synced states |
| Warning | `#F59E0B` | Pending approvals, low stock, overdue follow-up |
| Danger | `#DC2626` | Errors, rejected approvals, destructive actions |
| Info | `#0891B2` | Route notices, inventory updates, neutral alerts |
| Background | `#F8FAFC` | App background |
| Surface/Card | `#FFFFFF` | Cards, sheets, dialogs, app bars |
| Border | `#E5E7EB` | Dividers, fields, card outlines |
| Text Primary | `#111827` | Main labels, values, titles |
| Text Secondary | `#6B7280` | Helper text, metadata, captions |
| Disabled | `#D1D5DB` | Disabled controls and unavailable data |

### 3.2 Dark Mode Tokens

| Token | Hex | Usage |
|---|---:|---|
| Background | `#0F172A` | Dark app background |
| Surface/Card | `#111827` | Cards, bars, drawers, dialogs |
| Elevated Surface | `#1F2937` | Menus, bottom sheets |
| Border | `#374151` | Dividers and field outlines |
| Text Primary | `#F9FAFB` | Primary text |
| Text Secondary | `#D1D5DB` | Secondary text |
| Primary | `#60A5FA` | Primary actions on dark surfaces |
| Success | `#22C55E` | Success states |
| Warning | `#FBBF24` | Warning states |
| Danger | `#F87171` | Error states |

### 3.3 Typography

- Font stack: `Inter`, `Roboto`, `Segoe UI`, system sans-serif.
- H1: 32px/40, semibold.
- H2: 28px/36, semibold.
- H3: 24px/32, semibold.
- H4: 20px/28, semibold.
- Body: 16px/24, regular.
- Small: 14px/20, regular or medium.
- Caption: 12px/16, regular.
- Buttons: 16px medium on mobile, 14px medium in dense desktop tables.

### 3.4 Layout, Spacing, and Shape

- Grid: 8pt spacing with supported increments of 4, 8, 12, 16, 24, 32, 40, 48, and 64px.
- Screen gutters: 16px mobile, 24px tablet, 32px desktop.
- Cards: 16px radius, 16px padding mobile, 24px desktop.
- Buttons and inputs: 12px radius.
- Minimum touch target: 44x44px; preferred field action target: 48x48px.
- Sticky bottom action bars on mobile use 16px padding and safe-area inset support.

### 3.5 Core Components

#### Buttons

- **Primary:** Filled primary background, white label, used for the main next action.
- **Secondary:** Filled neutral surface with border, used for secondary actions.
- **Outline:** Transparent with primary border, used for alternative choices.
- **Ghost:** Text/icon only, used for toolbar actions.
- **Danger:** Filled danger background for destructive confirmation only.
- States: default, hover, pressed, focused, loading, disabled. Loading buttons preserve width and show spinner plus verb such as “Saving”.

#### Inputs

- Search, dropdown, autocomplete, date picker, number, currency, phone, password, barcode-enabled text field, and multi-line notes.
- All fields include label, optional helper text, validation message region, required indicator, disabled state, and offline draft indicator when edited locally.
- Currency fields auto-format with configured currency and locale; phone fields support country code formatting.

#### Data Display

- Cards, enterprise data grids, compact mobile lists, timeline, charts, statistics cards, badges, tags, status chips, maps, calendars, and notification items.
- Status chips use icon + label + color; never rely on color alone.

#### Feedback

- Snackbars for transient success and sync messages.
- Inline alerts for local form errors and warnings.
- Dialogs for irreversible actions.
- Bottom sheets for mobile filters, item pickers, payment method selection, quick actions, and approval comments.
- Full-screen recoverable error pages for permission, network, and unavailable module states.

#### Navigation

- Mobile: top app bar + bottom navigation + contextual floating action button.
- Tablet: rail navigation + split panes where useful.
- Desktop: side navigation + top app bar + breadcrumb + command/search bar.

### 3.6 Icons

Use Material Symbols Rounded with 24px default size and 20px in dense rows. Icons must be paired with labels for critical actions.

### 3.7 Accessibility

- WCAG AA contrast minimum for text and controls.
- Visible focus rings on all keyboard-accessible controls.
- Screen reader labels for icon buttons, charts, status chips, and map markers.
- Form errors announced with `aria-describedby` and live regions where applicable.
- Large text support up to 200% without loss of function.
- Charts include data tables or accessible summaries.

## 4. Role-Based Information Architecture

### 4.1 Sales Representative

- Home
- Route & Visits
- Customers
- Orders
- Collections
- Returns
- Inventory Availability
- Promotions
- Tasks
- Sync Center
- Notifications
- Profile

### 4.2 Supervisor / Sales Manager

- Team Dashboard
- Route Monitoring
- Visit Compliance
- Orders Review
- Collections Review
- Approvals
- Performance
- Reports
- Notifications

### 4.3 Warehouse Staff

- Warehouse Dashboard
- Pick Lists
- Dispatch
- Stock Transfer
- Van Loading
- Returns Receiving
- Barcode Scan
- Inventory Counts

### 4.4 Accountant

- Finance Dashboard
- Invoices
- Receipts
- Collections Reconciliation
- Credit Notes
- Customer Statements
- Payment Exceptions
- Reports

### 4.5 Administrator

- Admin Dashboard
- Users & Roles
- Territories
- Products & Pricing
- Customers
- Taxes & Discounts
- Approval Rules
- Device Management
- System Settings
- Audit Logs

### 4.6 Executive

- Executive Dashboard
- Sales Analytics
- Collection Analytics
- Inventory Analytics
- Geo Performance
- Branch / Region Comparison
- Alerts & Risks
- Export Center

## 5. Global Screens and Shell

### 5.1 Splash / App Launch

- **Purpose:** Establish brand, initialize secure session, and check local database readiness.
- **Layout:** Centered logo, app name, small loading text, version number at bottom.
- **Navigation:** Auto-routes to Login, PIN Unlock, Home, or Maintenance.
- **Components:** Logo, progress indicator, offline database status.
- **User Actions:** None except retry if startup fails.
- **Empty State:** Not applicable.
- **Loading State:** “Preparing workspace…” with deterministic steps when startup exceeds two seconds.
- **Error State:** Startup failure card with Retry, Diagnostics, and Contact Support.
- **Success State:** Smooth 150ms transition into next screen.
- **Validation:** Device compatibility, encryption availability, app version.
- **Responsive Behavior:** Same composition; larger logo on tablet/desktop.
- **Dark Mode Behavior:** Dark background, light logo variant.
- **Accessibility Notes:** Progress text announced politely.

### 5.2 Login

- **Purpose:** Authenticate users securely with minimal friction.
- **Layout:** Brand header, username, password, company/tenant selector if needed, remember device option, primary Sign In button.
- **Navigation:** Sign In routes to role home; Forgot Password routes to recovery; SSO routes to provider.
- **Components:** Text inputs, password visibility toggle, SSO button, language selector, environment badge for non-production.
- **User Actions:** Sign in, switch language, reset password, select tenant.
- **Empty State:** Empty fields show placeholders and helper text.
- **Loading State:** Button spinner and disabled form.
- **Error State:** Inline invalid credential message without clearing username.
- **Success State:** Secure session created; route to sync precheck or dashboard.
- **Validation:** Required username/password, email/phone format, tenant required when multiple exist.
- **Responsive Behavior:** Single card mobile; centered card desktop.
- **Dark Mode Behavior:** Elevated dark card and accessible primary button.
- **Accessibility Notes:** Supports password manager, keyboard submission, and screen reader labels.

### 5.3 PIN / Biometric Unlock

- **Purpose:** Fast re-authentication for field users.
- **Layout:** User avatar, name, PIN keypad, biometric action, switch account link.
- **Navigation:** Unlock routes to last workspace; switch account routes to Login.
- **Components:** Numeric keypad, biometric button, lockout timer.
- **User Actions:** Enter PIN, use biometrics, reset session.
- **Empty State:** Blank PIN dots.
- **Loading State:** Brief unlock spinner.
- **Error State:** Wrong PIN feedback and attempt count.
- **Success State:** Opens last active module.
- **Validation:** PIN length and lockout policy.
- **Responsive Behavior:** Keypad remains thumb reachable on mobile.
- **Dark Mode Behavior:** High-contrast keypad buttons.
- **Accessibility Notes:** Biometric action has text alternative; supports hardware keyboard numbers.

### 5.4 First Sync / Workspace Setup

- **Purpose:** Download assigned master data and prepare offline mode.
- **Layout:** Stepper list showing users, customers, products, prices, routes, inventory, and settings.
- **Navigation:** Continue to dashboard when complete; retry failed packages.
- **Components:** Progress bar, sync cards, retry button, network indicator.
- **User Actions:** Start sync, pause, retry, view details.
- **Empty State:** “No workspace data assigned” with Contact Supervisor.
- **Loading State:** Per-package progress and total progress.
- **Error State:** Failed package card with exact reason and retry.
- **Success State:** “Workspace ready” with Continue.
- **Validation:** Storage space, network quality, user assignment.
- **Responsive Behavior:** Single column mobile, two-column tablet.
- **Dark Mode Behavior:** Dark cards with status chips.
- **Accessibility Notes:** Progress values exposed to assistive tech.

### 5.5 Main App Shell

- **Purpose:** Provide consistent navigation, search, sync awareness, and role-based actions.
- **Layout:** Top app bar with page title, search, notifications, sync badge, profile; content area; bottom navigation on mobile.
- **Navigation:** Bottom tabs for role priorities; side nav on desktop.
- **Components:** Top app bar, bottom navigation, side navigation, global search, notification drawer, FAB.
- **User Actions:** Navigate, search, open notifications, sync, quick create.
- **Empty State:** Module empty states shown in content area.
- **Loading State:** Skeleton cards and rows.
- **Error State:** Inline module error with retry.
- **Success State:** Sync and save snackbars.
- **Validation:** Permission checks hide unavailable modules and show request-access pages when deep-linked.
- **Responsive Behavior:** Bottom nav mobile, nav rail tablet, side nav desktop.
- **Dark Mode Behavior:** Persistent navigation uses dark surfaces.
- **Accessibility Notes:** Landmarks for header, navigation, main, and complementary panels.

### 5.6 Global Search

- **Purpose:** Find customers, products, orders, invoices, visits, returns, and reports quickly.
- **Layout:** Full-screen search on mobile; command palette dialog on desktop.
- **Navigation:** Selecting result opens detail screen; filters narrow entity type.
- **Components:** Search input, entity chips, recent searches, grouped results.
- **User Actions:** Search, filter, scan barcode, clear history.
- **Empty State:** Recent items and suggested shortcuts.
- **Loading State:** Result skeletons.
- **Error State:** “Search unavailable offline for server-only data” with local results still shown.
- **Success State:** Result count and highlighted matches.
- **Validation:** Minimum two characters for server search; instant local search.
- **Responsive Behavior:** Full screen mobile, overlay desktop.
- **Dark Mode Behavior:** Dark overlay and highlighted result backgrounds.
- **Accessibility Notes:** Results announced as listbox options.

### 5.7 Notification Center

- **Purpose:** Centralize approvals, alerts, route changes, payment exceptions, and sync issues.
- **Layout:** Drawer or full-screen list with tabs: All, Action Required, Alerts, Sync.
- **Navigation:** Tapping notification opens relevant record.
- **Components:** Notification cards, severity icons, unread indicator, bulk mark read.
- **User Actions:** Open, dismiss, mark read, filter.
- **Empty State:** “You’re all caught up.”
- **Loading State:** Skeleton notification rows.
- **Error State:** Retry loading notifications.
- **Success State:** Mark-read snackbar.
- **Validation:** Permission-scoped notifications only.
- **Responsive Behavior:** Full screen mobile, right drawer tablet/desktop.
- **Dark Mode Behavior:** Severity colors adjusted for contrast.
- **Accessibility Notes:** Unread state announced; actions have labels.

### 5.8 Sync Center

- **Purpose:** Show offline queue, sync health, conflicts, and last sync status.
- **Layout:** Status summary card, queue list, conflicts tab, sync history tab.
- **Navigation:** Conflict items open resolution screen.
- **Components:** Offline indicator, sync status, queue cards, retry all, conflict badges.
- **User Actions:** Sync now, retry failed, resolve conflict, export diagnostics.
- **Empty State:** “No pending changes.”
- **Loading State:** Progress by entity type.
- **Error State:** Network, authentication, server validation, and conflict messages.
- **Success State:** “All changes synced.”
- **Validation:** Prevent logout if unsynced critical changes unless user confirms.
- **Responsive Behavior:** Tabs mobile, split view tablet/desktop.
- **Dark Mode Behavior:** Dark queue cards and high-contrast status.
- **Accessibility Notes:** Sync state exposed as live region.

### 5.9 Settings / Profile

- **Purpose:** Manage user profile, preferences, language, theme, device, and security.
- **Layout:** Profile summary and grouped setting sections.
- **Navigation:** Opens detail sheets for language, theme, security, device diagnostics.
- **Components:** Avatar, switches, list items, version card, logout button.
- **User Actions:** Change language/theme, update PIN, view device ID, logout.
- **Empty State:** Missing profile image uses initials.
- **Loading State:** Skeleton profile card.
- **Error State:** Failed preference save with retry.
- **Success State:** Saved preference snackbar.
- **Validation:** PIN rules and logout confirmation with unsynced changes.
- **Responsive Behavior:** Single column mobile, two columns desktop.
- **Dark Mode Behavior:** Theme preview follows selected mode.
- **Accessibility Notes:** Switches expose checked state.

## 6. Sales Representative Screens

### 6.1 Sales Rep Home Dashboard

- **Purpose:** Present today’s work, progress, urgent tasks, and quick actions.
- **Layout:** Greeting, route status card, KPI strip, next customer card, quick actions, alerts, recent activity.
- **Navigation:** Bottom tabs: Home, Route, Customers, Orders, More. FAB opens quick create order/collection/visit note.
- **Components:** KPI cards, progress ring, map preview, task cards, sync chip, offline badge.
- **User Actions:** Start route, navigate to next visit, create order, collect payment, scan product, sync.
- **Empty State:** No route assigned card with Call Supervisor.
- **Loading State:** Skeleton KPI and route cards.
- **Error State:** Route data unavailable; cached data shown if available.
- **Success State:** Route started and visit completed snackbars.
- **Validation:** GPS permission, route assignment, working day status.
- **Responsive Behavior:** Cards stack mobile; dashboard grid on tablet.
- **Dark Mode Behavior:** KPI cards use dark surfaces and accessible chart colors.
- **Accessibility Notes:** KPI values include descriptive labels, not only icons.

### 6.2 Route Plan

- **Purpose:** Show assigned visits in optimal order with map and schedule context.
- **Layout:** Date selector, route summary, visit list with distance/time, map toggle, sticky Start/Continue Route action.
- **Navigation:** Visit card opens Visit Detail; map marker opens customer preview.
- **Components:** Calendar strip, map, route cards, status chips, GPS indicator.
- **User Actions:** Start route, reorder if permitted, navigate, call customer, mark skipped with reason.
- **Empty State:** “No visits scheduled for this date.”
- **Loading State:** Route skeleton and map placeholder.
- **Error State:** Map unavailable; list remains usable.
- **Success State:** Route optimization applied or route started.
- **Validation:** GPS enabled for start/arrival; skip requires reason.
- **Responsive Behavior:** Map collapses behind toggle on mobile; split map/list on tablet.
- **Dark Mode Behavior:** Dark map style where supported.
- **Accessibility Notes:** Map has list equivalent for every marker.

### 6.3 Visit Detail / Check-In

- **Purpose:** Manage a customer visit from arrival through checkout.
- **Layout:** Customer header, compliance status, visit checklist, recommended actions, sticky Check In or Check Out.
- **Navigation:** Actions open order, collection, return, survey, or notes screens.
- **Components:** Customer card, GPS distance chip, checklist, timeline, quick actions.
- **User Actions:** Check in, create order, collect payment, take photo, add note, check out.
- **Empty State:** No previous activity shows guidance.
- **Loading State:** Customer and checklist skeletons.
- **Error State:** GPS mismatch or duplicate active visit warning.
- **Success State:** Check-in/out confirmed with timestamp.
- **Validation:** Distance threshold, active visit uniqueness, required checklist items before checkout.
- **Responsive Behavior:** One-column mobile; details + activity split tablet.
- **Dark Mode Behavior:** Status colors tuned for contrast.
- **Accessibility Notes:** Timeline order is semantic and readable by screen readers.

### 6.4 Customer List

- **Purpose:** Find and manage assigned customers quickly.
- **Layout:** Search bar, filter chips, customer cards with balance, last visit, status, and quick actions.
- **Navigation:** Customer card opens Customer Profile.
- **Components:** Search, filters, customer cards, alphabet index on large lists, FAB for new customer request.
- **User Actions:** Search, filter, call, navigate, open profile, request new customer.
- **Empty State:** “No customers match your filters.”
- **Loading State:** Card skeletons.
- **Error State:** Cached customer list shown with stale badge.
- **Success State:** Customer request submitted.
- **Validation:** Assigned territory filtering and permission to create.
- **Responsive Behavior:** List mobile; card grid tablet; data grid desktop.
- **Dark Mode Behavior:** Cards and chips adapt.
- **Accessibility Notes:** Quick action buttons have customer-specific labels.

### 6.5 Customer Profile

- **Purpose:** Provide a 360-degree view of a customer and launch transactions.
- **Layout:** Header with name, code, status, credit limit; tabs for Overview, Activity, Orders, Invoices, Returns, Documents.
- **Navigation:** Sticky actions include Order, Payment, Return, Visit.
- **Components:** Balance card, credit usage bar, contact actions, map, timeline, tabs.
- **User Actions:** Call, navigate, create order, collect payment, view statements, edit permitted fields.
- **Empty State:** Empty tab-specific messages.
- **Loading State:** Header and tab skeletons.
- **Error State:** Permission or stale-data warnings.
- **Success State:** Profile updates saved.
- **Validation:** Credit status, blocked customer restrictions.
- **Responsive Behavior:** Header summary sticky on mobile; side summary on tablet/desktop.
- **Dark Mode Behavior:** Credit bar colors remain distinguishable.
- **Accessibility Notes:** Credit usage has text percentage and amount.

### 6.6 New Customer Request

- **Purpose:** Capture prospect/customer onboarding requests in the field.
- **Layout:** Stepper sections: Business Info, Contact, Location, Tax/Docs, Review.
- **Navigation:** Save Draft, Next, Submit.
- **Components:** Text fields, phone, GPS capture, photo/document upload, map pin, validation summary.
- **User Actions:** Capture GPS, scan document, upload photo, save draft, submit.
- **Empty State:** Blank form with smart defaults from territory.
- **Loading State:** Attachment upload progress.
- **Error State:** Inline validation and upload retry.
- **Success State:** Request submitted with approval tracking number.
- **Validation:** Required name, phone, location, tax fields as configured, duplicate warning.
- **Responsive Behavior:** Stepper mobile; section grid desktop.
- **Dark Mode Behavior:** Document previews in dark frames.
- **Accessibility Notes:** Stepper announces current step and errors.

### 6.7 Product Catalog

- **Purpose:** Browse products, pricing, promotions, and stock availability.
- **Layout:** Search, category chips, product cards with image, SKU, price, stock, promo badge, add quantity.
- **Navigation:** Product opens detail; barcode opens scan.
- **Components:** Search, filters, category tabs, product cards, barcode scanner, stock chips.
- **User Actions:** Search, scan, filter, add to cart, view substitutes.
- **Empty State:** “No products found.”
- **Loading State:** Product skeleton grid.
- **Error State:** Price unavailable warning; cached prices labeled.
- **Success State:** Item added to cart.
- **Validation:** Price list, UOM, minimum quantity, stock availability.
- **Responsive Behavior:** One-column mobile, multi-column tablet/desktop.
- **Dark Mode Behavior:** Images remain on neutral background.
- **Accessibility Notes:** Product image alt text uses product name and SKU.

### 6.8 Product Detail

- **Purpose:** Show complete product information and transaction options.
- **Layout:** Product image, SKU, price, stock by warehouse/van, promotions, substitutes, quantity selector.
- **Navigation:** Add to Order, Add to Return where allowed.
- **Components:** Image carousel, stock table, price tiers, promotion card, quantity stepper.
- **User Actions:** Change UOM, enter quantity, add to cart, scan related item.
- **Empty State:** No promotions/substitutes messages.
- **Loading State:** Detail skeleton.
- **Error State:** Price conflict or unavailable stock.
- **Success State:** Added to cart snackbar with Undo.
- **Validation:** UOM conversion, available quantity, customer-specific price.
- **Responsive Behavior:** Stacked mobile; two-column desktop.
- **Dark Mode Behavior:** Stock table borders adjusted.
- **Accessibility Notes:** Quantity stepper supports keyboard and announces value.

### 6.9 Order Cart

- **Purpose:** Build and validate customer orders quickly.
- **Layout:** Customer summary, item list, totals, discounts, taxes, promotions, sticky Submit Order button.
- **Navigation:** Add Items opens catalog; item opens edit sheet; Submit opens review.
- **Components:** Cart rows, quantity steppers, discount chips, totals panel, credit warning.
- **User Actions:** Add/remove items, edit quantity, apply promotion, save draft, submit.
- **Empty State:** “Cart is empty” with Add Products button.
- **Loading State:** Repricing indicator.
- **Error State:** Credit hold, invalid price, out-of-stock, minimum order messages.
- **Success State:** Draft saved or order submitted.
- **Validation:** Required customer, product quantity, price list, credit limit, promotions, tax calculation.
- **Responsive Behavior:** Sticky totals bottom mobile; side totals panel tablet/desktop.
- **Dark Mode Behavior:** Totals panel uses elevated surface.
- **Accessibility Notes:** Totals updates are announced politely.

### 6.10 Order Review / Submit

- **Purpose:** Confirm final order before submission.
- **Layout:** Summary cards for customer, delivery, items, totals, payment terms, notes.
- **Navigation:** Submit, Edit, Save Draft.
- **Components:** Read-only cards, warning alerts, signature capture if configured.
- **User Actions:** Confirm, edit sections, capture signature, submit.
- **Empty State:** Missing sections show required action cards.
- **Loading State:** Submit spinner and offline save fallback.
- **Error State:** Validation summary grouped by section.
- **Success State:** Order number and next action options.
- **Validation:** All transactional rules rerun before submit.
- **Responsive Behavior:** Single-column mobile; review grid desktop.
- **Dark Mode Behavior:** Alerts retain high contrast.
- **Accessibility Notes:** Error summary links to sections.

### 6.11 Order Detail

- **Purpose:** Track order status, lines, fulfillment, invoice, and delivery state.
- **Layout:** Header with order number/status, timeline, line items, totals, documents.
- **Navigation:** Reorder, Cancel Request, Print/Share, Invoice where available.
- **Components:** Status timeline, line table/list, totals, document actions.
- **User Actions:** View, reorder, request cancellation, share PDF.
- **Empty State:** No documents available.
- **Loading State:** Skeleton timeline and lines.
- **Error State:** Failed document download.
- **Success State:** PDF generated or cancellation requested.
- **Validation:** Cancellation allowed by status and role.
- **Responsive Behavior:** List mobile, table desktop.
- **Dark Mode Behavior:** Timeline statuses contrast.
- **Accessibility Notes:** Order status timeline has textual status history.

### 6.12 Collections / Payment Capture

- **Purpose:** Record customer payments against invoices or on account.
- **Layout:** Customer balance, selectable invoice list, payment method sheet, amount entry, reference/photo, submit.
- **Navigation:** From customer, invoice, or home quick action.
- **Components:** Invoice checklist, currency field, payment method chips, camera attachment, receipt preview.
- **User Actions:** Select invoices, enter amount, choose cash/check/bank/mobile, attach proof, submit.
- **Empty State:** “No open invoices.”
- **Loading State:** Invoice loading skeleton.
- **Error State:** Overpayment, missing reference, offline receipt number warning.
- **Success State:** Receipt number with print/share action.
- **Validation:** Amount > 0, method-specific reference, invoice allocation, currency.
- **Responsive Behavior:** Bottom sheet payment method mobile; side panel desktop.
- **Dark Mode Behavior:** Payment chips adapt.
- **Accessibility Notes:** Invoice selection states announced.

### 6.13 Returns Request

- **Purpose:** Capture product returns with reasons, quantities, photos, and approval status.
- **Layout:** Customer summary, add item via scan/search, return lines, reason, condition, photos, submit.
- **Navigation:** Add Item opens scanner/catalog; Submit opens confirmation.
- **Components:** Barcode scanner, item rows, reason dropdown, photo capture, totals.
- **User Actions:** Scan item, set quantity/reason, attach photo, submit.
- **Empty State:** Empty return list with Add Return Item.
- **Loading State:** Product lookup spinner.
- **Error State:** Invalid item, quantity exceeds sold/allowed, photo required.
- **Success State:** Return request ID and approval status.
- **Validation:** Return window, quantity, reason, condition, mandatory photo.
- **Responsive Behavior:** Mobile-first stepper; desktop table.
- **Dark Mode Behavior:** Photo thumbnails on dark surfaces.
- **Accessibility Notes:** Scanner has manual entry fallback.

### 6.14 Visit Survey / Merchandising

- **Purpose:** Capture shelf, competitor, display, and compliance data.
- **Layout:** Question groups, photo prompts, numeric fields, yes/no chips, progress footer.
- **Navigation:** Previous/Next, Save Draft, Complete.
- **Components:** Survey controls, camera, mandatory marker, progress bar.
- **User Actions:** Answer, attach photos, save, submit.
- **Empty State:** No survey assigned.
- **Loading State:** Survey template skeleton.
- **Error State:** Required unanswered questions summary.
- **Success State:** Survey completed and added to visit checklist.
- **Validation:** Required questions, numeric bounds, photo requirements.
- **Responsive Behavior:** One question group per view mobile; multi-section desktop.
- **Dark Mode Behavior:** Choice chips remain high contrast.
- **Accessibility Notes:** Radio/checkbox groups use semantic labels.

## 7. Supervisor and Sales Manager Screens

### 7.1 Team Dashboard

- **Purpose:** Monitor team sales, visits, collections, route adherence, and exceptions.
- **Layout:** KPI row, map of reps, exception cards, team ranking, pending approvals.
- **Navigation:** Drill into rep, route, approval, or report.
- **Components:** KPI cards, map, charts, ranking list, alert cards.
- **User Actions:** Filter by date/team/territory, message rep, approve items, export.
- **Empty State:** No data for selected filters.
- **Loading State:** Dashboard skeleton.
- **Error State:** Partial data unavailable alert.
- **Success State:** Filters applied and approvals completed.
- **Validation:** Permission-scoped teams.
- **Responsive Behavior:** Compact KPI carousel mobile; grid desktop.
- **Dark Mode Behavior:** Dark charts and map style.
- **Accessibility Notes:** Charts include summaries and table alternatives.

### 7.2 Live Route Monitoring

- **Purpose:** View rep locations, visit status, deviations, and route progress.
- **Layout:** Map/list split, filter bar, rep status cards, deviation alerts.
- **Navigation:** Rep card opens Rep Day Detail.
- **Components:** Map markers, status chips, route polyline, filters, call/message actions.
- **User Actions:** Filter reps, contact rep, view deviations, reassign visit.
- **Empty State:** No active routes.
- **Loading State:** Map marker skeleton/list placeholders.
- **Error State:** Location permission disabled or stale GPS indicator.
- **Success State:** Route adjustment saved.
- **Validation:** Reassignment requires reason.
- **Responsive Behavior:** Toggle map/list mobile; split desktop.
- **Dark Mode Behavior:** Dark map and accessible marker labels.
- **Accessibility Notes:** Full list equivalent to map.

### 7.3 Approvals Inbox

- **Purpose:** Approve or reject orders, discounts, returns, customer requests, credit overrides, and route exceptions.
- **Layout:** Tabs by approval type, priority filters, approval cards with key context and SLA.
- **Navigation:** Card opens Approval Detail.
- **Components:** Status chips, batch actions, filters, priority badges.
- **User Actions:** Approve, reject, request changes, bulk approve when allowed.
- **Empty State:** “No pending approvals.”
- **Loading State:** Approval card skeletons.
- **Error State:** Failed action retry with preserved decision.
- **Success State:** Approval completed and next item suggested.
- **Validation:** Comment required on rejection, authority limits.
- **Responsive Behavior:** Tabs mobile; inbox/detail split desktop.
- **Dark Mode Behavior:** Priority colors tuned.
- **Accessibility Notes:** Decision buttons clearly labeled with record identifiers.

### 7.4 Approval Detail

- **Purpose:** Show full approval context and decision controls.
- **Layout:** Header, requester, financial impact, policy violations, attachments, history, sticky decision bar.
- **Navigation:** Approve/Reject/Request Change returns to inbox or next item.
- **Components:** Comparison table, comments, attachment viewer, audit timeline.
- **User Actions:** Approve, reject with reason, add comment, view attachment.
- **Empty State:** Missing attachment placeholder.
- **Loading State:** Detail skeleton.
- **Error State:** Decision conflict if already processed by another approver.
- **Success State:** Decision recorded.
- **Validation:** Limits, mandatory comments, stale approval version.
- **Responsive Behavior:** Decision bar bottom mobile, right panel desktop.
- **Dark Mode Behavior:** Policy violation alert remains prominent.
- **Accessibility Notes:** Audit history is chronological and screen-reader friendly.

### 7.5 Performance Analytics

- **Purpose:** Analyze individual and team performance against targets.
- **Layout:** Date/territory filters, KPI cards, trend charts, rankings, detail table.
- **Navigation:** Drill down by rep/customer/product.
- **Components:** Charts, data grid, filters, export.
- **User Actions:** Filter, sort, export, drill down.
- **Empty State:** No performance data.
- **Loading State:** Chart skeletons.
- **Error State:** Report generation failed with retry.
- **Success State:** Export generated.
- **Validation:** Date range limits for mobile performance.
- **Responsive Behavior:** Chart carousel mobile; full grid desktop.
- **Dark Mode Behavior:** Accessible chart palette.
- **Accessibility Notes:** Data table alternative for charts.

## 8. Warehouse Screens

### 8.1 Warehouse Dashboard

- **Purpose:** Summarize pick, dispatch, loading, stock, and return workload.
- **Layout:** KPI cards, today’s queues, urgent alerts, quick scan action.
- **Navigation:** Pick Lists, Dispatch, Transfers, Returns, Counts.
- **Components:** Queue cards, scan FAB, low-stock alerts.
- **User Actions:** Start picking, scan item, receive return, run count.
- **Empty State:** No pending warehouse tasks.
- **Loading State:** Queue skeletons.
- **Error State:** Inventory service unavailable; cached queues shown.
- **Success State:** Task completed snackbar.
- **Validation:** Warehouse assignment.
- **Responsive Behavior:** Mobile cards; desktop operational grid.
- **Dark Mode Behavior:** Warehouse status colors accessible.
- **Accessibility Notes:** Scan workflows have manual fallback.

### 8.2 Pick List

- **Purpose:** Manage orders ready for picking.
- **Layout:** Search/filter, pick list cards grouped by priority, route, or customer.
- **Navigation:** Card opens Pick Detail.
- **Components:** Search, filters, priority chips, progress bars.
- **User Actions:** Start pick, assign picker, print, filter.
- **Empty State:** No pick lists.
- **Loading State:** Card skeletons.
- **Error State:** Failed assignment action.
- **Success State:** Pick assigned/started.
- **Validation:** Picker availability and order status.
- **Responsive Behavior:** Cards mobile; data grid desktop.
- **Dark Mode Behavior:** Priority chips adapt.
- **Accessibility Notes:** Progress bars include numeric text.

### 8.3 Pick Detail / Barcode Picking

- **Purpose:** Pick products accurately using scan-first workflow.
- **Layout:** Order header, item checklist, scan bar, discrepancy actions, sticky Complete Pick.
- **Navigation:** Scan opens item confirmation; discrepancy opens reason sheet.
- **Components:** Barcode scanner, item rows, quantity controls, exception chips.
- **User Actions:** Scan item/bin, adjust quantity, report shortage, complete.
- **Empty State:** No remaining items.
- **Loading State:** Item validation spinner.
- **Error State:** Wrong item/bin, over-pick, unavailable stock.
- **Success State:** Item picked and pick completed.
- **Validation:** SKU, bin, lot/serial, quantity, expiry where applicable.
- **Responsive Behavior:** Scan action always thumb reachable.
- **Dark Mode Behavior:** Scanner overlay uses clear reticle.
- **Accessibility Notes:** Manual SKU entry and audible/haptic feedback.

### 8.4 Dispatch

- **Purpose:** Confirm packed orders loaded for delivery or van sales.
- **Layout:** Dispatch queue, vehicle/driver selector, load checklist, document actions.
- **Navigation:** Dispatch card opens detail; Complete Dispatch confirms shipment.
- **Components:** Vehicle dropdown, scan list, delivery document preview.
- **User Actions:** Assign vehicle, scan packages, print delivery note, complete.
- **Empty State:** No dispatches ready.
- **Loading State:** Queue skeleton.
- **Error State:** Missing package or vehicle capacity warning.
- **Success State:** Dispatch completed.
- **Validation:** All packages scanned, driver assigned, vehicle capacity.
- **Responsive Behavior:** List mobile, split detail desktop.
- **Dark Mode Behavior:** Package scan statuses clear.
- **Accessibility Notes:** Completion checklist announced.

### 8.5 Stock Transfer

- **Purpose:** Move inventory between warehouses, bins, or vans.
- **Layout:** From/To selectors, scanned items, quantities, reason, submit.
- **Navigation:** Submit opens transfer confirmation.
- **Components:** Autocomplete warehouse/bin fields, scanner, item rows, quantity fields.
- **User Actions:** Select locations, scan items, submit, save draft.
- **Empty State:** Empty transfer with scan prompt.
- **Loading State:** Location lookup spinner.
- **Error State:** Insufficient stock or invalid destination.
- **Success State:** Transfer document created.
- **Validation:** Source/destination, stock availability, lot/serial.
- **Responsive Behavior:** Mobile stepper; desktop form grid.
- **Dark Mode Behavior:** Location fields readable.
- **Accessibility Notes:** Scanner has keyboard/manual entry.

### 8.6 Inventory Count

- **Purpose:** Execute cycle counts and reconcile variances.
- **Layout:** Count header, bin/item list, scan input, counted quantity, variance indicator.
- **Navigation:** Submit Count opens review.
- **Components:** Scanner, count rows, variance chips, progress.
- **User Actions:** Scan, enter quantity, save, submit.
- **Empty State:** No count tasks assigned.
- **Loading State:** Count list skeleton.
- **Error State:** Duplicate count or invalid bin.
- **Success State:** Count submitted for review.
- **Validation:** Required counted quantities and variance reason threshold.
- **Responsive Behavior:** Scan-first mobile; table desktop.
- **Dark Mode Behavior:** Variance colors accessible.
- **Accessibility Notes:** Variance announced with numeric difference.

## 9. Accounting Screens

### 9.1 Finance Dashboard

- **Purpose:** Summarize receivables, collections, reconciliation, overdue invoices, and exceptions.
- **Layout:** KPI cards, aging chart, exception list, collection trend, pending reconciliation.
- **Navigation:** Drill into invoices, receipts, customers, reports.
- **Components:** Charts, KPI cards, aging buckets, alerts.
- **User Actions:** Filter, export, open exception, reconcile.
- **Empty State:** No finance data for filters.
- **Loading State:** Dashboard skeleton.
- **Error State:** Partial finance data warning.
- **Success State:** Export or reconciliation complete.
- **Validation:** Finance permissions.
- **Responsive Behavior:** Cards mobile; executive grid desktop.
- **Dark Mode Behavior:** Chart palette accessible.
- **Accessibility Notes:** Aging chart has tabular equivalent.

### 9.2 Invoice List

- **Purpose:** Search, filter, and manage invoices.
- **Layout:** Enterprise data grid on desktop, invoice cards on mobile.
- **Navigation:** Invoice opens Invoice Detail.
- **Components:** Search, filters, sorting, pagination, export, column chooser.
- **User Actions:** Search, filter by status/age/customer, export, open invoice.
- **Empty State:** No invoices match criteria.
- **Loading State:** Row skeletons.
- **Error State:** Failed load with retry.
- **Success State:** Export ready.
- **Validation:** Date range and permission filters.
- **Responsive Behavior:** Card list mobile; sticky-header grid desktop.
- **Dark Mode Behavior:** Grid lines and selected rows adapt.
- **Accessibility Notes:** Grid supports keyboard navigation and announced sort state.

### 9.3 Invoice Detail

- **Purpose:** Show invoice lines, tax, payment status, and related receipts.
- **Layout:** Invoice header, customer, line items, totals, payment history, actions.
- **Navigation:** Record Payment, Share, Credit Note Request.
- **Components:** Status timeline, line table, totals, PDF preview.
- **User Actions:** View, share, print, collect/record payment, create credit note.
- **Empty State:** No payment history.
- **Loading State:** Detail skeleton.
- **Error State:** PDF generation failed.
- **Success State:** Payment/credit action completed.
- **Validation:** Status-based actions.
- **Responsive Behavior:** Mobile stacked sections; desktop two columns.
- **Dark Mode Behavior:** PDF preview framed on dark surface.
- **Accessibility Notes:** Totals and tax rows have explicit labels.

### 9.4 Receipt / Collection Reconciliation

- **Purpose:** Match field collections with bank/cash deposits and resolve exceptions.
- **Layout:** Summary cards, unmatched receipts, bank deposits, matching workspace.
- **Navigation:** Receipt opens details; match opens confirmation.
- **Components:** Data grid, filters, matching suggestions, confidence badges.
- **User Actions:** Match, split, reject, request clarification, export.
- **Empty State:** No unmatched receipts.
- **Loading State:** Grid skeleton.
- **Error State:** Matching service unavailable; manual matching remains.
- **Success State:** Receipt reconciled.
- **Validation:** Amount, date, method, duplicate reference.
- **Responsive Behavior:** Simplified exception cards mobile; full workspace desktop.
- **Dark Mode Behavior:** Confidence badges visible.
- **Accessibility Notes:** Suggested matches explain reason textually.

### 9.5 Credit Note

- **Purpose:** Create, review, or approve credit notes for returns, pricing issues, or adjustments.
- **Layout:** Customer/invoice selector, reason, line adjustments, attachments, review.
- **Navigation:** Submit routes to approval if required.
- **Components:** Autocomplete, line table, amount fields, attachment uploader.
- **User Actions:** Select invoice, add adjustment, attach proof, submit.
- **Empty State:** No eligible invoices.
- **Loading State:** Invoice lookup skeleton.
- **Error State:** Amount exceeds policy or missing reason.
- **Success State:** Credit note created or sent for approval.
- **Validation:** Reason, amount, invoice status, authority limit.
- **Responsive Behavior:** Stepper mobile; grid desktop.
- **Dark Mode Behavior:** Adjustment rows clear.
- **Accessibility Notes:** Error summary links to invalid rows.

## 10. Administrator Screens

### 10.1 Admin Dashboard

- **Purpose:** Monitor system configuration health and administrative workload.
- **Layout:** Setup health cards, pending admin tasks, user/device alerts, master data sync status.
- **Navigation:** Quick links to users, roles, territories, products, settings.
- **Components:** KPI cards, alerts, audit highlights.
- **User Actions:** Open setup tasks, export audit, manage alerts.
- **Empty State:** No pending admin tasks.
- **Loading State:** Skeleton cards.
- **Error State:** Configuration service unavailable.
- **Success State:** Admin action completion messages.
- **Validation:** Administrator role.
- **Responsive Behavior:** Mobile cards; desktop admin console grid.
- **Dark Mode Behavior:** Health states accessible.
- **Accessibility Notes:** Health indicators include text labels.

### 10.2 Users & Roles

- **Purpose:** Manage users, roles, permissions, assignments, and activation state.
- **Layout:** Data grid/list with filters, user detail drawer, role assignment panel.
- **Navigation:** Create User, User Detail, Role Detail.
- **Components:** Enterprise grid, column chooser, filters, status chips, drawer forms.
- **User Actions:** Create/edit/deactivate user, assign role/territory, reset PIN.
- **Empty State:** No users match filters.
- **Loading State:** Row skeletons.
- **Error State:** Duplicate username or permission conflict.
- **Success State:** User saved.
- **Validation:** Required identity fields, unique username, role compatibility.
- **Responsive Behavior:** Cards mobile; grid desktop.
- **Dark Mode Behavior:** Grid selected states adapt.
- **Accessibility Notes:** Role checkboxes grouped semantically.

### 10.3 Territory & Route Setup

- **Purpose:** Configure territories, routes, customer assignments, and visit schedules.
- **Layout:** Map/list workspace, territory tree, assignment table, schedule calendar.
- **Navigation:** Territory opens detail; route opens planner.
- **Components:** Map, tree view, drag assignment, calendar, filters.
- **User Actions:** Create territory, assign customer/rep, schedule visits, optimize route.
- **Empty State:** No territories configured.
- **Loading State:** Map/list skeleton.
- **Error State:** Overlapping territory or invalid assignment.
- **Success State:** Route/territory saved.
- **Validation:** Unique code, assigned owner, non-conflicting schedule.
- **Responsive Behavior:** Admin-heavy desktop optimized; mobile supports review/light edits.
- **Dark Mode Behavior:** Map style adjusted.
- **Accessibility Notes:** Drag actions have keyboard alternatives.

### 10.4 Products, Pricing & Promotions

- **Purpose:** Manage product master data, price lists, discounts, and promotions.
- **Layout:** Product grid, filters, detail drawer, price list tabs, promotion builder.
- **Navigation:** Product detail, price list, promotion rule detail.
- **Components:** Data grid, forms, rule builder, import/export, validation summary.
- **User Actions:** Create/edit product, import prices, create promotions, deactivate item.
- **Empty State:** No products or rules.
- **Loading State:** Grid skeleton.
- **Error State:** Import validation report.
- **Success State:** Product/pricing saved or import completed.
- **Validation:** SKU uniqueness, price validity dates, UOM, promotion conflicts.
- **Responsive Behavior:** Desktop-first grid; mobile read/edit critical fields.
- **Dark Mode Behavior:** Rule builder cards adapt.
- **Accessibility Notes:** Import errors downloadable and listed in accessible table.

### 10.5 Approval Rules

- **Purpose:** Configure approval thresholds, routing, SLA, and escalation.
- **Layout:** Rule list, rule builder, condition cards, approver chain preview.
- **Navigation:** Create Rule, Rule Detail, Test Rule.
- **Components:** Condition builder, dropdowns, numeric/currency fields, preview panel.
- **User Actions:** Add condition, assign approvers, test sample transaction, activate rule.
- **Empty State:** No approval rules configured.
- **Loading State:** Rule skeleton.
- **Error State:** Conflicting or circular approval route.
- **Success State:** Rule saved and activated.
- **Validation:** Required trigger, threshold, approver, unique priority.
- **Responsive Behavior:** Stepper mobile; side-by-side builder desktop.
- **Dark Mode Behavior:** Condition blocks remain clear.
- **Accessibility Notes:** Rule logic expressed in plain-language summary.

### 10.6 Device Management

- **Purpose:** Manage registered mobile devices, security status, app versions, and remote actions.
- **Layout:** Device grid, compliance filters, device detail drawer.
- **Navigation:** Device row opens detail.
- **Components:** Status chips, version badges, action menu, audit timeline.
- **User Actions:** Revoke device, force sync, require PIN reset, view diagnostics.
- **Empty State:** No registered devices.
- **Loading State:** Grid skeleton.
- **Error State:** Remote command failed.
- **Success State:** Command queued.
- **Validation:** High-risk actions require confirmation.
- **Responsive Behavior:** Card list mobile; grid desktop.
- **Dark Mode Behavior:** Compliance chips accessible.
- **Accessibility Notes:** Remote action confirmations are explicit.

### 10.7 Audit Logs

- **Purpose:** Review user, transaction, configuration, and security audit events.
- **Layout:** Search/filter panel, immutable audit grid, detail drawer.
- **Navigation:** Audit event opens record details where permitted.
- **Components:** Data grid, filters, date range, export, event detail.
- **User Actions:** Search, filter, export, open linked record.
- **Empty State:** No audit events for filters.
- **Loading State:** Row skeletons.
- **Error State:** Query too broad or failed; suggest narrowing filters.
- **Success State:** Export ready.
- **Validation:** Date range limit and permission scope.
- **Responsive Behavior:** Mobile filter-first cards; desktop grid.
- **Dark Mode Behavior:** Event severity colors adjusted.
- **Accessibility Notes:** Audit rows include actor, action, target, and timestamp in text.

## 11. Executive Screens

### 11.1 Executive Dashboard

- **Purpose:** Provide high-level business health across sales, collections, returns, inventory, visits, and performance.
- **Layout:** Global filters, KPI grid, trend charts, geo map, alerts, top customers/products, pending approvals.
- **Navigation:** Drill into analytics pages and reports.
- **Components:** KPI cards, charts, map, ranking tables, alert center.
- **User Actions:** Filter by date/region/branch, drill down, export, share report.
- **Empty State:** No data for filter range.
- **Loading State:** Skeleton KPI and chart placeholders.
- **Error State:** Partial data unavailable banner with retry.
- **Success State:** Filters applied/export generated.
- **Validation:** Date ranges and executive permission.
- **Responsive Behavior:** Mobile snapshot; tablet/desktop analytical dashboard.
- **Dark Mode Behavior:** Dark analytical surfaces and accessible chart palette.
- **Accessibility Notes:** Every chart includes summary and data table link.

### 11.2 Sales Analytics

- **Purpose:** Analyze revenue, volume, margin, target achievement, products, customers, and channels.
- **Layout:** Filter bar, KPI strip, trend chart, breakdown charts, top/bottom tables.
- **Navigation:** Drill to region, rep, customer, product.
- **Components:** Charts, grids, comparison cards, export.
- **User Actions:** Filter, compare periods, drill down, export.
- **Empty State:** No sales data.
- **Loading State:** Chart skeletons.
- **Error State:** Analytics query failed with retry.
- **Success State:** Export ready.
- **Validation:** Query date range and aggregation rules.
- **Responsive Behavior:** Chart carousel mobile; multi-panel desktop.
- **Dark Mode Behavior:** Chart colors selected for contrast.
- **Accessibility Notes:** Comparison deltas include direction words.

### 11.3 Collections Analytics

- **Purpose:** Monitor cash collection, receivables aging, overdue risk, and payment performance.
- **Layout:** KPI cards, aging buckets, trend chart, overdue customer table, collector ranking.
- **Navigation:** Drill into customer, invoice, collector.
- **Components:** Aging chart, trend chart, data grid, risk chips.
- **User Actions:** Filter, export, open overdue account.
- **Empty State:** No collection data.
- **Loading State:** Skeletons.
- **Error State:** Data unavailable banner.
- **Success State:** Export generated.
- **Validation:** Finance visibility permissions.
- **Responsive Behavior:** Mobile summary; desktop full analytics.
- **Dark Mode Behavior:** Aging buckets remain distinguishable.
- **Accessibility Notes:** Risk is labeled textually.

### 11.4 Inventory Analytics

- **Purpose:** Analyze stock availability, low stock, dead stock, returns, and warehouse performance.
- **Layout:** KPI cards, stock heatmap/table, low-stock alerts, movement trend, warehouse comparison.
- **Navigation:** Drill into item, warehouse, category.
- **Components:** Charts, grid, status chips, export.
- **User Actions:** Filter, drill down, export, open alert.
- **Empty State:** No inventory data.
- **Loading State:** Chart/table skeletons.
- **Error State:** Inventory feed delayed warning.
- **Success State:** Export ready.
- **Validation:** Warehouse visibility.
- **Responsive Behavior:** Cards mobile; heatmap/table desktop.
- **Dark Mode Behavior:** Heatmap uses accessible scale.
- **Accessibility Notes:** Heatmap has equivalent table.

## 12. Shared Transaction and Utility Screens

### 12.1 Enterprise Data Grid

- **Purpose:** Provide consistent large-data browsing for invoices, orders, users, products, audit logs, and reports.
- **Layout:** Toolbar, search, filter chips, sticky header, rows, sticky row actions, pagination.
- **Navigation:** Row opens detail; toolbar controls search/filter/export.
- **Components:** Sorting, filtering, grouping, column chooser, export, pagination, density toggle.
- **User Actions:** Sort, filter, group, resize columns, export, select rows.
- **Empty State:** Clear message plus reset filters action.
- **Loading State:** Skeleton rows and disabled toolbar.
- **Error State:** Retry and query adjustment guidance.
- **Success State:** Export completed snackbar.
- **Validation:** Query limits and permission-scoped columns.
- **Responsive Behavior:** Converts to cards on mobile.
- **Dark Mode Behavior:** Sticky headers and selected rows remain clear.
- **Accessibility Notes:** Keyboard grid semantics, sort announcements, row action labels.

### 12.2 Filter Panel

- **Purpose:** Apply advanced filters without cluttering primary screens.
- **Layout:** Bottom sheet mobile; side drawer desktop with grouped filters and Apply/Reset.
- **Navigation:** Apply closes panel and updates results.
- **Components:** Chips, dropdowns, date range picker, sliders, checkboxes.
- **User Actions:** Select filters, reset, save view, apply.
- **Empty State:** No saved filters.
- **Loading State:** Option lookup spinner.
- **Error State:** Invalid date range.
- **Success State:** Filter count chip updated.
- **Validation:** Date ranges, incompatible filters.
- **Responsive Behavior:** Full-height bottom sheet mobile, right drawer desktop.
- **Dark Mode Behavior:** Filter groups use dark surfaces.
- **Accessibility Notes:** Focus trapped while panel is open.

### 12.3 Barcode Scanner

- **Purpose:** Scan products, bins, documents, packages, and returns.
- **Layout:** Camera view, centered reticle, flashlight, manual entry, recent scans.
- **Navigation:** Successful scan returns value to invoking workflow.
- **Components:** Camera permission prompt, reticle, flash toggle, manual input.
- **User Actions:** Scan, toggle flash, enter manually, retry.
- **Empty State:** Camera permission needed screen.
- **Loading State:** Camera initializing.
- **Error State:** Permission denied or barcode not recognized.
- **Success State:** Haptic/audio confirmation and item result sheet.
- **Validation:** Barcode type and workflow context.
- **Responsive Behavior:** Full screen on mobile/tablet.
- **Dark Mode Behavior:** Scanner chrome is dark by default.
- **Accessibility Notes:** Manual entry is always available.

### 12.4 Map View

- **Purpose:** Display customer, rep, route, and warehouse locations.
- **Layout:** Map canvas, search, filters, marker list bottom sheet, GPS recenter button.
- **Navigation:** Marker opens preview; preview opens detail.
- **Components:** Map markers, route polyline, GPS indicator, bottom sheet list.
- **User Actions:** Search area, select marker, recenter, open directions.
- **Empty State:** No locations in selected filters.
- **Loading State:** Map tiles and marker skeletons.
- **Error State:** Map unavailable; list fallback.
- **Success State:** Route loaded or location selected.
- **Validation:** Location permission and coordinate validity.
- **Responsive Behavior:** Full screen mobile; split map/list desktop.
- **Dark Mode Behavior:** Uses dark map theme where available.
- **Accessibility Notes:** Every marker appears in accessible list.

### 12.5 Document / Attachment Viewer

- **Purpose:** View invoices, receipts, photos, signatures, and uploaded documents.
- **Layout:** Preview area, metadata, actions, thumbnails.
- **Navigation:** Back to parent record; share/download/print actions.
- **Components:** Image/PDF viewer, zoom, rotate, metadata, action bar.
- **User Actions:** View, zoom, share, download, delete if permitted.
- **Empty State:** No attachment uploaded.
- **Loading State:** Preview spinner.
- **Error State:** Unsupported file or download failed.
- **Success State:** Document shared/downloaded.
- **Validation:** File type, size, permission.
- **Responsive Behavior:** Full screen mobile, modal desktop.
- **Dark Mode Behavior:** Viewer chrome dark; document untouched.
- **Accessibility Notes:** Attachments require title/description fields when uploaded.

### 12.6 Report Export Center

- **Purpose:** Track generated exports and downloads.
- **Layout:** Export request form, recent exports list, status filters.
- **Navigation:** Download opens document viewer or system share.
- **Components:** Format selector, date range, progress status, download buttons.
- **User Actions:** Request export, download, cancel pending export.
- **Empty State:** No exports requested.
- **Loading State:** Export status polling.
- **Error State:** Export failed with reason and retry.
- **Success State:** File ready snackbar.
- **Validation:** Date range, format, permission.
- **Responsive Behavior:** Mobile list; desktop grid.
- **Dark Mode Behavior:** Status chips accessible.
- **Accessibility Notes:** Export progress announced.

### 12.7 Offline Conflict Resolution

- **Purpose:** Resolve differences between locally edited records and server versions.
- **Layout:** Conflict summary, side-by-side values, recommended resolution, sticky Save Resolution.
- **Navigation:** Save returns to Sync Center.
- **Components:** Comparison cards, radio choices, diff highlights, comments.
- **User Actions:** Keep local, use server, merge fields, add comment, save.
- **Empty State:** No conflicts.
- **Loading State:** Conflict details loading.
- **Error State:** Resolution failed because record changed again.
- **Success State:** Conflict resolved and queued for sync.
- **Validation:** Required resolution for each conflicting field.
- **Responsive Behavior:** Stacked comparison mobile; side-by-side desktop.
- **Dark Mode Behavior:** Diff colors adjusted with labels.
- **Accessibility Notes:** Diff text never relies only on red/green.

## 13. Critical Workflows

### 13.1 Daily Sales Visit Workflow

1. User unlocks app and sees Sales Rep Home.
2. User taps Start Route.
3. User opens next Visit Detail.
4. User checks in with GPS validation.
5. User creates order, collects payment, captures return, or completes survey.
6. User checks out after required checklist completion.
7. App saves locally when offline and syncs automatically when online.

### 13.2 Order Creation Workflow

1. Select customer from visit or customer profile.
2. Open Order Cart.
3. Add items from product catalog, barcode scan, or recommended reorder list.
4. Validate credit, price, stock, taxes, discounts, and promotions.
5. Review order.
6. Submit online or save offline with queued sync.
7. Show order confirmation and share/print options.

### 13.3 Collection Workflow

1. Open customer or invoice.
2. Select open invoices.
3. Choose payment method.
4. Enter amount and reference.
5. Attach proof when required.
6. Submit receipt.
7. Print/share receipt and queue for reconciliation.

### 13.4 Return Workflow

1. Open return from visit/customer.
2. Scan or search returned product.
3. Enter quantity, reason, condition, and photo proof.
4. Review return request.
5. Submit for approval or warehouse receiving.

### 13.5 Warehouse Pick and Dispatch Workflow

1. Warehouse staff opens Pick List.
2. Starts pick and scans items/bins.
3. Resolves shortages with reason.
4. Completes pick.
5. Dispatch scans packages and assigns vehicle/driver.
6. Dispatch completion updates order status.

### 13.6 Approval Workflow

1. Approver receives notification or opens Approvals Inbox.
2. Reviews approval detail, policy violations, attachments, and history.
3. Approves, rejects with reason, or requests changes.
4. System records decision and notifies requester.

## 14. State Patterns

### 14.1 Empty States

- Use plain language explaining why the area is empty.
- Provide one primary next action when useful.
- Avoid decorative illustrations that reduce information density.

### 14.2 Loading States

- Use skeleton loaders for cards, rows, dashboards, and details.
- Use inline spinners for small field lookups and button actions.
- Preserve layout to prevent jumpiness.

### 14.3 Error States

- Show what happened, what the user can do, and whether data is safe.
- Keep cached/offline data available whenever possible.
- Destructive and financial errors require explicit detail and trace/reference number when available.

### 14.4 Success States

- Use short snackbars for routine saves.
- Use confirmation pages for important transactions such as order submission, receipt creation, return request, and dispatch completion.
- Always provide next best action.

## 15. Responsive Breakpoints

| Breakpoint | Width | Navigation | Layout |
|---|---:|---|---|
| Mobile | 320-599px | Bottom navigation | Single column, sticky bottom actions |
| Tablet | 600-1023px | Navigation rail | Two-column split views where useful |
| Desktop | 1024-1439px | Side navigation | Grids, drawers, multi-panel dashboards |
| Large Desktop | 1440px+ | Expanded side navigation | Dense dashboards and analytical workspaces |

## 16. Production Interaction Standards

- Transitions: 150-250ms, ease-out, functional only.
- Forms autosave drafts after field blur and after 10 seconds of inactivity.
- Offline banner appears only when useful; persistent status chip remains in app bar.
- Primary actions are sticky on long mobile forms.
- Confirmation dialogs are required for destructive actions, high-value overrides, device revocation, and logout with unsynced changes.
- All financial and inventory submissions show immutable confirmation identifiers.
- All workflows include manual fallback for camera, GPS, barcode, and map-dependent actions.
