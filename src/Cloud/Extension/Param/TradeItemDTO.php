<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;
use Com\Youzan\Cloud\Extension\Param\ShopCompositeId;
use StdClass;

/**
 * 交易条目
 * @author Baymax
 * @create Tue Mar 26 13:18:47 CST 2019
 */
class TradeItemDTO implements \JsonSerializable {

    /**
     * sku复合Id
     * @var SkuCompositeId
     */
    private $skuCompositeId;

    /**
     * shop复合Id
     * @var ShopCompositeId
     */
    private $shopCompositeId;

    /**
     * 
     * @var stdClass
     */
    private $extModelMap;

    /**
     * 数量
     * @var int
     */
    private $num;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 商品留言
     * @var string
     */
    private $memo;



    /**
     * @return SkuCompositeId
     */
    public function getSkuCompositeId(): SkuCompositeId
    {
        return $this->skuCompositeId;
    }

    /**
     * @param SkuCompositeId $skuCompositeId
     */
    public function setSkuCompositeId(SkuCompositeId $skuCompositeId): void
    {
        $this->skuCompositeId = $skuCompositeId;
    }

    /**
     * @return ShopCompositeId
     */
    public function getShopCompositeId(): ShopCompositeId
    {
        return $this->shopCompositeId;
    }

    /**
     * @param ShopCompositeId $shopCompositeId
     */
    public function setShopCompositeId(ShopCompositeId $shopCompositeId): void
    {
        $this->shopCompositeId = $shopCompositeId;
    }

    /**
     * @return stdClass
     */
    public function getExtModelMap(): stdClass
    {
        return $this->extModelMap;
    }

    /**
     * @param stdClass $extModelMap
     */
    public function setExtModelMap(stdClass $extModelMap): void
    {
        $this->extModelMap = $extModelMap;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getGoodsType(): int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}