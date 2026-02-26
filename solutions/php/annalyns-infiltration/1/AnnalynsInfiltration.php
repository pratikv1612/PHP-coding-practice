<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        if ($is_knight_awake != true){
            return true;
        }return false;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
          return ($is_knight_awake === true) 
        || ($is_archer_awake === true) 
        || ($is_prisoner_awake === true);
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        if($is_archer_awake == true &&  $is_prisoner_awake == true){
            return !true;
        }elseif($is_prisoner_awake == true){
            return true;
        }return false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        return
        ($is_dog_present && !$is_archer_awake) ||
        (!$is_dog_present && !$is_knight_awake && !$is_archer_awake && $is_prisoner_awake);
    }
}
$infiltration = new AnnalynsInfiltration();
$infiltration->canFastAttack($is_knight_awake);
$infiltration->canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake);
$infiltration->canSignal($is_archer_awake, $is_prisoner_awake);
$infiltration->canLiberate($is_knight_awake,$is_archer_awake,$is_prisoner_awake,$is_dog_present);