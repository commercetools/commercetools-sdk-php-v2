<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ProductVariantImportModel extends JsonObjectModel implements ProductVariantImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?bool
     */
    protected $isMasterVariant;

    /**
     *
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     *
     * @var ?ImageCollection
     */
    protected $images;

    /**
     *
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     *
     * @var ?bool
     */
    protected $staged;

    /**
     *
     * @var ?ProductKeyReference
     */
    protected $product;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $sku = null,
        ?bool $isMasterVariant = null,
        ?AttributeCollection $attributes = null,
        ?ImageCollection $images = null,
        ?AssetCollection $assets = null,
        ?bool $staged = null,
        ?ProductKeyReference $product = null
    ) {
        $this->key = $key;
        $this->sku = $sku;
        $this->isMasterVariant = $isMasterVariant;
        $this->attributes = $attributes;
        $this->images = $images;
        $this->assets = $assets;
        $this->staged = $staged;
        $this->product = $product;
    }

    /**
     * <p>User-defined unique identifier. If a <a href="/../api/projects/products#productvariant">ProductVariant</a> with this <code>key</code> exists on the specified <code>product</code>, it will be updated with the imported data.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
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
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
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
     *
     * @return null|bool
     */
    public function getIsMasterVariant()
    {
        if (is_null($this->isMasterVariant)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->isMasterVariant = (bool) $data;
        }

        return $this->isMasterVariant;
    }

    /**
     * <p>Maps to <code>ProductVariant.attributes</code>.
     * The referenced attribute must be defined in an already existing ProductType in the project, or the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be <code>unresolved</code>.</p>
     *
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
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
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
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
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <ul>
     * <li>Set to <code>false</code> to update both the <a href="/../api/projects/productProjections#current--staged">current and staged projections</a> of the <a href="/../api/projects/products#product">Product</a> with the new Product Variant data.</li>
     * <li>Leave empty or set to <code>true</code> to only update the staged projection.</li>
     * </ul>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }

    /**
     * <p>The <a href="/../api/projects/products#productvariant">Product</a> to which this Product Variant belongs. Maps to <code>ProductVariant.product</code>.
     * The Reference to the <a href="/../api/projects/products#product">Product</a> with which the ProductVariant is associated.
     * If referenced Product does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Product is created.</p>
     *
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?bool $isMasterVariant
     */
    public function setIsMasterVariant(?bool $isMasterVariant): void
    {
        $this->isMasterVariant = $isMasterVariant;
    }

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }
}
