<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Categories;

use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImportReference;
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
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getParent();

    /**
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
     * @return null|AssetCollection
     */
    public function getAssets();

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setDescription(?LocalizedString $description): void;

    public function setParent(?ImportReference $parent): void;

    public function setOrderHint(?string $orderHint): void;

    public function setExternalId(?string $externalId): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setAssets(?AssetCollection $assets): void;
}
