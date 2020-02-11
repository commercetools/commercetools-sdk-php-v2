<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\CustomFields;

interface PaymentInteractionAddedMessagePayload extends MessagePayload
{

    public const FIELD_INTERACTION = 'interaction';

    /**
     * @return null|CustomFields
     */
    public function getInteraction();

    public function setInteraction(?CustomFields $interaction): void;
}
