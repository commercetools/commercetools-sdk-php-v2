<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\StoreKeyReference;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface ProductTailoringImport extends ImportResource
{
    public const FIELD_STORE = 'store';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_SLUG = 'slug';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_VARIANTS = 'variants';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:ProductTailoring">ProductTailoring</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Store to which the ProductTailoring belongs. If the referenced <a href="ctp:api:type:Store">Store</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Store is created.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>The Product to which the ProductTailoring belongs. If the referenced <a href="ctp:api:type:Product">Product</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Product is created.</p>
     *

     * @return null|ProductKeyReference
     */
    public function getProduct();

    /**
     * <p>Maps to <code>ProductTailoring.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductTailoring.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>ProductTailoring.metaTitle</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Maps to <code>ProductTailoring.metaDescription</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Maps to <code>ProductTailoring.metaKeywords</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>Maps to <code>ProductTailoring.slug</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Set to <code>true</code> to publish the ProductTailoring immediately. Otherwise, the tailored product information is just staged.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Tailored Variants of the Product.</p>
     *

     * @return null|ProductVariantTailoringImportCollection
     */
    public function getVariants();

    /**
     * <p>Attributes of the tailored Product.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void;

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void;

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

    /**
     * @param ?ProductVariantTailoringImportCollection $variants
     */
    public function setVariants(?ProductVariantTailoringImportCollection $variants): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
