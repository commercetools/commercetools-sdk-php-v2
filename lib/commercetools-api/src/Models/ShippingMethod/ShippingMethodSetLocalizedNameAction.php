<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ShippingMethodSetLocalizedNameAction extends ShippingMethodUpdateAction
{
    public const FIELD_LOCALIZED_NAME = 'localizedName';

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedName();

    /**
     * @param ?LocalizedString $localizedName
     */
    public function setLocalizedName(?LocalizedString $localizedName): void;
}
