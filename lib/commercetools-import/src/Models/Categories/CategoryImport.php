<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Categories;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\CategoryKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Customfields\Custom;

interface CategoryImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_PARENT = 'parent';
    public const FIELD_ORDER_HINT = 'orderHint';
    public const FIELD_EXTERNAL_ID = 'externalId';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier. If a <a href="/../api/projects/categories#category">Category</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

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
     * The Reference to the parent <a href="/../api/projects/categories#category">Category</a> with which the Category is associated.
     * If referenced Category does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Category is created.</p>
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

    /**
     * <p>The custom fields for this Category.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
     * @param ?CategoryKeyReference $parent
     */
    public function setParent(?CategoryKeyReference $parent): void;

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void;

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void;

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
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
