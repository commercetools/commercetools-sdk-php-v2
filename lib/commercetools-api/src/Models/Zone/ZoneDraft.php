<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;

interface ZoneDraft extends JsonObject
{
    
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_LOCATIONS = 'locations';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getDescription();
    
    /**
     *
     * @return LocationCollection|null
     */
    public function getLocations();
    public function setKey(?string $key): void;
    
    public function setName(?string $name): void;
    
    public function setDescription(?string $description): void;
    
    public function setLocations(?LocationCollection $locations): void;
}