<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeAssociateModeAction extends BusinessUnitUpdateAction
{
    public const FIELD_ASSOCIATE_MODE = 'associateMode';

    /**
     * <p>The new value for <code>associateMode</code>.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;
}
