<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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
     * @var null|Reference|ReferenceBuilder
     */
    private $type;

    /**
     * @var ?JsonObject
     */
    private $fields;

    /**
     * @return null|Reference
     */
    public function getType()
    {
        return $this->type instanceof ReferenceBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>A valid JSON object, based on FieldDefinition.</p>
     *
     * @return null|JsonObject
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param ?Reference $type
     * @return $this
     */
    public function withType(?Reference $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?JsonObject $fields
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
    public function withTypeBuilder(?ReferenceBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    public function build(): CustomFields
    {
        return new CustomFieldsModel(
            $this->type instanceof ReferenceBuilder ? $this->type->build() : $this->type,
            $this->fields
        );
    }

    public static function of(): CustomFieldsBuilder
    {
        return new self();
    }
}
