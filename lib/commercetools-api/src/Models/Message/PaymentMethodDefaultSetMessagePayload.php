<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentMethodDefaultSetMessagePayload extends MessagePayload
{
    public const FIELD_DEFAULT = 'default';
    public const FIELD_OLD_DEFAULT = 'oldDefault';

    /**
     * <p>Default Payment Method after the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
     *

     * @return null|bool
     */
    public function getDefault();

    /**
     * <p>Default Payment Method before the <a href="ctp:api:type:PaymentMethodSetDefaultAction">Set Default</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldDefault();

    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void;

    /**
     * @param ?bool $oldDefault
     */
    public function setOldDefault(?bool $oldDefault): void;
}
