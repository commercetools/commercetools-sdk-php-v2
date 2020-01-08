<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerGroupSetCustomTypeAction>
 */
final class CustomerGroupSetCustomTypeActionBuilder implements Builder
{
    /**
     * @var TypeResourceIdentifier|?TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @var FieldContainer|?FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>If absent, the custom type and any existing CustomFields are removed.</p>.
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>A valid JSON object, based on the FieldDefinitions of the Type.
     * Sets the custom fields to this value.</p>.
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
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
    public function withFields(?FieldContainer $fields)
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

    /**
     * @return $this
     */
    public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;

        return $this;
    }

    public function build(): CustomerGroupSetCustomTypeAction
    {
        return new CustomerGroupSetCustomTypeActionModel(
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type),
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields)
        );
    }

    public static function of(): CustomerGroupSetCustomTypeActionBuilder
    {
        return new self();
    }
}
