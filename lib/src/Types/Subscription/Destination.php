<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Subscription;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface Destination extends JsonObject
{
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'AzureServiceBus' => Types\Subscription\AzureServiceBusDestination::class,
        'IronMQ' => Types\Subscription\IronMqDestination::class,
        'SNS' => Types\Subscription\SnsDestination::class,
        'SQS' => Types\Subscription\SqsDestination::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
