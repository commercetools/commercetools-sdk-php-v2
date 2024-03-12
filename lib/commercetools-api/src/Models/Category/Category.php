<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Category extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ANCESTORS = 'ancestors';
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
     * <p>Unique identifier of the Category.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Category.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Category was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Category was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Name of the Category.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined identifier used as a deep-link URL to the related Category per <a href="ctp:api:type:Locale">Locale</a>.
     * A Category can have the same slug for different Locales, but they are unique across the <a href="ctp:api:type:Project">Project</a>.
     * Valid slugs match the pattern <code>^[A-Za-z0-9_-]{2,256}+$</code>.
     * For <a href="/../api/predicates/query#performance-considerations">good performance</a>, indexes are provided for the first 15 <code>languages</code> set in a Project.</p>
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
     * <p>Contains the parent path towards the root Category.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getAncestors();

    /**
     * <p>Parent Category of this Category.</p>
     *

     * @return null|CategoryReference
     */
    public function getParent();

    /**
     * <p>Decimal value between 0 and 1. Frontend applications can use this value for ordering Categories within the same level in the category tree.</p>
     *

     * @return null|string
     */
    public function getOrderHint();

    /**
     * <p>Additional identifier for external systems like customer relationship management (CRM) or enterprise resource planning (ERP).</p>
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

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Media related to the Category.</p>
     *

     * @return null|AssetCollection
     */
    public function getAssets();

    /**
     * <p>User-defined unique identifier of the Category.</p>
     *

     * @return null|string
     */
    public function getKey();

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
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

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
     * @param ?CategoryReferenceCollection $ancestors
     */
    public function setAncestors(?CategoryReferenceCollection $ancestors): void;

    /**
     * @param ?CategoryReference $parent
     */
    public function setParent(?CategoryReference $parent): void;

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
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
