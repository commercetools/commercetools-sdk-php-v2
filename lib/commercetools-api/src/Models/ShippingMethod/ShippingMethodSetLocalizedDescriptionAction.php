<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetLocalizedDescriptionAction extends ShippingMethodUpdateAction
{
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';

    /**
     * @return null|string
     */
    public function getLocalizedDescription();

    public function setLocalizedDescription(?string $localizedDescription): void;
}
