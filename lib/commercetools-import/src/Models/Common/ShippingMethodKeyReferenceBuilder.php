<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodKeyReference>
 */
final class ShippingMethodKeyReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

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
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ShippingMethodKeyReference
    {
        return new ShippingMethodKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): ShippingMethodKeyReferenceBuilder
    {
        return new self();
    }
}
