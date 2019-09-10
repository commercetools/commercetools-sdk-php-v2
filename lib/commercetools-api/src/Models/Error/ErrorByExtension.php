<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\JsonObject;

interface ErrorByExtension extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_KEY = 'key';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    public function setId(?string $id): void;
    
    public function setKey(?string $key): void;
}