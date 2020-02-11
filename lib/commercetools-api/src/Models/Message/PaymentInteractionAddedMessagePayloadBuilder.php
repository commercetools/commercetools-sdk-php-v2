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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentInteractionAddedMessagePayload>
 */
final class PaymentInteractionAddedMessagePayloadBuilder implements Builder
{
    /**
     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $interaction;

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
            $this->interaction instanceof CustomFieldsBuilder ? $this->interaction->build() : $this->interaction
        );
    }

    public static function of(): PaymentInteractionAddedMessagePayloadBuilder
    {
        return new self();
    }
}
