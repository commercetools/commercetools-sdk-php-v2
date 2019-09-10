<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ResourceDeletedDelivery extends SubscriptionDelivery
{
    
    const FIELD_VERSION = 'version';
    const FIELD_MODIFIED_AT = 'modifiedAt';

    /**
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getModifiedAt();
    public function setVersion(?int $version): void;
    
    public function setModifiedAt(?DateTimeImmutable $modifiedAt): void;
}