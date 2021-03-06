<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\CustomerStandardAttributes;

/**
 * 
 * @author Baymax
 * @create Wed Apr 24 10:11:52 CST 2019
 */
class CustomerUpdateDTO implements \JsonSerializable {

    /**
     * 三方平台的商家id 同kdtid
     * @var integer
     */
    private $platform_business_id;

    /**
     * 用户标准属性
     * @var CustomerStandardAttributes
     */
    private $standard_attributes;



    /**
     * @return integer
     */
    public function getPlatform_business_id(): integer
    {
        return $this->platform_business_id;
    }

    /**
     * @param integer $platform_business_id
     */
    public function setPlatform_business_id(integer $platform_business_id): void
    {
        $this->platform_business_id = $platform_business_id;
    }

    /**
     * @return CustomerStandardAttributes
     */
    public function getStandard_attributes(): CustomerStandardAttributes
    {
        return $this->standard_attributes;
    }

    /**
     * @param CustomerStandardAttributes $standard_attributes
     */
    public function setStandard_attributes(CustomerStandardAttributes $standard_attributes): void
    {
        $this->standard_attributes = $standard_attributes;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}