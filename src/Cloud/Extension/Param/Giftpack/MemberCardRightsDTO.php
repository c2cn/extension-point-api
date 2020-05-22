<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class MemberCardRightsDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $cardId;

    /**
     * 
     * @var string
     */
    private $cardName;

    /**
     * 
     * @var bool
     */
    private $nonmemberOnly;

    /**
     * 
     * @var string
     */
    private $cardStatus;



    /**
     * @return string
     */
    public function getCardId(): string
    {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     */
    public function setCardId(string $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * @return string
     */
    public function getCardName(): string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(string $cardName): void
    {
        $this->cardName = $cardName;
    }

    /**
     * @return bool
     */
    public function getNonmemberOnly(): bool
    {
        return $this->nonmemberOnly;
    }

    /**
     * @param bool $nonmemberOnly
     */
    public function setNonmemberOnly(bool $nonmemberOnly): void
    {
        $this->nonmemberOnly = $nonmemberOnly;
    }

    /**
     * @return string
     */
    public function getCardStatus(): string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}