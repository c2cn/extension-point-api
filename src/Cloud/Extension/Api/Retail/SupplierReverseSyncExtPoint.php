<?php

namespace Com\Youzan\Cloud\Extension\Api\Retail;

use Com\Youzan\Cloud\Extension\Param\PaginatorParamDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\SupplierInfoSyncResponseDTOOutParam;

interface SupplierReverseSyncExtPoint {

    public function sync(PaginatorParamDTO $request) : SupplierInfoSyncResponseDTOOutParam;

}