<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbFactory
 *
 * @author Dev
 */
class dbConfig
{
    private $query;
    private $dsn='mysql:dbname=tare_control;host=localhost';
    private $user='root';
    private $password='';
    protected  $db;
    
    public function __construct($sql) {
        $this->query=$sql;
        try{
            $con = new PDO($this->dsn,$this->user,$this->password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db=$con;
        }
        catch (PDOException $e)
        {
            return "DB Connectivity Error :".$e->getMessage();
        }
    }
    
    function set_query($sql)
    {
        $this->query = $sql;
        return true;
    }
    
    /**
     * This function return the Data from any given SQL query as n
     * associative array
     * 
     * @return An associative array with key=>value pattern
     */
    function select_data()
    {
        try{
            $results = $this->db->query($this->query)->fetchAll();
            return $results;
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This function return the row count for the given SELECT Sql
     * @return integer RowCount
     */
    function get_row_count()
    {
        try{
            return $this->db->query($this->query)->rowCount();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This funciton returns the auto generated ID from the INSERT SQL
     * @return integer ID
     */
    function insert_record_with_inserted_id()
    {
        try{
            $affected_rows = $this->db->exec($this->query);
            if($affected_rows>0)
            {
                return $this->db->lastInsertId();
            }
            else{
                return $this->db->errorInfo();
            }
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This function simply insert a record
     * @return boolean true if success, else string error message
     */
    
    function insert_data()
    {
        try{
          $affected_row = $this->db->exec($this->query);
          if($affected_row>0)
              return true;
          else
              return $this->db->errorInfo();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This function simply update a given query
     * @return boolean true if success, string error message on fail
     */    
    function update_data()
    {
        try{
            $affected_row = $this->db->exec($this->query);
            if($affected_row>0)
                return true;
            else
                return $this->db->errorInfo ();
        } catch (PDOException $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This function deletes a record from given SQL
     * @return boolean true if success, string error message on fail
     */
    function delete_data()
    {
        try{
            $affected_row = $this->db->exec($this->query);
            if($affected_row>0)
                return true;
            else
                return $this->db->errorInfo();
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    
    /**
     * This function starts a db Transaction
     */
    function start_transaction()
    {
        $this->db->beginTransaction();
        return true;
    }
       
    /**
     * This function roll back the transaction
     */    
   function rollback_transaction()
   {
       $this->db->rollBack();
       return true;
   }
   
   /**
    * This functuin commits the db transaction
    */
   function commit_transaction()
   {
       $this->db->commit();
       return true;
   }
}

class dbFactory {
   /**
    * This function will initiate the DBFactory
    * @param type $query - The SQL Query that u want execute
    * @return dbConfig Object output
    */    
    public static function getFactory($sql)
    {
        return new dbConfig($sql);
    }
}
