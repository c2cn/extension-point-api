<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-08-02 15:22:28.0
 */
class PurchaseReturnOrderSyncResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}