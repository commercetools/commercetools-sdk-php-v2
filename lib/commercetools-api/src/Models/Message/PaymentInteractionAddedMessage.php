<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;

interface PaymentInteractionAddedMessage extends Message
{
    const FIELD_INTERACTION = 'interaction';

    /**
     * @return null|CustomFields
     */
    public function getInteraction();

    public function setInteraction(?CustomFields $interaction): void;
}
