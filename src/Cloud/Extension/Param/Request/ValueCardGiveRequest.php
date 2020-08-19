<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create Tue Mar 24 11:29:12 CST 2020
 */
class ValueCardGiveRequest implements \JsonSerializable {

    /**
     * 赠送人有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 待赠送卡号（调用方生成，取值自卡详情扩展点返回 cardNo 字段）
     * @var string
     */
    private $cardNo;

    /**
     * 赠送语（长度不得大于115）
     * @var string
     */
    private $giftMessage;

    /**
     * 署名（长度不得超过15位）
     * @var string
     */
    private $senderSign;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getGiftMessage(): string
    {
        return $this->giftMessage;
    }

    /**
     * @param string $giftMessage
     */
    public function setGiftMessage(string $giftMessage): void
    {
        $this->giftMessage = $giftMessage;
    }

    /**
     * @return string
     */
    public function getSenderSign(): string
    {
        return $this->senderSign;
    }

    /**
     * @param string $senderSign
     */
    public function setSenderSign(string $senderSign): void
    {
        $this->senderSign = $senderSign;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}