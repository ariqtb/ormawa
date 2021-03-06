<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_jadwal extends CI_Model {
 function getCalendar($year, $mon){
  $year  = ($mon < 9 && strlen($mon) == 1) ? "$year-0$mon" : "$year-$mon";
  $query = $this->db->select('date, notes')->from('jadwal_kalender')->like('date', $year, 'after')->get();
  if($query->num_rows() > 0){
   $data = array();
   foreach($query->result_array() as $row){
    $data[(int) end(explode('-',$row['date']))] = $row['notes'];
   }
   return $data;
  }else{
   return false;
  }
 }

 function addNote($year, $mon, $day, $note){
  $mon = (strlen($mon) == 2)? $mon : "0$mon";
  $day = (strlen($day) == 2)? $day : "0$day";
  $this->db->query("INSERT INTO jadwal_kalender(date, notes) VALUES ('$year-$mon-$day', ?)", array($note));
 }

 function editNote($year, $mon, $day, $note){
  $mon = (strlen($mon) == 2)? $mon : "0$mon";
  $day = (strlen($day) == 2)? $day : "0$day";
  $this->db->query("UPDATE jadwal_kalender SET notes = ? WHERE date = '$year-$mon-$day'", array($note));
 }

 function deleteNote($year, $mon, $day){
  $mon = (strlen($mon) == 2)? $mon : "0$mon";
  $day = (strlen($day) == 2)? $day : "0$day";
  $this->db->query("DELETE FROM jadwal_kalender WHERE date = '$year-$mon-$day'");
 }

 function getNote($year, $mon, $day){
  $mon   = (strlen($mon) == 2)? $mon : "0$mon";
  $day   = (strlen($day) == 2)? $day : "0$day";
  $query = $this->db->query("SELECT notes FROM jadwal_kalender WHERE date = '$year-$mon-$day'");
  if($query->num_rows() == 1){
   $query = $query->row_array();
   return $query['notes'];
  }else{
   return false;
  }
 }
}?>