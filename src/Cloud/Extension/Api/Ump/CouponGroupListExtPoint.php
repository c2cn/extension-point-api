<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupListRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupListResultExtDTOOutParam;

interface CouponGroupListExtPoint {

    public function get(CouponGroupListRequestExtDTO $couponGroupListRequestExtDTO) : CouponGroupListResultExtDTOOutParam;

}