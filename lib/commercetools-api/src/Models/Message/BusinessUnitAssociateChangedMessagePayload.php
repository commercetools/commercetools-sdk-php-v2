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

interface BusinessUnitAssociateChangedMessagePayload extends MessagePayload
{
    public const FIELD_ASSOCIATE = 'associate';

    /**
     * <p>The <a href="ctp:api:type:Associate">Associate</a> that was updated.</p>
     *

     * @return null|Associate
     */
    public function getAssociate();

    /**
     * @param ?Associate $associate
     */
    public function setAssociate(?Associate $associate): void;
}
