<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponTakeRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponTakeResultExtDTOOutParam;

interface CouponTakeExtPoint {

    public function take(CouponTakeRequestExtDTO $couponTakeRequestExtDTO) : CouponTakeResultExtDTOOutParam;

}