<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create Tue Mar 24 11:29:05 CST 2020
 */
class ValueCardCancelGiveRequest implements \JsonSerializable {

    /**
     * 赠送记录ID（调用方生成，取值自give赠送扩展点返回giveId）
     * @var string
     */
    private $giveId;

    /**
     * 赠送人有赞开发ID
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getGiveId(): string
    {
        return $this->giveId;
    }

    /**
     * @param string $giveId
     */
    public function setGiveId(string $giveId): void
    {
        $this->giveId = $giveId;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}