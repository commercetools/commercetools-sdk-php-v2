<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\JsonObject;

interface CustomObjectDraft extends JsonObject
{
    
    const FIELD_CONTAINER = 'container';
    const FIELD_KEY = 'key';
    const FIELD_VALUE = 'value';
    const FIELD_VERSION = 'version';

    /**
     *
     * @return string|null
     */
    public function getContainer();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return JsonObject|null
     */
    public function getValue();
    
    /**
     *
     * @return int|null
     */
    public function getVersion();
    public function setContainer(?string $container): void;
    
    public function setKey(?string $key): void;
    
    public function setValue(?JsonObject $value): void;
    
    public function setVersion(?int $version): void;
}