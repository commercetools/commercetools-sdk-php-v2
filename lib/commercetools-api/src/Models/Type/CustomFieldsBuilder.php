<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomFields>
 */
final class CustomFieldsBuilder implements Builder
{
    /**

     * @var null|TypeReference|TypeReferenceBuilder
     */
    private $type;

    /**

     * @var null|FieldContainer|FieldContainerBuilder
     */
    private $fields;

    /**
     * <p>Reference to the <a href="ctp:api:type:Type">Type</a> that holds the <a href="ctp:api:type:FieldDefinition">FieldDefinitions</a> for the Custom Fields.</p>
     *

     * @return null|TypeReference
     */
    public function getType()
    {
        return $this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>Object containing the Custom Fields for the <a href="/../api/projects/types#resourcetypeid">customized resource or data type</a>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields()
    {
        return $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields;
    }

    /**
     * @param ?TypeReference $type
     * @return $this
     */
    public function withType(?TypeReference $type)
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
    public function withTypeBuilder(?TypeReferenceBuilder $type)
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

    public function build(): CustomFields
    {
        return new CustomFieldsModel(
            $this->type instanceof TypeReferenceBuilder ? $this->type->build() : $this->type,
            $this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields
        );
    }

    public static function of(): CustomFieldsBuilder
    {
        return new self();
    }
}
