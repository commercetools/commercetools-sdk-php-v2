<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderTransitionStateAction extends OrderUpdateAction
{
    public const FIELD_STATE = 'state';
    public const FIELD_FORCE = 'force';

    /**
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * @return null|bool
     */
    public function getForce();

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void;
}
