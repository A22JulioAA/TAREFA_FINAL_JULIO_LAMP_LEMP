#!/bin/bash
docker compose exec bd bash -c "mysqldump -u $MYSQL_USER -p prestashop" > ./backup.sql