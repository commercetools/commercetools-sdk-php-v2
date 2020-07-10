<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productvariants;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;

use Models\Common\AssetCollection;
use Models\Common\ImageCollection;
use Models\Common\ImportResource;
use Models\Common\ImportResourceModel;
use Models\Common\ProductKeyReference;
use Models\Common\ProductKeyReferenceModel;

/**
 * @internal
 */
final class ProductVariantImportModel extends JsonObjectModel implements ProductVariantImport
{

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?bool
     */
    protected $isMasterVariant;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?ImageCollection
     */
    protected $images;

    /**
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     * @var ?ProductKeyReference
     */
    protected $product;


    public function __construct(
        string $key = null,
        string $sku = null,
        bool $isMasterVariant = null,
        AttributeCollection $attributes = null,
        ImageCollection $images = null,
        AssetCollection $assets = null,
        ProductKeyReference $product = null
    ) {
        $this->key = $key;
        $this->sku = $sku;
        $this->isMasterVariant = $isMasterVariant;
        $this->attributes = $attributes;
        $this->images = $images;
        $this->assets = $assets;
        $this->product = $product;

    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Maps to <code>ProductVariant.sku</code>.</p>
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductVariantImport::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Maps to <code>ProductVariant.isMasterVariant</code>.</p>
     *
     * @return null|bool
     */
    public function getIsMasterVariant()
    {
        if (is_null($this->isMasterVariant)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductVariantImport::FIELD_IS_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->isMasterVariant = (bool) $data;
        }

        return $this->isMasterVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.</p>
     * <p>Each attribute referenced must be defined
     * in an already existing product type in the commercetools project, or the import
     * operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantImport::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>Maps to <code>ProductVariant.images</code>.</p>
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantImport::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }

    /**
     * <p>Maps to <code>ProductVariant.assets</code>.</p>
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductVariantImport::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <p>The product in which this product variant is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductVariantImport::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    public function setIsMasterVariant(?bool $isMasterVariant): void
    {
        $this->isMasterVariant = $isMasterVariant;
    }

    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }



}
