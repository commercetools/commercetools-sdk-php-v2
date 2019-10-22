<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountKeyReference>
 */
final class CartDiscountKeyReferenceBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $typeId;

    /**
     * @var ?string
     */
    private $key;

    public function __construct()
    {
    }

    /**
     * <p>The type of the referenced resource.</p>.
     *
     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
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
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

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

    public function build(): CartDiscountKeyReference
    {
        return new CartDiscountKeyReferenceModel(
            $this->typeId,
            $this->key
        );
    }

    public static function of(): CartDiscountKeyReferenceBuilder
    {
        return new self();
    }
}
