<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFields>
 */
final class CustomFieldsBuilder implements Builder
{
    /**
     * @var FieldContainer|?FieldContainerBuilder
     */
    private $fields;

    /**
     * @var TypeReference|?TypeReferenceBuilder
     */
    private $type;

    public function __construct()
    {
    }

    /**
     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @return null|TypeReference
     */
    public function getType()
    {
        return $this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type;
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
    public function withType(?TypeReference $type)
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

    /**
     * @return $this
     */
    public function withTypeBuilder(?TypeReferenceBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): CustomFields
    {
        return new CustomFieldsModel(
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields),
            ($this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type)
        );
    }

    public static function of(): CustomFieldsBuilder
    {
        return new self();
    }
}
