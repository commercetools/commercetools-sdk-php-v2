<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Type\CustomFields;

interface Asset extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_SOURCES = 'sources';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAGS = 'tags';
    const FIELD_CUSTOM = 'custom';
    const FIELD_KEY = 'key';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return AssetSourceCollection|null
     */
    public function getSources();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return array|null
     */
    public function getTags();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setId(?string $id): void;
    
    public function setSources(?AssetSourceCollection $sources): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setTags(?array $tags): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setKey(?string $key): void;
}