<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCountryAction extends StagedOrderUpdateAction
{
    const FIELD_COUNTRY = 'country';

    /**
     * @return null|string
     */
    public function getCountry();

    public function setCountry(?string $country): void;
}
