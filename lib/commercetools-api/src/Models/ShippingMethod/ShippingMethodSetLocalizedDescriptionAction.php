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

interface ShippingMethodSetLocalizedDescriptionAction extends ShippingMethodUpdateAction
{
    public const FIELD_LOCALIZED_DESCRIPTION = 'localizedDescription';

    /**
     * @return null|LocalizedString
     */
    public function getLocalizedDescription();

    /**
     * @param ?LocalizedString $localizedDescription
     */
    public function setLocalizedDescription(?LocalizedString $localizedDescription): void;
}
