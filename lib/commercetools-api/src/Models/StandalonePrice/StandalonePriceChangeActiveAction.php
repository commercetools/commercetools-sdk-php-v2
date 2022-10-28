<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceChangeActiveAction extends StandalonePriceUpdateAction
{
    public const FIELD_ACTIVE = 'active';

    /**
     * <p>New value to set for the <code>active</code> field of the <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;
}
