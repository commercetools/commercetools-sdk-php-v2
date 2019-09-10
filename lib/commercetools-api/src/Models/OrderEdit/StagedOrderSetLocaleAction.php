<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetLocaleAction extends StagedOrderUpdateAction
{
    const FIELD_LOCALE = 'locale';

    /**
     * @return null|string
     */
    public function getLocale();

    public function setLocale(?string $locale): void;
}
