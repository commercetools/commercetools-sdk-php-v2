<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StagedOrderSetItemShippingAddressCustomFieldAction>
 */
final class StagedOrderSetItemShippingAddressCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $addressKey;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|mixed|mixed
     */
    private $value;

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        return $this->addressKey;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $addressKey
     * @return $this
     */
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
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


    public function build(): StagedOrderSetItemShippingAddressCustomFieldAction
    {
        return new StagedOrderSetItemShippingAddressCustomFieldActionModel(
            $this->addressKey,
            $this->name,
            $this->value
        );
    }

    public static function of(): StagedOrderSetItemShippingAddressCustomFieldActionBuilder
    {
        return new self();
    }
}
