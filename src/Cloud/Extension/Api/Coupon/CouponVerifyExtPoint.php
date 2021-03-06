<?php

namespace Com\Youzan\Cloud\Extension\Api\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponVerifyRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponVerifyResultExtDTOOutParam;

interface CouponVerifyExtPoint {

    public function verify(CouponVerifyRequestExtDTO $couponVerifyRequest) : CouponVerifyResultExtDTOOutParam;

}