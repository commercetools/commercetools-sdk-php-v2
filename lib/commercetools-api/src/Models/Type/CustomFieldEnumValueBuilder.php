<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomFieldEnumValue>
 */
final class CustomFieldEnumValueBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
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
     * @return null|string
     */
    public function getLabel()
    {
        return $this->label;
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
    public function withLabel(?string $label)
    {
        $this->label = $label;

        return $this;
    }

    public function build(): CustomFieldEnumValue
    {
        return new CustomFieldEnumValueModel(
            $this->key,
            $this->label
        );
    }

    public static function of(): CustomFieldEnumValueBuilder
    {
        return new self();
    }
}
