<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountKeyReference>
 */
final class ProductDiscountKeyReferenceBuilder implements Builder
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


    public function build(): ProductDiscountKeyReference
    {
        return new ProductDiscountKeyReferenceModel(
            $this->key
        );
    }

    public static function of(): ProductDiscountKeyReferenceBuilder
    {
        return new self();
    }
}
