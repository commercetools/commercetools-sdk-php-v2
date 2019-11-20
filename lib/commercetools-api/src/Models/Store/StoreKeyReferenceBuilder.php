<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StoreKeyReference>
 */
final class StoreKeyReferenceBuilder implements Builder
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

    public function build(): StoreKeyReference
    {
        return new StoreKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): StoreKeyReferenceBuilder
    {
        return new self();
    }
}
