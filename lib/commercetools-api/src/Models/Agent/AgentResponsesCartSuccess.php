<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AgentResponsesCartSuccess extends AgentResponsesSuccess
{
    public const FIELD_ENTITY = 'entity';

    /**
     * <p>The created <a href="ctp:api:type:Cart">Cart</a> in full commercetools REST representation.</p>
     *

     * @return null|Cart
     */
    public function getEntity();

    /**
     * @param ?Cart $entity
     */
    public function setEntity(?Cart $entity): void;
}
