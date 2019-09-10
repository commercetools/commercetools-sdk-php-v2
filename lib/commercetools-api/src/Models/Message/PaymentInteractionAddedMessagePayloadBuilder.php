<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<PaymentInteractionAddedMessagePayload>
 */
final class PaymentInteractionAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var CustomFields|?CustomFieldsBuilder
     */
    private $interaction;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|CustomFields
     */
    public function getInteraction()
    {
        return $this->interaction instanceof CustomFieldsBuilder ? $this->interaction->build() : $this->interaction;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInteraction(?CustomFields $interaction)
    {
        $this->interaction = $interaction;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInteractionBuilder(?CustomFieldsBuilder $interaction)
    {
        $this->interaction = $interaction;

        return $this;
    }

    public function build(): PaymentInteractionAddedMessagePayload
    {
        return new PaymentInteractionAddedMessagePayloadModel(
            $this->type,
            ($this->interaction instanceof CustomFieldsBuilder ? $this->interaction->build() : $this->interaction)
        );
    }

    public static function of(): PaymentInteractionAddedMessagePayloadBuilder
    {
        return new self();
    }
}
