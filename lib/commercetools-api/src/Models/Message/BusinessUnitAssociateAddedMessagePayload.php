<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\Associate;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAssociateAddedMessagePayload extends MessagePayload
{
    public const FIELD_ASSOCIATE = 'associate';

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> that was added to the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|Associate
     */
    public function getAssociate();

    /**
     * @param ?Associate $associate
     */
    public function setAssociate(?Associate $associate): void;
}
