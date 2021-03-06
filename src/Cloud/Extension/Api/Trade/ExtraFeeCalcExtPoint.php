<?php

namespace Com\Youzan\Cloud\Extension\Api\Trade;

use Com\Youzan\Cloud\Extension\Param\ExtraFeeCalcParamDTO;
use Com\Youzan\Cloud\Extension\Param\ExtraFeeCalcResultDTOOutParam;

interface ExtraFeeCalcExtPoint {

    public function calc(ExtraFeeCalcParamDTO $extraFeeCalcParamDTO) : ExtraFeeCalcResultDTOOutParam;

}