<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;

use Com\Youzan\Cloud\Extension\Param\Im\RobotMsgData;

/**
 * 返回类
 * @author Baymax
 * @create 2019-10-08 14:29:54.0
 */
class RobotMsgDataOutParam implements \JsonSerializable {

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
     * @var RobotMsgData
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
     * @return RobotMsgData
     */
    public function getData(): RobotMsgData
    {
        return $this->data;
    }

    /**
     * @param RobotMsgData $data
     */
    public function setData(RobotMsgData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}