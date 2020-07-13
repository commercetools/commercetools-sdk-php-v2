<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\OrderReference;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_STAGED_ACTIONS = 'stagedActions';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_COMMENT = 'comment';
    public const FIELD_DRY_RUN = 'dryRun';

    /**
     * <p>Unique identifier for this edit.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * <p>The order to be updated with this edit.</p>
     *
     * @return null|OrderReference
     */
    public function getResource();

    /**
     * <p>The actions to apply to <code>resource</code>.</p>
     *
     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * <p>The custom fields.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>This field can be used to add additional textual information regarding the edit.</p>
     *
     * @return null|string
     */
    public function getComment();

    /**
     * <p>When set to <code>true</code> the edit is applied on the Order without persisting it.</p>
     *
     * @return null|bool
     */
    public function getDryRun();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?OrderReference $resource
     */
    public function setResource(?OrderReference $resource): void;

    /**
     * @param ?StagedOrderUpdateActionCollection $stagedActions
     */
    public function setStagedActions(?StagedOrderUpdateActionCollection $stagedActions): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?string $comment
     */
    public function setComment(?string $comment): void;

    /**
     * @param ?bool $dryRun
     */
    public function setDryRun(?bool $dryRun): void;
}
