<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonObject;

interface SubRate extends JsonObject
{
    const FIELD_NAME = 'name';
    const FIELD_AMOUNT = 'amount';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getAmount();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount(int $amount);

}
