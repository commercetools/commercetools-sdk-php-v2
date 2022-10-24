<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitChangeAssociateAction extends MyBusinessUnitUpdateAction
{
    public const FIELD_ASSOCIATE = 'associate';

    /**
     * <p>The Associate to add.</p>
     *

     * @return null|AssociateDraft
     */
    public function getAssociate();

    /**
     * @param ?AssociateDraft $associate
     */
    public function setAssociate(?AssociateDraft $associate): void;
}
