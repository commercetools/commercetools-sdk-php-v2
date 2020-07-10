<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Producttypes;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Common\LocalizedString;
use Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<AttributeLocalizedEnumValue>
 */
final class AttributeLocalizedEnumValueBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $label;

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        return $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label;
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
    public function withLabel(?LocalizedString $label)
    {
        $this->label = $label;

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
            $this->key,
            $this->label instanceof LocalizedStringBuilder ? $this->label->build() : $this->label
        );
    }

    public static function of(): AttributeLocalizedEnumValueBuilder
    {
        return new self();
    }
}
