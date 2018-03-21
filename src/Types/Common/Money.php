<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

interface Money extends JsonObject {
    const FIELD_CENT_AMOUNT = 'centAmount';
    const FIELD_CURRENCY_CODE = 'currencyCode';

    /**
     * @return int
     */
    public function getCentAmount();

    /**
     * @return string
     */
    public function getCurrencyCode();

    /**
     * @param int $centAmount
     * @return $this
     */
    public function setCentAmount(int $centAmount);

    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode);

}
