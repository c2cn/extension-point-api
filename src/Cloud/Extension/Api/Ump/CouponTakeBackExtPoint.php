<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponTakeBackRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponTakeBackResultExtDTOOutParam;

interface CouponTakeBackExtPoint {

    public function takeBack(CouponTakeBackRequestExtDTO $couponTakeBackRequestExtDTO) : CouponTakeBackResultExtDTOOutParam;

}