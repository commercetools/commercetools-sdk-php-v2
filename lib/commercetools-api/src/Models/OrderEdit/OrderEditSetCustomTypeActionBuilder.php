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
     * @var ?JsonObject
     */
    private $fields;

    /**
     * @var TypeResourceIdentifier|?TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @return null|JsonObject
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
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
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

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
            $this->fields,
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type)
        );
    }

    public static function of(): OrderEditSetCustomTypeActionBuilder
    {
        return new self();
    }
}
