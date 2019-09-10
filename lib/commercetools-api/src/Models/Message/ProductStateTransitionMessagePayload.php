<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;

interface ProductStateTransitionMessagePayload extends MessagePayload
{
    const FIELD_STATE = 'state';
    const FIELD_FORCE = 'force';

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
