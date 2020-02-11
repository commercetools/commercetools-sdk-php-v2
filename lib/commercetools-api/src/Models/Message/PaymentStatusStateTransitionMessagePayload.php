<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\State\StateReference;

interface PaymentStatusStateTransitionMessagePayload extends MessagePayload
{

    public const FIELD_STATE = 'state';
    public const FIELD_FORCE = 'force';

    /**
     * @return null|StateReference
     */
    public function getState();

    /**
     * @return null|bool
     */
    public function getForce();

    public function setState(?StateReference $state): void;

    public function setForce(?bool $force): void;
}
