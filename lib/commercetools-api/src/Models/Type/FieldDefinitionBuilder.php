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
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $inputHint;

    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $label;

    /**
     * @var FieldType|?FieldTypeBuilder
     */
    private $type;

    /**
     * @var ?bool
     */
    private $required;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getInputHint()
    {
        return $this->inputHint;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * @return null|FieldType
     */
    public function getType()
    {
        return $this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type;
    }

    /**
     * @return null|bool
     */
    public function getRequired()
    {
        return $this->required;
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
    public function withInputHint(?string $inputHint)
    {
        $this->inputHint = $inputHint;

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
    public function withType(?FieldType $type)
    {
        $this->type = $type;

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
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

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

    public function build(): FieldDefinition
    {
        return new FieldDefinitionModel(
            $this->name,
            $this->inputHint,
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            ($this->type instanceof FieldTypeBuilder ? $this->type->build() : $this->type),
            $this->required
        );
    }

    public static function of(): FieldDefinitionBuilder
    {
        return new self();
    }
}
