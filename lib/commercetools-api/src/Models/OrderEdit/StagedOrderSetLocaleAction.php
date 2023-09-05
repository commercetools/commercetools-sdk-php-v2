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

interface StagedOrderSetLocaleAction extends StagedOrderUpdateAction
{
    public const FIELD_LOCALE = 'locale';

    /**
     * <p>Value to set.
     * Must be one of the <a href="ctp:api:type:Project">Project</a>'s languages.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;
}
