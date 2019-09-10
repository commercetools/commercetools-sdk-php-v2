<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface ChannelDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_ROLES = 'roles';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ADDRESS = 'address';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return array|null
     */
    public function getRoles();
    
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
     * @return Address|null
     */
    public function getAddress();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return JsonObject|null
     */
    public function getGeoLocation();
    public function setKey(?string $key): void;
    
    public function setRoles(?array $roles): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setAddress(?Address $address): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setGeoLocation(?JsonObject $geoLocation): void;
}