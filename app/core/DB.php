<?php



class DB
{
    protected $connection;
    protected $table;

    public function __construct($configName = 'default', $username = null, $password = null)
    {

        $config = require('app/config/database.php');
        $dbConfig = $config['database'][$configName] ?? $config['database']['default'];

        // Check if username and password are passed; else get them from the config
        $username = $username ?? $dbConfig['username'] ?? 'root';
        $password = $password ?? $dbConfig['password'] ?? '';


        $dsn = 'mysql:' . http_build_query($dbConfig, '', ';');

        try {
            $this->connection = new \PDO($dsn, $username, $password, [
                \PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (\PDOException $e) {
            error_log('Connection failed: ' . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (\Exception $e) {
            error_log('SQL Error: ' . $e->getMessage());

            return false;
        }
    }
}
