<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 买家信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class BuyerDTO implements \JsonSerializable {

    /**
     * 粉丝类型
     * @var int
     */
    private $fansType;

    /**
     * 粉丝id
     * @var int
     */
    private $fansId;

    /**
     * 受益人
     * @var string
     */
    private $beneficiary;

    /**
     * 买家手机号码
     * @var string
     */
    private $buyerPhone;

    /**
     * 买家id
     * @var int
     */
    private $buyerId;



    /**
     * @return int
     */
    public function getFansType(): int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return int
     */
    public function getFansId(): int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getBeneficiary(): string
    {
        return $this->beneficiary;
    }

    /**
     * @param string $beneficiary
     */
    public function setBeneficiary(string $beneficiary): void
    {
        $this->beneficiary = $beneficiary;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}