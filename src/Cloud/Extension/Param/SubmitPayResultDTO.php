<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-07-23 20:24:20.0
 */
class SubmitPayResultDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var string
     */
    private $payId;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}