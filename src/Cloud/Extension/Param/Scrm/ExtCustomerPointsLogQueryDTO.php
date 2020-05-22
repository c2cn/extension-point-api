<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Sun Nov 04 21:41:34 CST 2018
 */
class ExtCustomerPointsLogQueryDTO implements \JsonSerializable {

    /**
     * 帐号信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;

    /**
     * 页码
     * @var int
     */
    private $page;

    /**
     * 单页条数，限制50
     * @var int
     */
    private $pageSize;

    /**
     * 0:全部 1:收入 2:支出 3:冻结
     * @var int
     */
    private $type;

    /**
     * 开始时间戳（秒级）
     * @var int
     */
    private $beginTime;

    /**
     * 结束时间戳（秒级）
     * @var int
     */
    private $endTime;



    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getBeginTime(): int
    {
        return $this->beginTime;
    }

    /**
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime): void
    {
        $this->beginTime = $beginTime;
    }

    /**
     * @return int
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     */
    public function setEndTime(int $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}