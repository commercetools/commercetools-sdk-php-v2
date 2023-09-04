<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerAddressCustomTypeRemovedMessagePayload extends MessagePayload
{
    public const FIELD_PREVIOUS_TYPE_ID = 'previousTypeId';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that has been removed.</p>
     * <p>Absent when there has not been a Custom Type before.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId();

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void;
}
