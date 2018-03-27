<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Inventory\InventoryEntry;
use Commercetools\Builder\InventoryEntryUpdateBuilder;

use Commercetools\Types\Inventory\InventoryEntryDraft;


class Resource29 extends Resource
{
    /**
     * @return Resource30
     */
    public function withId($ID = null): Resource30 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource30($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyInventoryGet
     */
    public function get(): ByProjectKeyInventoryGet {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryGet($args['projectKey']);
    }
    /**
     * @param InventoryEntryDraft $body
     * @return ByProjectKeyInventoryPost
     */
    public function post(InventoryEntryDraft $body = null): ByProjectKeyInventoryPost {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryPost($args['projectKey'], $body);
    }


    public function update(InventoryEntry $inventoryEntry)
    {
        $builder = new InventoryEntryUpdateBuilder(function(InventoryEntryUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($inventoryEntry);
        if ($inventoryEntry instanceof MapperAware) {
            $builder->setMapper($inventoryEntry->getMapper());
        }
        return $builder;
    }

    public function delete(InventoryEntry $inventoryEntry)
    {
        return $this->withIDValue($inventoryEntry->getId())->delete()->withVersion($inventoryEntry->getVersion());
    }

    /**
     * @param InventoryEntryDraft|callable $inventoryEntryDraftDraft builder function <code>
     *   function(InventoryEntryDraft $inventoryEntryDraft): InventoryEntryDraft {
     *     // modify $draft as needed
     *     return $inventoryEntryDraft;
     *   }
     *   </code>
     */
    public function create($inventoryEntryDraft)
    {
        if (is_callable($inventoryEntryDraft)) {
            $callback = $inventoryEntryDraft;
            $emptyDraft = $this->mapData(InventoryEntryDraft::class, null);
            $inventoryEntryDraft = $callback($emptyDraft);
        }
        if (!$inventoryEntryDraft instanceof InventoryEntryDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($inventoryEntryDraft);
    }
}
