<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-11-22 11:42:41.0
 */
class ValueCardExtPayResponse implements \JsonSerializable {

    /**
     * 支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 外部渠道支付单据号，业务方唯一凭证
     * @var string
     */
    private $payChannelNo;

    /**
     * 支付完成时间
     * @var DateTime
     */
    private $paymentDt;

    /**
     * 实际支付金额
     * @var int
     */
    private $payAmount;

    /**
     * 支付状态
     * @var string
     */
    private $payStatus;



    /**
     * @return string
     */
    public function getPayDetailNo(): string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
    }

    /**
     * @return string
     */
    public function getPayChannelNo(): string
    {
        return $this->payChannelNo;
    }

    /**
     * @param string $payChannelNo
     */
    public function setPayChannelNo(string $payChannelNo): void
    {
        $this->payChannelNo = $payChannelNo;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDt(): DateTime
    {
        return $this->paymentDt;
    }

    /**
     * @param DateTime $paymentDt
     */
    public function setPaymentDt(DateTime $paymentDt): void
    {
        $this->paymentDt = $paymentDt;
    }

    /**
     * @return int
     */
    public function getPayAmount(): int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayStatus(): string
    {
        return $this->payStatus;
    }

    /**
     * @param string $payStatus
     */
    public function setPayStatus(string $payStatus): void
    {
        $this->payStatus = $payStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}