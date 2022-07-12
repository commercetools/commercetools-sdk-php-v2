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
     * <p>Serves as value of the <code>custom</code> field on a resource or data type customized with a <a href="ctp:api:type:Type">Type</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getInteraction();

    /**
     * @param ?CustomFields $interaction
     */
    public function setInteraction(?CustomFields $interaction): void;
}
