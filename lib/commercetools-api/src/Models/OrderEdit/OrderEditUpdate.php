<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;

interface OrderEditUpdate extends JsonObject
{
    const FIELD_VERSION = 'version';
    const FIELD_ACTIONS = 'actions';
    const FIELD_DRY_RUN = 'dryRun';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|OrderEditUpdateActionCollection
     */
    public function getActions();

    /**
     * @return null|bool
     */
    public function getDryRun();

    public function setVersion(?int $version): void;

    public function setActions(?OrderEditUpdateActionCollection $actions): void;

    public function setDryRun(?bool $dryRun): void;
}
