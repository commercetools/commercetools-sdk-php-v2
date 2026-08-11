<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantBulkUpdate extends JsonObject
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>List of Variants to update. Each item must identify the Variant by <code>id</code> or <code>key</code>.</p>
     *

     * @return null|VariantBulkUpdateItemCollection
     */
    public function getItems();

    /**
     * <p>The update action to apply to each Variant. Only <a href="ctp:api:type:VariantPublishAction">Publish</a> and <a href="ctp:api:type:VariantUnpublishAction">Unpublish</a> actions are supported.
     * An empty array results in a no-op: all items are returned as successful with no changes applied.</p>
     *

     * @return null|VariantUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?VariantBulkUpdateItemCollection $items
     */
    public function setItems(?VariantBulkUpdateItemCollection $items): void;

    /**
     * @param ?VariantUpdateActionCollection $actions
     */
    public function setActions(?VariantUpdateActionCollection $actions): void;
}
