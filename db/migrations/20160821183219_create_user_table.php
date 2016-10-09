<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function up()
    {
        $sql = <<<SQL
CREATE TABLE `users` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(128) NOT NULL,
  `password` VARCHAR(255) NOT NULL,

   UNIQUE INDEX `idx_user_1` (`email`, `password`)
) ENGINE InnoDb DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
SQL;
        $this->execute($sql);
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
