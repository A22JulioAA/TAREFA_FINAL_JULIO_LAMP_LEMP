#Script para xerar unha copia da base de datos.

#!/bin/bash
docker compose exec bd bash -c "mysqldump -u $MYSQL_USER -p$MYSQL_PASSWORD prestashop" > ./backup.sql