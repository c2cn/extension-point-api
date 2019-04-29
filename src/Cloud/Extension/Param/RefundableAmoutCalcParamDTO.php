<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create Tue Oct 09 10:05:17 CST 2018
 */
class RefundableAmoutCalcParamDTO implements \JsonSerializable {

    /**
     * 幂等号
     * @var string
     */
    private $requestId;

    /**
     * 订单号
     * @var string
     */
    private $orderNO;

    /**
     * 商家标识
     * @var integer
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getOrderNO(): string
    {
        return $this->orderNO;
    }

    /**
     * @param string $orderNO
     */
    public function setOrderNO(string $orderNO): void
    {
        $this->orderNO = $orderNO;
    }

    /**
     * @return integer
     */
    public function getKdtId(): integer
    {
        return $this->kdtId;
    }

    /**
     * @param integer $kdtId
     */
    public function setKdtId(integer $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}