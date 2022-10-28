<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitParentUnitChangedMessagePayload extends MessagePayload
{
    public const FIELD_OLD_PARENT_UNIT = 'oldParentUnit';
    public const FIELD_NEW_PARENT_UNIT = 'newParentUnit';

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit();

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getNewParentUnit();

    /**
     * @param ?BusinessUnitKeyReference $oldParentUnit
     */
    public function setOldParentUnit(?BusinessUnitKeyReference $oldParentUnit): void;

    /**
     * @param ?BusinessUnitKeyReference $newParentUnit
     */
    public function setNewParentUnit(?BusinessUnitKeyReference $newParentUnit): void;
}
