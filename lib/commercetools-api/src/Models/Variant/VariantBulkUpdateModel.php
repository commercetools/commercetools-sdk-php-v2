<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantBulkUpdateModel extends JsonObjectModel implements VariantBulkUpdate
{
    /**
     *
     * @var ?VariantBulkUpdateItemCollection
     */
    protected $items;

    /**
     *
     * @var ?VariantUpdateActionCollection
     */
    protected $actions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?VariantBulkUpdateItemCollection $items = null,
        ?VariantUpdateActionCollection $actions = null
    ) {
        $this->items = $items;
        $this->actions = $actions;
    }

    /**
     * <p>List of Variants to update. Each item must identify the Variant by <code>id</code> or <code>key</code>.</p>
     *
     *
     * @return null|VariantBulkUpdateItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->items = VariantBulkUpdateItemCollection::fromArray($data);
        }

        return $this->items;
    }

    /**
     * <p>The update action to apply to each Variant. Only <a href="ctp:api:type:VariantPublishAction">Publish</a> and <a href="ctp:api:type:VariantUnpublishAction">Unpublish</a> actions are supported.
     * An empty array results in a no-op: all items are returned as successful with no changes applied.</p>
     *
     *
     * @return null|VariantUpdateActionCollection
     */
    public function getActions()
    {
        if (is_null($this->actions)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->actions = VariantUpdateActionCollection::fromArray($data);
        }

        return $this->actions;
    }


    /**
     * @param ?VariantBulkUpdateItemCollection $items
     */
    public function setItems(?VariantBulkUpdateItemCollection $items): void
    {
        $this->items = $items;
    }

    /**
     * @param ?VariantUpdateActionCollection $actions
     */
    public function setActions(?VariantUpdateActionCollection $actions): void
    {
        $this->actions = $actions;
    }
}
