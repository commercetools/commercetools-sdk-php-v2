<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitUpdateActionCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyBusinessUnitUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the BusinessUnit.</p>
     *

     * @return null|BusinessUnitUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?BusinessUnitUpdateActionCollection $actions
     */
    public function setActions(?BusinessUnitUpdateActionCollection $actions): void;
}
