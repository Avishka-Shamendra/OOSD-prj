<?php

class PatientContr extends PatientModel{
  public function createForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile){
    $this->setForcesPatient($force, $first, $last, $nic, $force_id, $regiment, $rank, $email, $dob, $height, $weight, $address, $mobile);
  }
  public function createFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile){
    $this->setFamilyPatient($force_id, $force, $relation, $first, $last, $nic, $email, $dob, $height, $weight, $address, $mobile);
  }

  public function createNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward){
    $this->setNewRecord($nic, $doa, $reason, $history, $cm, $doctor, $ward);
  }

}