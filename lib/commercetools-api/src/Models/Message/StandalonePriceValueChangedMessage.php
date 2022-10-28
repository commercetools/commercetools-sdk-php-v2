<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceValueChangedMessage extends Message
{
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The new value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|Money
     */
    public function getValue();

    /**
     * <p>Whether the new value was applied to the current or the staged representation of the StandalonePrice. Staged changes are stored on the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>.</p>
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
