<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerIdentityDTO;
use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create 2018-10-12 14:13:44.0
 */
class ExtCustomerLevelListQueryDTO implements \JsonSerializable {

    /**
     * 用户识别信息
     * @var ExtCustomerIdentityDTO
     */
    private $extCustomerIdentityDTO;

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return ExtCustomerIdentityDTO
     */
    public function getExtCustomerIdentityDTO(): ExtCustomerIdentityDTO
    {
        return $this->extCustomerIdentityDTO;
    }

    /**
     * @param ExtCustomerIdentityDTO $extCustomerIdentityDTO
     */
    public function setExtCustomerIdentityDTO(ExtCustomerIdentityDTO $extCustomerIdentityDTO): void
    {
        $this->extCustomerIdentityDTO = $extCustomerIdentityDTO;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}