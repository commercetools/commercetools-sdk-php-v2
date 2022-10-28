<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeAssociateAction extends BusinessUnitUpdateAction
{
    public const FIELD_ASSOCIATE = 'associate';

    /**
     * <p>New version of an existing Associate.</p>
     *

     * @return null|AssociateDraft
     */
    public function getAssociate();

    /**
     * @param ?AssociateDraft $associate
     */
    public function setAssociate(?AssociateDraft $associate): void;
}
