<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSetSkuAction>
 */
final class VariantSetSkuActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>Value to set. Must be unique.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>Whether only the staged <code>sku</code> is updated. If <code>false</code>, both the current and staged <code>sku</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): VariantSetSkuAction
    {
        return new VariantSetSkuActionModel(
            $this->sku,
            $this->staged
        );
    }

    public static function of(): VariantSetSkuActionBuilder
    {
        return new self();
    }
}
