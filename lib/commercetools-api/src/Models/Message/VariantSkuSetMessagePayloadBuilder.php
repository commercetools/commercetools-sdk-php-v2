<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantSkuSetMessagePayload>
 */
final class VariantSkuSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $oldSku;

    /**

     * @var ?bool
     */
    private $staged;

    /**
     * <p>The SKU that was set on the Variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * <p>The previous SKU of the Variant.</p>
     *

     * @return null|string
     */
    public function getOldSku()
    {
        return $this->oldSku;
    }

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
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
     * @param ?string $oldSku
     * @return $this
     */
    public function withOldSku(?string $oldSku)
    {
        $this->oldSku = $oldSku;

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


    public function build(): VariantSkuSetMessagePayload
    {
        return new VariantSkuSetMessagePayloadModel(
            $this->sku,
            $this->oldSku,
            $this->staged
        );
    }

    public static function of(): VariantSkuSetMessagePayloadBuilder
    {
        return new self();
    }
}
