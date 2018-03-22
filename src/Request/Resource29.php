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
    public function withIDValue($ID = null): Resource30 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource30($this->getUri() . '/{ID}', $args);
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
    public function post(InventoryEntryDraft $body): ByProjectKeyInventoryPost {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryPost($args['projectKey'], $body);
    }


    public function update(InventoryEntry $resource)
    {
        $builder = new InventoryEntryUpdateBuilder(function (InventoryEntryUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
