<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Product\AttributeCollection;
use Commercetools\Api\Models\Product\CategoryOrderHints;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface VariantProjection extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_VERSION = 'version';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_STAGED = 'staged';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    public const FIELD_KEY = 'key';
    public const FIELD_SKU = 'sku';
    public const FIELD_IMAGES = 'images';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_PRICE = 'price';
    public const FIELD_DEFAULT = 'default';

    /**
     * <p>Unique identifier of the Variant within its parent Product.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Variant Projection.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Variant Projection was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p><code>true</code> for the staged (draft) projection, <code>false</code> for the current (published) projection.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>The <code>id</code> of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the parent <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Name of the parent <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Slug of the parent <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Description of the parent <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p><a href="ctp:api:type:Category">Categories</a> assigned to the parent <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getCategories();

    /**
     * <p>Order of the parent <a href="ctp:api:type:Product">Product</a> in <a href="ctp:api:type:Category">Categories</a>.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>SKU of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|string
     */
    public function getSku();

    /**
     * <p>Images of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>Assets of the <a href="ctp:api:type:Variant">Variant</a>.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>Attributes of the <a href="ctp:api:type:Variant">Variant</a>, including product-level Attributes merged at projection time.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>The selected price based on the <a href="/../api/projects/productProjections#prices">price selection</a> query parameters.
     * Only present when price selection parameters are provided.</p>
     *

     * @return null|Price
     */
    public function getPrice();

    /**
     * <p>Whether this Variant is the default Variant of its <a href="ctp:api:type:Product">Product</a> (see <a href="/projects/products#product">Product.defaultVariant</a>).</p>
     *

     * @return null|bool
     */
    public function getDefault();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?CategoryReferenceCollection $categories
     */
    public function setCategories(?CategoryReferenceCollection $categories): void;

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     */
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?Price $price
     */
    public function setPrice(?Price $price): void;

    /**
     * @param ?bool $default
     */
    public function setDefault(?bool $default): void;
}
