<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelection;
use Commercetools\Api\Models\ProductSelection\ProductVariantSelectionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductPresentWithDifferentVariantSelectionErrorModel extends JsonObjectModel implements ProductPresentWithDifferentVariantSelectionError
{
    public const DISCRIMINATOR_VALUE = 'ProductPresentWithDifferentVariantSelection';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?ProductVariantSelection
     */
    protected $existingVariantSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?ProductReference $product = null,
        ?ProductVariantSelection $existingVariantSelection = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->product = $product;
        $this->existingVariantSelection = $existingVariantSelection;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p><code>&quot;Product is already present with the following different $variantSelections.&quot;</code></p>
     *
     *
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the <a href="ctp:api:type:Product">Product</a> for which the error was returned.</p>
     *
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Existing Product Variant Selection for the <a href="/../api/projects/products">Product</a> in the <a href="/../api/projects/product-selections">Product Selection</a>.</p>
     *
     *
     * @return null|ProductVariantSelection
     */
    public function getExistingVariantSelection()
    {
        if (is_null($this->existingVariantSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXISTING_VARIANT_SELECTION);
            if (is_null($data)) {
                return null;
            }

            $this->existingVariantSelection = ProductVariantSelectionModel::of($data);
        }

        return $this->existingVariantSelection;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?ProductVariantSelection $existingVariantSelection
     */
    public function setExistingVariantSelection(?ProductVariantSelection $existingVariantSelection): void
    {
        $this->existingVariantSelection = $existingVariantSelection;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
