<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\RefundPayParamDTO;
use Com\Youzan\Cloud\Extension\Param\RefundPayResultDTOOutParam;

interface RefundPayExtPoint {

    public function refund(RefundPayParamDTO $refundPayExtPoint) : RefundPayResultDTOOutParam;

}