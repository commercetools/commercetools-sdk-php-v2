<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';
    public const FIELD_DRY_RUN = 'dryRun';

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

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?OrderEditUpdateActionCollection $actions
     */
    public function setActions(?OrderEditUpdateActionCollection $actions): void;

    /**
     * @param ?bool $dryRun
     */
    public function setDryRun(?bool $dryRun): void;
}
