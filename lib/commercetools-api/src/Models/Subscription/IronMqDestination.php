<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;

interface IronMqDestination extends Destination
{
    
    const FIELD_URI = 'uri';

    /**
     *
     * @return string|null
     */
    public function getUri();
    public function setUri(?string $uri): void;
}