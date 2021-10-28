<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Location extends JsonObject
{
    public const FIELD_COUNTRY = 'country';
    public const FIELD_STATE = 'state';

    /**
     * <p>Country code of the geographic location.</p>
     *
     * @return null|string
     */
    public function getCountry();

    /**
     * <p>State within the country.</p>
     *
     * @return null|string
     */
    public function getState();

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
