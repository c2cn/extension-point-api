<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\ExtraPromotionCalcParamDTO;
use Com\Youzan\Cloud\Extension\Param\ExtraPromotionCalcResultDTOOutParam;

interface ExtraPromotionCalcExtPoint {

    public function calc(ExtraPromotionCalcParamDTO $extraPromotionCalcParamDTO) : ExtraPromotionCalcResultDTOOutParam;

}