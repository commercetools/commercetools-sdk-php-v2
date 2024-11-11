<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Product\ProductResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTailoringInStoreDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_SLUG = 'slug';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_VARIANTS = 'variants';

    /**
     * <p>User-defined unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>ResourceIdentifier of the Product the ProductTailoring belongs to.</p>
     *

     * @return null|ProductResourceIdentifier
     */
    public function getProduct();

    /**
     * <p>Tailored name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Tailored description of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Tailored title of the Product that is used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Tailored description of the Product that is used in search engine.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Tailored keywords related to the Product that are used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>User-defined identifier used in a deep-link URL for the ProductTailoring.
     * Matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>If <code>true</code>, the ProductTailoring is published immediately.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Tailored Variants of the Product.</p>
     *

     * @return null|ProductVariantTailoringDraftCollection
     */
    public function getVariants();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?ProductResourceIdentifier $product
     */
    public function setProduct(?ProductResourceIdentifier $product): void;

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
     * @param ?ProductVariantTailoringDraftCollection $variants
     */
    public function setVariants(?ProductVariantTailoringDraftCollection $variants): void;
}
