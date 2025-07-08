<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartKeyReference>
 */
final class CartKeyReferenceBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>User-defined unique identifier of the referenced Cart.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): CartKeyReference
    {
        return new CartKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): CartKeyReferenceBuilder
    {
        return new self();
    }
}
