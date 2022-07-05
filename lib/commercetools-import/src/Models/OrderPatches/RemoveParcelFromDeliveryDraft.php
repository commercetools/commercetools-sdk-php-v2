<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RemoveParcelFromDeliveryDraft extends JsonObject
{
    public const FIELD_PARCEL_ID = 'parcelId';

    /**

     * @return null|string
     */
    public function getParcelId();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;
}
