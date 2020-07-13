<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetCountryAction extends StagedOrderUpdateAction
{
    public const FIELD_COUNTRY = 'country';

    /**
     * @return null|string
     */
    public function getCountry();

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;
}
