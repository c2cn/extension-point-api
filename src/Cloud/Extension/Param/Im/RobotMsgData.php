<?php

namespace Com\Youzan\Cloud\Extension\Param\Im;



/**
 * 
 * @author Baymax
 * @create 2019-10-08 14:29:54.0
 */
class RobotMsgData implements \JsonSerializable {

    /**
     * 消息内容
     * @var string
     */
    private $content;

    /**
     * 消息类型
     * @var string
     */
    private $msgType;

    /**
     * 扩展字段 {标准 JSON 格式}
     * @var string
     */
    private $ext;

    /**
     * 0:正常发消息; 1:无答案; 2:请求转人工
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMsgType(): string
    {
        return $this->msgType;
    }

    /**
     * @param string $msgType
     */
    public function setMsgType(string $msgType): void
    {
        $this->msgType = $msgType;
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->ext;
    }

    /**
     * @param string $ext
     */
    public function setExt(string $ext): void
    {
        $this->ext = $ext;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}