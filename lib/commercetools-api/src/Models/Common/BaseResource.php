<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CustomObject\CustomObject;
use Commercetools\Api\Models\Message\Message;
use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\ShippingMethod\ShippingMethod;
use Commercetools\Api\Models\Store\Store;
use Commercetools\Api\Models\Zone\Zone;
use DateTimeImmutable;

interface BaseResource extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_VERSION = 'version';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_LAST_MODIFIED_AT = 'lastModifiedAt';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getLastModifiedAt();
    public function setId(?string $id): void;
    
    public function setVersion(?int $version): void;
    
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
    
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;
}