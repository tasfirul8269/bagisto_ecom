#!/bin/bash

# Frooxi Cleanup Script
# Removes all files referencing deleted packages

echo "🧹 Starting Frooxi cleanup..."
echo ""

BASE_DIR="/Users/tasfirulhaque/Frooxi/Iqbal Hossen/bagisto-2.4/packages/Webkul"

# Delete Admin controllers for removed packages
echo "📁 Deleting Admin controllers for removed packages..."
rm -rf "$BASE_DIR/Admin/src/Http/Controllers/CMS"
rm -rf "$BASE_DIR/Admin/src/Http/Controllers/MagicAIController.php"
rm -rf "$BASE_DIR/Admin/src/Http/Controllers/Marketing"
rm -rf "$BASE_DIR/Admin/src/Http/Controllers/Sales/BookingController.php"
rm -rf "$BASE_DIR/Admin/src/Http/Controllers/Sales/RMA"

# Delete Admin DataGrids for removed packages
echo "📁 Deleting Admin DataGrids for removed packages..."
rm -rf "$BASE_DIR/Admin/src/DataGrids/Marketing"
rm -rf "$BASE_DIR/Admin/src/DataGrids/Sales/RMA"

# Delete Admin routes for removed packages
echo "📁 Deleting Admin route files for removed packages..."
rm -f "$BASE_DIR/Admin/src/Routes/cms-routes.php"
rm -f "$BASE_DIR/Admin/src/Routes/marketing-routes.php"

# Delete Admin views for removed packages
echo "📁 Deleting Admin views for removed packages..."
rm -rf "$BASE_DIR/Admin/src/Resources/views/marketing"
rm -rf "$BASE_DIR/Admin/src/Resources/views/cms"
rm -rf "$BASE_DIR/Admin/src/Resources/views/sales/bookings"
rm -rf "$BASE_DIR/Admin/src/Resources/views/sales/rma"
rm -rf "$BASE_DIR/Admin/src/Resources/views/settings/taxes"

# Delete Admin config sections for removed packages
echo "📁 Deleting Admin config references..."
rm -f "$BASE_DIR/Admin/src/Mail/Admin/RMA"

echo ""
echo "✅ Cleanup complete!"
echo ""
echo "📋 Summary of deleted items:"
echo "  - CMS controllers, routes, views"
echo "  - Marketing controllers, DataGrids, routes, views"
echo "  - Booking controllers and views"
echo "  - RMA controllers, DataGrids, routes, views, mail"
echo "  - Tax settings views"
echo ""
echo "⚠️  Next steps:"
echo "  1. Manual cleanup needed in: system.php, menu.php, acl.php"
echo "  2. Update sales-routes.php to remove Booking/RMA imports"
echo "  3. Remove cart coupon functionality"
