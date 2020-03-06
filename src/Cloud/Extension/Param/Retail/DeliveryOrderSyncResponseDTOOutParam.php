<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderSyncResponseDTO;

/**
 * 返回类
 * @author Baymax
 * @create Tue Jul 23 14:49:51 CST 2019
 */
class DeliveryOrderSyncResponseDTOOutParam implements \JsonSerializable {

    /**
     *
     * @var bool
     */
    private $success;

    /**
     *
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    private $message;

    /**
     *
     * @var DeliveryOrderSyncResponseDTO
     */
    private $data;

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return DeliveryOrderSyncResponseDTO
     */
    public function getData(): DeliveryOrderSyncResponseDTO
    {
        return $this->data;
    }

    /**
     * @param DeliveryOrderSyncResponseDTO $data
     */
    public function setData(DeliveryOrderSyncResponseDTO $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}