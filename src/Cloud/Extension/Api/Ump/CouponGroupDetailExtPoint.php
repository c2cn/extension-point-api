<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupDetailRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupDetailResultExtDTOOutParam;

interface CouponGroupDetailExtPoint {

    public function get(CouponGroupDetailRequestExtDTO $couponGroupDetailRequestExtDTO) : CouponGroupDetailResultExtDTOOutParam;

}