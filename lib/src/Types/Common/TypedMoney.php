<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Types;

interface TypedMoney extends Money {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'highPrecision' => Types\Common\HighPrecisionMoney::class,
        'centPrecision' => Types\Common\CentPrecisionMoney::class,

    ];

    const FIELD_TYPE = 'type';
    const FIELD_FRACTION_DIGITS = 'fractionDigits';

    /**
     * @return string
     */
    public function getType();

    /**
     * @return int
     */
    public function getFractionDigits();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

    /**
     * @param int $fractionDigits
     * @return $this
     */
    public function setFractionDigits(int $fractionDigits);

}
