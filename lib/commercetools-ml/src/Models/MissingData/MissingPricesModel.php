<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Ml\Models\Common\ProductReference;
use Commercetools\Ml\Models\Common\ProductReferenceModel;

/**
 * @internal
 */
final class MissingPricesModel extends JsonObjectModel implements MissingPrices
{

    /**
     * @var ?ProductReference
     */
    protected $product;

    /**
     * @var ?int
     */
    protected $variantId;


    public function __construct(
        ProductReference $product = null,
        int $variantId = null
    ) {
        $this->product = $product;
        $this->variantId = $variantId;

    }

    /**
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MissingPrices::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Id of the <code>ProductVariant</code>.</p>
     *
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MissingPrices::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId = (int) $data;
        }

        return $this->variantId;
    }

    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }



}
