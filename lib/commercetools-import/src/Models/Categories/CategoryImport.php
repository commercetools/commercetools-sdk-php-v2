<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Categories;

use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\CategoryKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;

interface CategoryImport extends ImportResource
{
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_PARENT = 'parent';
    const FIELD_ORDER_HINT = 'orderHint';
    const FIELD_EXTERNAL_ID = 'externalId';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_ASSETS = 'assets';

    /**
     * <p>Maps to <code>Category.name</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>Category.slug</code>.
     * Must match the pattern <code>[-a-zA-Z0-9_]{2,256}</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Maps to <code>Category.description</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>Category.parent</code>.
     * The parent category referenced must already exist
     * in the commercetools project, or the import operation
     * will have an <code>Unresolved</code> state.</p>
     *
     * @return null|CategoryKeyReference
     */
    public function getParent();

    /**
     * <p>Maps to <code>Category.orderHint</code>.</p>
     *
     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>Maps to <code>Category.externalId</code>.</p>
     *
     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Maps to <code>Category.metaTitle</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Maps to <code>Category.metaDescription</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Maps to <code>Category.metaKeywords</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @return null|AssetCollection
     */
    public function getAssets();

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setDescription(?LocalizedString $description): void;

    public function setParent(?CategoryKeyReference $parent): void;

    public function setOrderHint(?string $orderHint): void;

    public function setExternalId(?string $externalId): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setAssets(?AssetCollection $assets): void;
}
