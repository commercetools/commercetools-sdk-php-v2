<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Type\CustomFields;

class PaymentInteractionAddedMessageModel extends MessageModel implements PaymentInteractionAddedMessage {
    const DISCRIMINATOR_VALUE = 'PaymentInteractionAdded';

    /**
     * @var CustomFields
     */
    protected $interaction;

    /**
     * @return CustomFields
     */
    public function getInteraction()
    {
        if (is_null($this->interaction)) {
            $value = $this->raw(PaymentInteractionAddedMessage::FIELD_INTERACTION);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->interaction = $value;
        }
        return $this->interaction;
    }

    /**
     * @param CustomFields $interaction
     * @return $this
     */
    public function setInteraction(CustomFields $interaction)
    {
        $this->interaction = $interaction;

        return $this;
    }

}
