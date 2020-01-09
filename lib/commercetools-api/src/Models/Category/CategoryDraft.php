<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;

interface CategoryDraft extends JsonObject
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
    const FIELD_CUSTOM = 'custom';
    const FIELD_ASSETS = 'assets';
    const FIELD_KEY = 'key';

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>human-readable identifier usually used as deep-link URL to the related category.
     * Allowed are alphabetic, numeric, underscore (<code>_</code>) and hyphen (<code>-</code>) characters.
     * Maximum size is 256.
     * <strong>Must be unique across a project!</strong> The same category can have the same slug for different languages.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>A category that is the parent of this category in the category tree.
     * The parent can be set by its ID or by its key.</p>
     *
     * @return null|CategoryResourceIdentifier
     */
    public function getParent();

    /**
     * <p>An attribute as base for a custom category order in one level.
     * A random value will be assigned by API if not set.</p>
     *
     * @return null|string
     */
    public function getOrderHint();

    /**
     * @return null|string
     */
    public function getExternalId();

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|AssetDraftCollection
     */
    public function getAssets();

    /**
     * <p>User-defined unique identifier for the category.
     * Keys can only contain alphanumeric characters (<code>a-Z, 0-9</code>), underscores and hyphens (<code>-, _</code>) and be between 2 and 256 characters.</p>
     *
     * @return null|string
     */
    public function getKey();

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setDescription(?LocalizedString $description): void;

    public function setParent(?CategoryResourceIdentifier $parent): void;

    public function setOrderHint(?string $orderHint): void;

    public function setExternalId(?string $externalId): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setCustom(?CustomFieldsDraft $custom): void;

    public function setAssets(?AssetDraftCollection $assets): void;

    public function setKey(?string $key): void;
}
