<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<VariantBulkUpdate>
 */
final class VariantBulkUpdateBuilder implements Builder
{
    /**

     * @var ?VariantBulkUpdateItemCollection
     */
    private $items;

    /**

     * @var ?VariantUpdateActionCollection
     */
    private $actions;

    /**
     * <p>List of Variants to update. Each item must identify the Variant by <code>id</code> or <code>key</code>.</p>
     *

     * @return null|VariantBulkUpdateItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>The update action to apply to each Variant. Only <a href="ctp:api:type:VariantPublishAction">Publish</a> and <a href="ctp:api:type:VariantUnpublishAction">Unpublish</a> actions are supported.
     * An empty array results in a no-op: all items are returned as successful with no changes applied.</p>
     *

     * @return null|VariantUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?VariantBulkUpdateItemCollection $items
     * @return $this
     */
    public function withItems(?VariantBulkUpdateItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?VariantUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?VariantUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): VariantBulkUpdate
    {
        return new VariantBulkUpdateModel(
            $this->items,
            $this->actions
        );
    }

    public static function of(): VariantBulkUpdateBuilder
    {
        return new self();
    }
}
