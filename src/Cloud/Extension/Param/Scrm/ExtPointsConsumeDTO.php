<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Sep 30 14:22:43 CST 2018
 */
class ExtPointsConsumeDTO implements \JsonSerializable {

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extraInfo;

    /**
     * 积分消耗来源
     * @var int
     */
    private $consumeSource;

    /**
     * 积分消耗描述
     * @var string
     */
    private $description;

    /**
     * 业务唯一标识
     * @var string
     */
    private $bizValue;

    /**
     * 账号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;



    /**
     * @return stdClass
     */
    public function getExtraInfo(): stdClass
    {
        return $this->extraInfo;
    }

    /**
     * @param stdClass $extraInfo
     */
    public function setExtraInfo(stdClass $extraInfo): void
    {
        $this->extraInfo = $extraInfo;
    }

    /**
     * @return int
     */
    public function getConsumeSource(): int
    {
        return $this->consumeSource;
    }

    /**
     * @param int $consumeSource
     */
    public function setConsumeSource(int $consumeSource): void
    {
        $this->consumeSource = $consumeSource;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getBizValue(): string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}