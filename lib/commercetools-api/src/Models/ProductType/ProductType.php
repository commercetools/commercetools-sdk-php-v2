<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LoggedResource;

interface ProductType extends LoggedResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTRIBUTES = 'attributes';

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
     * @return AttributeDefinitionCollection|null
     */
    public function getAttributes();
    public function setKey(?string $key): void;
    
    public function setName(?string $name): void;
    
    public function setDescription(?string $description): void;
    
    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}