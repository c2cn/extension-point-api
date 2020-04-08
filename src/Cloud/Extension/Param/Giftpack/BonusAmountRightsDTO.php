<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class BonusAmountRightsDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $bonusAmount;



    /**
     * @return int
     */
    public function getBonusAmount(): int
    {
        return $this->bonusAmount;
    }

    /**
     * @param int $bonusAmount
     */
    public function setBonusAmount(int $bonusAmount): void
    {
        $this->bonusAmount = $bonusAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}