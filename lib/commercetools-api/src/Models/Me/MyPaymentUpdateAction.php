<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;

interface MyPaymentUpdateAction extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'action';
    const FIELD_ACTION = 'action';

    /**
     * @return null|string
     */
    public function getAction();
}
