<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringCreatedMessagePayload extends MessagePayload
{
    public const FIELD_KEY = 'key';
    public const FIELD_STORE = 'store';
    public const FIELD_PRODUCT_KEY = 'productKey';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_PUBLISHED = 'published';

    /**
     * <p>User-defined unique identifier of the Product Tailoring.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Store to which the Product Tailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>User-defined unique identifier of the Product this Product Tailoring belongs to.</p>
     *

     * @return null|string
     */
    public function getProductKey();

    /**
     * <p>Reference to the Product the Product Tailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>The description of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>The name of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The slug of the <a href="ctp:api:type:ProductTailoring">Product Tailoring</a> at the time of creation.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p><code>true</code> if the ProductTailoring is published.</p>
     *

     * @return null|bool
     */
    public function getPublished();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?string $productKey
     */
    public function setProductKey(?string $productKey): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void;
}
