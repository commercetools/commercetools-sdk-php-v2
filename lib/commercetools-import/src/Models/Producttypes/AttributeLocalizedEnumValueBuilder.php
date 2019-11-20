<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<AttributeLocalizedEnumValue>
 */
final class AttributeLocalizedEnumValueBuilder implements Builder
{
    /**
     * @var LocalizedString|?LocalizedStringBuilder
     */
    private $label;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
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
    public function withKey(?string $key)
    {
        $this->key = $key;

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

    public function build(): AttributeLocalizedEnumValue
    {
        return new AttributeLocalizedEnumValueModel(
            ($this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label),
            $this->key
        );
    }

    public static function of(): AttributeLocalizedEnumValueBuilder
    {
        return new self();
    }
}
