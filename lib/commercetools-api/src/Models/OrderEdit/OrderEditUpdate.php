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
     * <p>Expected version of the Order Edit on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the Order Edit.</p>
     *

     * @return null|OrderEditUpdateActionCollection
     */
    public function getActions();

    /**
     * <p>If set to <code>true</code>, the Order Edit is applied on the <a href="ctp:api:type:Order">Order</a> without persisting it.</p>
     *

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
