<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface StandalonePriceSetValidFromAction extends StandalonePriceUpdateAction
{
    public const FIELD_VALID_FROM = 'validFrom';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
}
