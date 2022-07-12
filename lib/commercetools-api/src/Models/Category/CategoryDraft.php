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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategoryDraft extends JsonObject
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
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_ASSETS = 'assets';
    public const FIELD_KEY = 'key';

    /**
     * <p>Name of the Category.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined identifier used as a deep-link URL to the related Category.
     * A Category can have the same slug for different <a href="ctp:api:type:Locale">Locales</a>, but it must be unique across the <a href="ctp:api:type:Project">Project</a>.
     * Valid slugs must match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Description of the Category.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Parent Category of the Category.
     * The parent can be set by its <code>id</code> or <code>key</code>.</p>
     *

     * @return null|CategoryResourceIdentifier
     */
    public function getParent();

    /**
     * <p>Decimal value between 0 and 1 used to order Categories that are on the same level in the Category tree.
     * If not set, a random value will be assigned.</p>
     *

     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>Additional identifier for external systems like Customer Relationship Management (CRM) or Enterprise Resource Planning (ERP).</p>
     *

     * @return null|string
     */
    public function getExternalId();

    /**
     * <p>Name of the Category used by external search engines for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Description of the Category used by external search engines for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Keywords related to the Category for improved search engine performance.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>Custom Fields for the Category.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Media related to the Category.</p>
     *

     * @return null|AssetDraftCollection
     */
    public function getAssets();

    /**
     * <p>User-defined unique identifier for the Category.</p>
     *

     * @return null|string
     */
    public function getKey();

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
     * @param ?CategoryResourceIdentifier $parent
     */
    public function setParent(?CategoryResourceIdentifier $parent): void;

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
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?AssetDraftCollection $assets
     */
    public function setAssets(?AssetDraftCollection $assets): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
