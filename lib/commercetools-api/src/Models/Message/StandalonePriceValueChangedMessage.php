<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceValueChangedMessage extends Message
{
    public const FIELD_VALUE = 'value';
    public const FIELD_STAGED = 'staged';
    public const FIELD_OLD_VALUE = 'oldValue';

    /**
     * <p>The new value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.</p>
     *

     * @return null|TypedMoney
     */
    public function getValue();

    /**
     * <p>Whether the new value was applied to the current or the staged representation of the StandalonePrice. Staged changes are stored on the <a href="ctp:api:type:StagedStandalonePrice">StagedStandalonePrice</a>.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The old value of the updated <a href="ctp:api:type:StandalonePrice">StandalonePrice</a>.
     * Present on Messages created after 3 February 2023. Optional for backwards compatibility.</p>
     *

     * @return null|TypedMoney
     */
    public function getOldValue();

    /**
     * @param ?TypedMoney $value
     */
    public function setValue(?TypedMoney $value): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?TypedMoney $oldValue
     */
    public function setOldValue(?TypedMoney $oldValue): void;
}
