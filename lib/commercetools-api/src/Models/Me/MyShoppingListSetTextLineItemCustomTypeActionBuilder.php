<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use Commercetools\Base\Builder;

/**
 * @implements Builder<MyShoppingListSetTextLineItemCustomTypeAction>
 */
final class MyShoppingListSetTextLineItemCustomTypeActionBuilder implements Builder
{
    /**
     * @var FieldContainer|?FieldContainerBuilder
     */
    private $fields;

    /**
     * @var TypeResourceIdentifier|?TypeResourceIdentifierBuilder
     */
    private $type;

    /**
     * @var ?string
     */
    private $textLineItemId;

    /**
     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * @return null|string
     */
    public function getTextLineItemId()
    {
        return $this->textLineItemId;
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
    public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTextLineItemId(?string $textLineItemId)
    {
        $this->textLineItemId = $textLineItemId;

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

    /**
     * @return $this
     */
    public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): MyShoppingListSetTextLineItemCustomTypeAction
    {
        return new MyShoppingListSetTextLineItemCustomTypeActionModel(
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields),
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type),
            $this->textLineItemId
        );
    }

    public static function of(): MyShoppingListSetTextLineItemCustomTypeActionBuilder
    {
        return new self();
    }
}
