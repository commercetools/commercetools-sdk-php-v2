<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface Division extends BusinessUnit
{
    /**
     * <p>Parent unit of the Division.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit();

    /**
     * <p>Defines whether the Stores of the Division are set explicitly or inherited from a parent Business Unit.</p>
     *

     * @return null|string
     */
    public function getStoreMode();

    /**
     * <p>Determines whether the Division can inherit Associates from a parent.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void;

    /**
     * @param ?string $storeMode
     */
    public function setStoreMode(?string $storeMode): void;

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;
}
