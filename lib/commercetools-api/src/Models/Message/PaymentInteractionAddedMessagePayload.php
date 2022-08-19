<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface PaymentInteractionAddedMessagePayload extends MessagePayload
{
    public const FIELD_INTERACTION = 'interaction';

    /**
     * <p>The interface interaction that was added to the <a href="ctp:api:type:Payment">Payment</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getInteraction();

    /**
     * @param ?CustomFields $interaction
     */
    public function setInteraction(?CustomFields $interaction): void;
}
