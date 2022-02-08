<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfoCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderReturnInfoSetMessage extends OrderMessage
{
    public const FIELD_RETURN_INFO = 'returnInfo';

    /**
     * @return null|ReturnInfoCollection
     */
    public function getReturnInfo();

    /**
     * @param ?ReturnInfoCollection $returnInfo
     */
    public function setReturnInfo(?ReturnInfoCollection $returnInfo): void;
}
