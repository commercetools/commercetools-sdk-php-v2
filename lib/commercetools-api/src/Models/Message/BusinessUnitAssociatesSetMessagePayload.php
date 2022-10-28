<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\AssociateCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAssociatesSetMessagePayload extends MessagePayload
{
    public const FIELD_ASSOCIATES = 'associates';

    /**
     * <p>The list of <a href="ctp:api:type:Associate">Associates</a> that was updated on the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|AssociateCollection
     */
    public function getAssociates();

    /**
     * @param ?AssociateCollection $associates
     */
    public function setAssociates(?AssociateCollection $associates): void;
}
