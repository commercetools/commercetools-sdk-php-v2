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
     * <p>User-defined unique identifier for the Order Edit.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to the Order updated with this edit.</p>
     *

     * @return null|OrderReference
     */
    public function getResource();

    /**
     * <p>Update actions to apply to the Order referenced in <code>resource</code>.
     * Cannot be updated if the <a href="ctp:api:endpoint:/{projectKey}/orders/edits/{id}/apply:POST">edit has been applied</a>.</p>
     *

     * @return null|StagedOrderUpdateActionCollection
     */
    public function getStagedActions();

    /**
     * <p>Custom Fields for the Order Edit.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>User-defined description regarding the Order Edit.</p>
     *

     * @return null|string
     */
    public function getComment();

    /**
     * <p>Set to <code>true</code> if you want to <a href="ctp:api:type:OrderEditPreviewSuccess">preview</a> the edited Order first without persisting it (dry run).
     * A dry run allows checking for potential <a href="ctp:api:type:OrderEditPreviewFailure">errors</a> when trying to apply the <code>stagedActions</code>.</p>
     * <p>Order <a href="/../api/projects/api-extensions">API Extensions</a>, if any, are also called in dry runs.</p>
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
