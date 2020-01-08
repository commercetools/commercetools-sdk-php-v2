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

/**
 * @implements Builder<FieldDefinition>
 */
final class FieldDefinitionBuilder implements Builder
{
    /**
     * @var FieldType|?FieldTypeBuilder
     */
    private $type;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
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
     * <p>Describes the type of the field.</p>.
     *
     * @return null|FieldType
     */
    public function getType()
    {
        return $this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type;
    }

    /**
     * <p>The name of the field.
     * The name must be between two and 36 characters long and can contain the ASCII letters A to Z in lowercase or uppercase, digits, underscores (<code>_</code>) and the hyphen-minus (<code>-</code>).
     * The name must be unique for a given resource type ID.
     * In case there is a field with the same name in another type it has to have the same FieldType also.</p>.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A human-readable label for the field.</p>.
     *
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Whether the field is required to have a value.</p>.
     *
     * @return null|bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * <p>Provides a visual representation type for this field.
     * It is only relevant for string-based field types like StringType and LocalizedStringType.</p>.
     *
     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * @return $this
     */
    public function withType(?FieldType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return $this
     */
    public function withRequired(?bool $required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return $this
     */
    public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTypeBuilder(?FieldTypeBuilder $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
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
            ($this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type),
            $this->name,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            $this->required,
            $this->inputHint
        );
    }

    public static function of(): FieldDefinitionBuilder
    {
        return new self();
    }
}
