<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<AttributePlainEnumValue>
 */
final class AttributePlainEnumValueBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $label;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
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
    public function withLabel(?string $label)
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

    public function build(): AttributePlainEnumValue
    {
        return new AttributePlainEnumValueModel(
            $this->label,
            $this->key
        );
    }

    public static function of(): AttributePlainEnumValueBuilder
    {
        return new self();
    }
}
