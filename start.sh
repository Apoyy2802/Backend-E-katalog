#!/bin/sh
set -e

echo "=== E-Katalog Kantin — Railway Start ==="

php /app/backend/init_db.php

exec php -S 0.0.0.0:${PORT:-8080} -t /app /app/index.php
