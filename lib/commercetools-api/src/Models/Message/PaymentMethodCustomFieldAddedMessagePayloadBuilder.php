<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodCustomFieldAddedMessagePayload>
 */
final class PaymentMethodCustomFieldAddedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**
     * <p>Name of the Custom Field that was added.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The added <a href="ctp:api:type:CustomFieldValue">CustomFieldValue</a> based on the <a href="ctp:api:type:FieldType">FieldType</a>.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): PaymentMethodCustomFieldAddedMessagePayload
    {
        return new PaymentMethodCustomFieldAddedMessagePayloadModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): PaymentMethodCustomFieldAddedMessagePayloadBuilder
    {
        return new self();
    }
}
