<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:23:21.0
 */
class PayRequestDTO implements \JsonSerializable {

    /**
     * 有赞商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号
     * @var string
     */
    private $outTradeNo;

    /**
     * 支付方式
     * @var string
     */
    private $tradeType;

    /**
     * 支付总金额，单位为分
     * @var string
     */
    private $payAmount;

    /**
     * 币种信息，默认为CNY
     * @var string
     */
    private $payCurrency;

    /**
     * 通知地址
     * @var string
     */
    private $notifyUrl;

    /**
     * 终端IP
     * @var string
     */
    private $clientIp;

    /**
     * 支付渠道
     * @var string
     */
    private $payChannel;

    /**
     * 场景信息
     * @var string
     */
    private $payEnv;

    /**
     * 交易起始时间
     * @var DateTime
     */
    private $timeStart;

    /**
     * 交易结束时间
     * @var DateTime
     */
    private $timeEnd;

    /**
     * 附加数据
     * @var string
     */
    private $attach;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;



    /**
     * @return string
     */
    public function getMchId(): string
    {
        return $this->mchId;
    }

    /**
     * @param string $mchId
     */
    public function setMchId(string $mchId): void
    {
        $this->mchId = $mchId;
    }

    /**
     * @return string
     */
    public function getOutTradeNo(): string
    {
        return $this->outTradeNo;
    }

    /**
     * @param string $outTradeNo
     */
    public function setOutTradeNo(string $outTradeNo): void
    {
        $this->outTradeNo = $outTradeNo;
    }

    /**
     * @return string
     */
    public function getTradeType(): string
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType(string $tradeType): void
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return string
     */
    public function getPayAmount(): string
    {
        return $this->payAmount;
    }

    /**
     * @param string $payAmount
     */
    public function setPayAmount(string $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayCurrency(): string
    {
        return $this->payCurrency;
    }

    /**
     * @param string $payCurrency
     */
    public function setPayCurrency(string $payCurrency): void
    {
        $this->payCurrency = $payCurrency;
    }

    /**
     * @return string
     */
    public function getNotifyUrl(): string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     */
    public function setNotifyUrl(string $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getPayChannel(): string
    {
        return $this->payChannel;
    }

    /**
     * @param string $payChannel
     */
    public function setPayChannel(string $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return string
     */
    public function getPayEnv(): string
    {
        return $this->payEnv;
    }

    /**
     * @param string $payEnv
     */
    public function setPayEnv(string $payEnv): void
    {
        $this->payEnv = $payEnv;
    }

    /**
     * @return DateTime
     */
    public function getTimeStart(): DateTime
    {
        return $this->timeStart;
    }

    /**
     * @param DateTime $timeStart
     */
    public function setTimeStart(DateTime $timeStart): void
    {
        $this->timeStart = $timeStart;
    }

    /**
     * @return DateTime
     */
    public function getTimeEnd(): DateTime
    {
        return $this->timeEnd;
    }

    /**
     * @param DateTime $timeEnd
     */
    public function setTimeEnd(DateTime $timeEnd): void
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * @return string
     */
    public function getAttach(): string
    {
        return $this->attach;
    }

    /**
     * @param string $attach
     */
    public function setAttach(string $attach): void
    {
        $this->attach = $attach;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}