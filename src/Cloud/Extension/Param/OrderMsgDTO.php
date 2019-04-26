<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\OrderItemMsgDTO;
use Com\Youzan\Cloud\Extension\Param\LogisticsDTO;
use Com\Youzan\Cloud\Extension\Param\PromotionDTO;
use Com\Youzan\Cloud\Extension\Param\PriceDTO;
use Com\Youzan\Cloud\Extension\Param\SellerDTO;
use Com\Youzan\Cloud\Extension\Param\BuyerDTO;

/**
 * 
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class OrderMsgDTO implements \JsonSerializable {

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;

    /**
     * 关闭类型值
     * @var integer
     */
    private $closeTypeValue;

    /**
     * 子订单信息
     * @var array
     */
    private $orderItemDTOGroup;

    /**
     * 标记
     * @var stdClass
     */
    private $tags;

    /**
     * 订单备注
     * @var string
     */
    private $memo;

    /**
     * 关闭原因
     * @var string
     */
    private $closeReason;

    /**
     * 关闭类型
     * @var string
     */
    private $closeType;

    /**
     * 超期时间
     * @var date
     */
    private $expiredTime;

    /**
     * 订单取消时间
     * @var date
     */
    private $closeTime;

    /**
     * 订单生效时间
     * @var date
     */
    private $effectTime;

    /**
     * 订单更新时间
     * @var date
     */
    private $updateTime;

    /**
     * 订单完成时间
     * @var date
     */
    private $successTime;

    /**
     * 订单收货时间
     * @var date
     */
    private $receiveTime;

    /**
     * 商家确认时间
     * @var date
     */
    private $confirmTime;

    /**
     * 发货时间
     * @var date
     */
    private $shipTime;

    /**
     * 支付方式
     * @var string
     */
    private $payWay;

    /**
     * 订单支付时间
     * @var date
     */
    private $payTime;

    /**
     * 订单创建时间
     * @var date
     */
    private $createTime;

    /**
     * 地址信息
     * @var LogisticsDTO
     */
    private $logisticsDTO;

    /**
     * 优惠信息
     * @var PromotionDTO
     */
    private $promotion;

    /**
     * 交易来源
     * @var string
     */
    private $source;

    /**
     * 阶段
     * @var integer
     */
    private $phase;

    /**
     * 价格信息
     * @var PriceDTO
     */
    private $priceDTO;

    /**
     * 组件状态
     * @var string
     */
    private $consumeStatus;

    /**
     * 销售模式
     * @var integer
     */
    private $salesModelType;

    /**
     * 活动类型
     * @var integer
     */
    private $activityType;

    /**
     * 支付类型
     * @var integer
     */
    private $payType;

    /**
     * 商品类型
     * @var integer
     */
    private $goodsType;

    /**
     * 订单状态
     * @var string
     */
    private $orderStatus;

    /**
     * 订单交易类型
     * @var string
     */
    private $orderType;

    /**
     * 垂直行业大类
     * @var string
     */
    private $bizCategory;

    /**
     * 卖家信息
     * @var SellerDTO
     */
    private $sellerDTO;

    /**
     * 买家信息
     * @var BuyerDTO
     */
    private $buyerDTO;

    /**
     * 支付收单号
     * @var string
     */
    private $payId;

    /**
     * 合同id
     * @var integer
     */
    private $contractId;

    /**
     * 订单渠道来源
     * @var string
     */
    private $channelType;

    /**
     * 外部业务单号
     * @var string
     */
    private $outBizNo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单id(整数类型)
     * @var integer
     */
    private $id;



    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return integer
     */
    public function getCloseTypeValue(): integer
    {
        return $this->closeTypeValue;
    }

    /**
     * @param integer $closeTypeValue
     */
    public function setCloseTypeValue(integer $closeTypeValue): void
    {
        $this->closeTypeValue = $closeTypeValue;
    }

    /**
     * @return array
     */
    public function getOrderItemDTOGroup(): array
    {
        return $this->orderItemDTOGroup;
    }

    /**
     * @param array $orderItemDTOGroup
     */
    public function setOrderItemDTOGroup(array $orderItemDTOGroup): void
    {
        $this->orderItemDTOGroup = $orderItemDTOGroup;
    }

    /**
     * @return stdClass
     */
    public function getTags(): stdClass
    {
        return $this->tags;
    }

    /**
     * @param stdClass $tags
     */
    public function setTags(stdClass $tags): void
    {
        $this->tags = $tags;
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

    /**
     * @return string
     */
    public function getCloseReason(): string
    {
        return $this->closeReason;
    }

    /**
     * @param string $closeReason
     */
    public function setCloseReason(string $closeReason): void
    {
        $this->closeReason = $closeReason;
    }

    /**
     * @return string
     */
    public function getCloseType(): string
    {
        return $this->closeType;
    }

    /**
     * @param string $closeType
     */
    public function setCloseType(string $closeType): void
    {
        $this->closeType = $closeType;
    }

    /**
     * @return date
     */
    public function getExpiredTime(): date
    {
        return $this->expiredTime;
    }

    /**
     * @param date $expiredTime
     */
    public function setExpiredTime(date $expiredTime): void
    {
        $this->expiredTime = $expiredTime;
    }

    /**
     * @return date
     */
    public function getCloseTime(): date
    {
        return $this->closeTime;
    }

    /**
     * @param date $closeTime
     */
    public function setCloseTime(date $closeTime): void
    {
        $this->closeTime = $closeTime;
    }

    /**
     * @return date
     */
    public function getEffectTime(): date
    {
        return $this->effectTime;
    }

    /**
     * @param date $effectTime
     */
    public function setEffectTime(date $effectTime): void
    {
        $this->effectTime = $effectTime;
    }

    /**
     * @return date
     */
    public function getUpdateTime(): date
    {
        return $this->updateTime;
    }

    /**
     * @param date $updateTime
     */
    public function setUpdateTime(date $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return date
     */
    public function getSuccessTime(): date
    {
        return $this->successTime;
    }

    /**
     * @param date $successTime
     */
    public function setSuccessTime(date $successTime): void
    {
        $this->successTime = $successTime;
    }

    /**
     * @return date
     */
    public function getReceiveTime(): date
    {
        return $this->receiveTime;
    }

    /**
     * @param date $receiveTime
     */
    public function setReceiveTime(date $receiveTime): void
    {
        $this->receiveTime = $receiveTime;
    }

    /**
     * @return date
     */
    public function getConfirmTime(): date
    {
        return $this->confirmTime;
    }

    /**
     * @param date $confirmTime
     */
    public function setConfirmTime(date $confirmTime): void
    {
        $this->confirmTime = $confirmTime;
    }

    /**
     * @return date
     */
    public function getShipTime(): date
    {
        return $this->shipTime;
    }

    /**
     * @param date $shipTime
     */
    public function setShipTime(date $shipTime): void
    {
        $this->shipTime = $shipTime;
    }

    /**
     * @return string
     */
    public function getPayWay(): string
    {
        return $this->payWay;
    }

    /**
     * @param string $payWay
     */
    public function setPayWay(string $payWay): void
    {
        $this->payWay = $payWay;
    }

    /**
     * @return date
     */
    public function getPayTime(): date
    {
        return $this->payTime;
    }

    /**
     * @param date $payTime
     */
    public function setPayTime(date $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return date
     */
    public function getCreateTime(): date
    {
        return $this->createTime;
    }

    /**
     * @param date $createTime
     */
    public function setCreateTime(date $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return LogisticsDTO
     */
    public function getLogisticsDTO(): LogisticsDTO
    {
        return $this->logisticsDTO;
    }

    /**
     * @param LogisticsDTO $logisticsDTO
     */
    public function setLogisticsDTO(LogisticsDTO $logisticsDTO): void
    {
        $this->logisticsDTO = $logisticsDTO;
    }

    /**
     * @return PromotionDTO
     */
    public function getPromotion(): PromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param PromotionDTO $promotion
     */
    public function setPromotion(PromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * @return integer
     */
    public function getPhase(): integer
    {
        return $this->phase;
    }

    /**
     * @param integer $phase
     */
    public function setPhase(integer $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * @return PriceDTO
     */
    public function getPriceDTO(): PriceDTO
    {
        return $this->priceDTO;
    }

    /**
     * @param PriceDTO $priceDTO
     */
    public function setPriceDTO(PriceDTO $priceDTO): void
    {
        $this->priceDTO = $priceDTO;
    }

    /**
     * @return string
     */
    public function getConsumeStatus(): string
    {
        return $this->consumeStatus;
    }

    /**
     * @param string $consumeStatus
     */
    public function setConsumeStatus(string $consumeStatus): void
    {
        $this->consumeStatus = $consumeStatus;
    }

    /**
     * @return integer
     */
    public function getSalesModelType(): integer
    {
        return $this->salesModelType;
    }

    /**
     * @param integer $salesModelType
     */
    public function setSalesModelType(integer $salesModelType): void
    {
        $this->salesModelType = $salesModelType;
    }

    /**
     * @return integer
     */
    public function getActivityType(): integer
    {
        return $this->activityType;
    }

    /**
     * @param integer $activityType
     */
    public function setActivityType(integer $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return integer
     */
    public function getPayType(): integer
    {
        return $this->payType;
    }

    /**
     * @param integer $payType
     */
    public function setPayType(integer $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return integer
     */
    public function getGoodsType(): integer
    {
        return $this->goodsType;
    }

    /**
     * @param integer $goodsType
     */
    public function setGoodsType(integer $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string $orderStatus
     */
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getBizCategory(): string
    {
        return $this->bizCategory;
    }

    /**
     * @param string $bizCategory
     */
    public function setBizCategory(string $bizCategory): void
    {
        $this->bizCategory = $bizCategory;
    }

    /**
     * @return SellerDTO
     */
    public function getSellerDTO(): SellerDTO
    {
        return $this->sellerDTO;
    }

    /**
     * @param SellerDTO $sellerDTO
     */
    public function setSellerDTO(SellerDTO $sellerDTO): void
    {
        $this->sellerDTO = $sellerDTO;
    }

    /**
     * @return BuyerDTO
     */
    public function getBuyerDTO(): BuyerDTO
    {
        return $this->buyerDTO;
    }

    /**
     * @param BuyerDTO $buyerDTO
     */
    public function setBuyerDTO(BuyerDTO $buyerDTO): void
    {
        $this->buyerDTO = $buyerDTO;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return integer
     */
    public function getContractId(): integer
    {
        return $this->contractId;
    }

    /**
     * @param integer $contractId
     */
    public function setContractId(integer $contractId): void
    {
        $this->contractId = $contractId;
    }

    /**
     * @return string
     */
    public function getChannelType(): string
    {
        return $this->channelType;
    }

    /**
     * @param string $channelType
     */
    public function setChannelType(string $channelType): void
    {
        $this->channelType = $channelType;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
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
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(integer $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}