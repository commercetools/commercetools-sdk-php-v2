<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitAssociateModeChangedMessage extends Message
{
    public const FIELD_ASSOCIATE_MODE = 'associateMode';
    public const FIELD_OLD_ASSOCIATE_MODE = 'oldAssociateMode';

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit after the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p><a href="ctp:api:type:BusinessUnitAssociateMode">BusinessUnitAssociateMode</a> of the Business Unit before the <a href="ctp:api:type:BusinessUnitChangeAssociateModeAction">Change Associate Mode</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldAssociateMode();

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?string $oldAssociateMode
     */
    public function setOldAssociateMode(?string $oldAssociateMode): void;
}
