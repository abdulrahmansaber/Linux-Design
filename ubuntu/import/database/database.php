<?php

  class DatabaseActions {

    /** create_db()
     * Creates new database if not found
     * @return true
     */
    public function create_db($db)
    {
      $new_db = new Query();
      return $new_db->query_rowCount("CREATE DATABASE IF NOT EXISTS `$db`");
    }

    /** drop_db()
     * Drop the exists database
     * @return true
     */
    public function drop_db($db)
    {
      $drop_db = new Query();
      return $drop_db->query_rowCount("DROP DATABASE IF EXISTS `$db`");
    }

  }
