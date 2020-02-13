<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:36:31.0
 */
class ThirdpartyBuyerVoucherPQExtPointRequest implements \JsonSerializable {

    /**
     * 店铺kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var int
     */
    private $userId;

    /**
     * 外部券活动id列表
     * @var array
     */
    private $activityIds;

    /**
     * 优惠券状态 0. 全部 1. 生效 &#x3D; 未使用 and 未过期,  2. 已使用  3. 已过期 &#x3D; 未使用 and 已过期  4. 已失效 &#x3D; 已使用 or 已过期 5. 已锁定
     * @var int
     */
    private $status;

    /**
     * 页码
     * @var int
     */
    private $pageNum;

    /**
     * 每页大小
     * @var int
     */
    private $pageSize;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;



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

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return array
     */
    public function getActivityIds(): array
    {
        return $this->activityIds;
    }

    /**
     * @param array $activityIds
     */
    public function setActivityIds(array $activityIds): void
    {
        $this->activityIds = $activityIds;
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

    /**
     * @return int
     */
    public function getPageNum(): int
    {
        return $this->pageNum;
    }

    /**
     * @param int $pageNum
     */
    public function setPageNum(int $pageNum): void
    {
        $this->pageNum = $pageNum;
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
    public function getVersionNo(): int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}