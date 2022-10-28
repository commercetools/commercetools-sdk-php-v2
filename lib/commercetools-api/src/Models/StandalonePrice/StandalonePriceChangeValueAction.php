<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceChangeValueAction extends StandalonePriceUpdateAction
{
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>If set to <code>true</code> the update action applies to the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>. If set to <code>false</code>, the update action applies to the current <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
