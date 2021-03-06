<?php

namespace Com\Youzan\Cloud\Extension\Api\Ump;

use Com\Youzan\Cloud\Extension\Param\Coupon\UserCouponsFindRequestExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\UserCouponsFindResultExtDTOOutParam;

interface UserCouponsFindExtPoint {

    public function find(UserCouponsFindRequestExtDTO $userCouponsFindRequestExtDTO) : UserCouponsFindResultExtDTOOutParam;

}