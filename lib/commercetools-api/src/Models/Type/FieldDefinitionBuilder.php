<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<FieldDefinition>
 */
final class FieldDefinitionBuilder implements Builder
{
    /**

     * @var null|FieldType|FieldTypeBuilder
     */
    private $type;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**

     * @var ?bool
     */
    private $required;

    /**

     * @var ?string
     */
    private $inputHint;

    /**
     * <p>Data type of the Custom Field to define.</p>
     *

     * @return null|FieldType
     */
    public function getType()
    {
        return $this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>Name of the Custom Field to define.
     * Must be unique for a given <a href="ctp:api:type:ResourceTypeId">ResourceTypeId</a>.
     * In case there is a FieldDefinition with the same <code>name</code> in another <a href="ctp:api:type:Type">Type</a>, both FieldDefinitions must have the same <code>type</code>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A human-readable label for the field.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Defines whether the field is required to have a value.</p>
     *

     * @return null|bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * <p>Defines the visual representation of the field in user interfaces like the Merchant Center.
     * It is only relevant for string-based <a href="ctp:api:type:FieldType">FieldTypes</a> like <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a> and <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a>.</p>
     *

     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * @param ?FieldType $type
     * @return $this
     */
    public function withType(?FieldType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $label
     * @return $this
     */
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param ?bool $required
     * @return $this
     */
    public function withRequired(?bool $required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @param ?string $inputHint
     * @return $this
     */
    public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;

        return $this;
    }

    /**
     * @deprecated use withType() instead
     * @return $this
     */
    public function withTypeBuilder(?FieldTypeBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @deprecated use withLabel() instead
     * @return $this
     */
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    public function build(): FieldDefinition
    {
        return new FieldDefinitionModel(
            $this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type,
            $this->name,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label,
            $this->required,
            $this->inputHint
        );
    }

    public static function of(): FieldDefinitionBuilder
    {
        return new self();
    }
}
