<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Type\CustomFields;

interface PaymentInteractionAddedMessage extends Message {
    const FIELD_INTERACTION = 'interaction';

    /**
     * @return CustomFields
     */
    public function getInteraction();

    /**
     * @param CustomFields $interaction
     * @return $this
     */
    public function setInteraction(CustomFields $interaction);

}
