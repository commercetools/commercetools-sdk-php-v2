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
 * @implements Builder<TypeChangeFieldDefinitionLabelAction>
 */
final class TypeChangeFieldDefinitionLabelActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $fieldName;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to update.</p>
     *
     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * @param ?string $fieldName
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

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
     * @deprecated use withLabel() instead
     * @return $this
     */
    public function withLabelBuilder(?LocalizedStringBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    public function build(): TypeChangeFieldDefinitionLabelAction
    {
        return new TypeChangeFieldDefinitionLabelActionModel(
            $this->fieldName,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label
        );
    }

    public static function of(): TypeChangeFieldDefinitionLabelActionBuilder
    {
        return new self();
    }
}
