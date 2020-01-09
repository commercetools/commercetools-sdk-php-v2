<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<LocalizableTextAttribute>
 */
final class LocalizableTextAttributeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $value;

    /**
     * <p>The name of this attribute must match a name of the product types attribute definitions.
     * The name is required if this type is used in a product variant and must not be set when
     * used in a product variant patch.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getValue()
    {
        return $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value;
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
    public function withValue(?LocalizedString $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?LocalizedStringBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): LocalizableTextAttribute
    {
        return new LocalizableTextAttributeModel(
            $this->name,
            $this->value instanceof LocalizedStringBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): LocalizableTextAttributeBuilder
    {
        return new self();
    }
}
