<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<OrderEditSetCustomTypeAction>
 */
final class OrderEditSetCustomTypeActionBuilder implements Builder
{
    /**
     * @var TypeResourceIdentifier|?TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @var ?JsonObject
     */
    private $fields;

    /**
     * <p>If set, the custom type is set to this new value.
     * If absent, the custom type and any existing custom fields are removed.</p>.
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>If set, the custom fields are set to this new value.</p>.
     *
     * @return null|JsonObject
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return $this
     */
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withFields(?JsonObject $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): OrderEditSetCustomTypeAction
    {
        return new OrderEditSetCustomTypeActionModel(
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type),
            $this->fields
        );
    }

    public static function of(): OrderEditSetCustomTypeActionBuilder
    {
        return new self();
    }
}
