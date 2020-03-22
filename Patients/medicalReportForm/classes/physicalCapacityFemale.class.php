<?php
    include_once "physicalCapacity.class.php";

    class PhysicalCapacityFemale extends PhysicalCapacity{
        private $womenInfo;
        private $lmpDate;
        private $maritalState;

        function __construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities, $womenInfo, $lmpDate, $maritalState){
            parent::__construct($eyesColor, $hairColor, $complextion, $height, $weight, $scars, $urAppearance, $urAlbumen, $urSugar, $urSpGravity, $physique, $guap, $skin, $eConditions, $heartSize, $sounds, $arterialWalls, $pulseRate, $bp, $respSystemInfo, $fullExpChest, $rangeOfExp, $centralNerveSys, $abdomen, $abnormalities);
            $this->womenInfo = $womenInfo;
            $this->lmpDate = $lmpDate;
            $this->maritalState = $maritalState;
        }

        function getProperty($property){
            if ($property == 'womenInfo' || $property == 'lmpDate' || $property == 'maritalState'){
                return $this->$property;
            }else{
                parent::getProperty($property);
            }
        }
    }