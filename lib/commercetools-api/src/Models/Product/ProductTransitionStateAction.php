<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\State\StateResourceIdentifier;

interface ProductTransitionStateAction extends ProductUpdateAction
{

    public const FIELD_STATE = 'state';
    public const FIELD_FORCE = 'force';

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * @return null|bool
     */
    public function getForce();

    public function setState(?StateResourceIdentifier $state): void;

    public function setForce(?bool $force): void;
}
