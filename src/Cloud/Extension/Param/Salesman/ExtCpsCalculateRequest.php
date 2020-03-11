<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtPromotionDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Thu Dec 12 09:29:19 CST 2019
 */
class ExtCpsCalculateRequest implements \JsonSerializable {

    /**
     * 店铺名
     * @var string
     */
    private $shopName;

    /**
     * 分销员yzopenid
     * @var string
     */
    private $dsOpenId;

    /**
     * 邀请方分销员yzopenid   * 若没有则为空
     * @var string
     */
    private $fromDsOpenId;

    /**
     * 买家yzopenid
     * @var string
     */
    private $ctOpenId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单总价 &#x3D; realPay + postage
     * @var int
     */
    private $pay;

    /**
     * 订单实付金额 （分）： 不包含邮费
     * @var int
     */
    private $realPay;

    /**
     * 邮费（分）
     * @var int
     */
    private $postage;

    /**
     * 是否包邮
     * @var int
     */
    private $isFreePostage;

    /**
     * 订单商品信息
     * @var array
     */
    private $items;

    /**
     * 优惠明细
     * @var ExtPromotionDTO
     */
    private $promotion;

    /**
     * 
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return string
     */
    public function getDsOpenId(): string
    {
        return $this->dsOpenId;
    }

    /**
     * @param string $dsOpenId
     */
    public function setDsOpenId(string $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return string
     */
    public function getFromDsOpenId(): string
    {
        return $this->fromDsOpenId;
    }

    /**
     * @param string $fromDsOpenId
     */
    public function setFromDsOpenId(string $fromDsOpenId): void
    {
        $this->fromDsOpenId = $fromDsOpenId;
    }

    /**
     * @return string
     */
    public function getCtOpenId(): string
    {
        return $this->ctOpenId;
    }

    /**
     * @param string $ctOpenId
     */
    public function setCtOpenId(string $ctOpenId): void
    {
        $this->ctOpenId = $ctOpenId;
    }

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
     * @return int
     */
    public function getPay(): int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(int $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return int
     */
    public function getRealPay(): int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(int $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return int
     */
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getIsFreePostage(): int
    {
        return $this->isFreePostage;
    }

    /**
     * @param int $isFreePostage
     */
    public function setIsFreePostage(int $isFreePostage): void
    {
        $this->isFreePostage = $isFreePostage;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return ExtPromotionDTO
     */
    public function getPromotion(): ExtPromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param ExtPromotionDTO $promotion
     */
    public function setPromotion(ExtPromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}