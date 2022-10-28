<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StandalonePriceActiveChangedMessage extends Message
{
    public const FIELD_ACTIVE = 'active';
    public const FIELD_OLD_ACTIVE = 'oldActive';

    /**
     * <p>Value of the <code>active</code> field of the StandalonePrice after the <a href="ctp:api:types:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *

     * @return null|bool
     */
    public function getActive();

    /**
     * <p>Value of the <code>active</code> field of the StandalonePrice before the <a href="ctp:api:types:StandalonePriceChangeActiveAction">Change Active</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldActive();

    /**
     * @param ?bool $active
     */
    public function setActive(?bool $active): void;

    /**
     * @param ?bool $oldActive
     */
    public function setOldActive(?bool $oldActive): void;
}
