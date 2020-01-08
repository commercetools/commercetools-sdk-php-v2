<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderSetCustomTypeAction>
 */
final class StagedOrderSetCustomTypeActionBuilder implements Builder
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
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
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

    public function build(): StagedOrderSetCustomTypeAction
    {
        return new StagedOrderSetCustomTypeActionModel(
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type),
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields)
        );
    }

    public static function of(): StagedOrderSetCustomTypeActionBuilder
    {
        return new self();
    }
}
