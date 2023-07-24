psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB" <<-EOSQL
    CREATE DATABASE syncwords_api;
    GRANT ALL PRIVILEGES ON DATABASE syncwords_api TO "default";
EOSQL
