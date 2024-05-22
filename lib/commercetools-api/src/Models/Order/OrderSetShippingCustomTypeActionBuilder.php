<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetShippingCustomTypeAction>
 */
final class OrderSetShippingCustomTypeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingKey;

    /**

     * @var null|TypeResourceIdentifier|TypeResourceIdentifierBuilder
     */
    private $type;

    /**

     * @var null|FieldContainer|FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>The <code>shippingKey</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to customize. Used to specify which Shipping Method to customize
     * on a Order with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * Leave this empty to customize the one and only ShippingMethod on a <code>Single</code> ShippingMode Order.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the specified ShippingMethod with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the ShippingMethod.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the <code>shippingMethod</code>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }

    /**
     * @param ?TypeResourceIdentifier $type
     * @return $this
     */
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?FieldContainer $fields
     * @return $this
     */
    public function withFields(?FieldContainer $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @deprecated use withType() instead
     * @return $this
     */
    public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @deprecated use withFields() instead
     * @return $this
     */
    public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function build(): OrderSetShippingCustomTypeAction
    {
        return new OrderSetShippingCustomTypeActionModel(
            $this->shippingKey,
            $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type,
            $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): OrderSetShippingCustomTypeActionBuilder
    {
        return new self();
    }
}
