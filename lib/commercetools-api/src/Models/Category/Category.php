<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Type\CustomFields;

interface Category extends LoggedResource
{
    
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ANCESTORS = 'ancestors';
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
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return CategoryReferenceCollection|null
     */
    public function getAncestors();
    
    /**
     *
     * @return CategoryReference|null
     */
    public function getParent();
    
    /**
     *
     * @return string|null
     */
    public function getOrderHint();
    
    /**
     *
     * @return string|null
     */
    public function getExternalId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaTitle();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaDescription();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaKeywords();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return AssetCollection|null
     */
    public function getAssets();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setName(?LocalizedString $name): void;
    
    public function setSlug(?LocalizedString $slug): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setAncestors(?CategoryReferenceCollection $ancestors): void;
    
    public function setParent(?CategoryReference $parent): void;
    
    public function setOrderHint(?string $orderHint): void;
    
    public function setExternalId(?string $externalId): void;
    
    public function setMetaTitle(?LocalizedString $metaTitle): void;
    
    public function setMetaDescription(?LocalizedString $metaDescription): void;
    
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setAssets(?AssetCollection $assets): void;
    
    public function setKey(?string $key): void;
}