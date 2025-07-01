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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyPaymentSetMethodInfoCustomTypeAction>
 */
final class MyPaymentSetMethodInfoCustomTypeActionBuilder implements Builder
{
    /**

     * @var null|TypeResourceIdentifier|TypeResourceIdentifierBuilder
     */
    private $type;

    /**

     * @var null|FieldContainer|FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the <code>paymentMethodInfo</code> with <a href="/../api/projects/custom-fields">Custom Fields</a>.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        return $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the <code>paymentMethodInfo</code>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
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

    public function build(): MyPaymentSetMethodInfoCustomTypeAction
    {
        return new MyPaymentSetMethodInfoCustomTypeActionModel(
            $this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type,
            $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): MyPaymentSetMethodInfoCustomTypeActionBuilder
    {
        return new self();
    }
}
