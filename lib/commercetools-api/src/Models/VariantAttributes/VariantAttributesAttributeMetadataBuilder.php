<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantAttributesAttributeMetadata>
 */
final class VariantAttributesAttributeMetadataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**

     * @var ?string
     */
    private $type;

    /**
     * <p>Name of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Localized label of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Subject to <a href="/../api/projects/productProjections#locales">locale projection</a> if <code>localeProjection</code> is specified.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:AttributeType">AttributeType</a>, for example <code>boolean</code>, <code>text</code>, <code>ltext</code>, <code>enum</code>, <code>lenum</code>, <code>number</code>, <code>money</code>, <code>date</code>, <code>time</code>, <code>datetime</code>, <code>reference</code>, <code>set</code>, or <code>nested</code>.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
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
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
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

    public function build(): VariantAttributesAttributeMetadata
    {
        return new VariantAttributesAttributeMetadataModel(
            $this->name,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label,
            $this->type
        );
    }

    public static function of(): VariantAttributesAttributeMetadataBuilder
    {
        return new self();
    }
}
