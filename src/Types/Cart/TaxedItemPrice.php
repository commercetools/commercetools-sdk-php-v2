<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\TypedMoney;

interface TaxedItemPrice extends JsonObject {
    const FIELD_TOTAL_NET = 'totalNet';
    const FIELD_TOTAL_GROSS = 'totalGross';

    /**
     * @return TypedMoney
     */
    public function getTotalNet();

    /**
     * @return TypedMoney
     */
    public function getTotalGross();

    /**
     * @param TypedMoney $totalNet
     * @return $this
     */
    public function setTotalNet(TypedMoney $totalNet);

    /**
     * @param TypedMoney $totalGross
     * @return $this
     */
    public function setTotalGross(TypedMoney $totalGross);

}
