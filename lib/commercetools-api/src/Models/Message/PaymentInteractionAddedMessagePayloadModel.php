<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentInteractionAddedMessagePayloadModel extends JsonObjectModel implements PaymentInteractionAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentInteractionAdded';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?CustomFields
     */
    protected $interaction;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CustomFields $interaction = null
    ) {
        $this->interaction = $interaction;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The interface interaction that was added to the <a href="ctp:api:type:Payment">Payment</a>.</p>
     *

     * @return null|CustomFields
     */
    public function getInteraction()
    {
        if (is_null($this->interaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_INTERACTION);
            if (is_null($data)) {
                return null;
            }

            $this->interaction = CustomFieldsModel::of($data);
        }

        return $this->interaction;
    }


    /**
     * @param ?CustomFields $interaction
     */
    public function setInteraction(?CustomFields $interaction): void
    {
        $this->interaction = $interaction;
    }
}
