<?php

namespace Com\Youzan\Cloud\Extension\Api\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponFreezeRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponFreezeResultExtDTOOutParam;

interface CouponFreezeExtPoint {

    public function freeze(CouponFreezeRequestExtDTO $freezenRequest) : CouponFreezeResultExtDTOOutParam;

}