<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerGroupUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the customer group on which the changes should be applied.
     * If the expected version does not match the actual version, a 409 Conflict
     * will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>List of update actions to be performed on the customer group.</p>
     *
     * @return null|CustomerGroupUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?CustomerGroupUpdateActionCollection $actions
     */
    public function setActions(?CustomerGroupUpdateActionCollection $actions): void;
}
