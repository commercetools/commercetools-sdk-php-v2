<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Zone\Zone;
use Commercetools\Builder\ZoneUpdateBuilder;

use Commercetools\Types\Zone\ZoneDraft;


class Resource74 extends Resource
{
    /**
     * @return Resource75
     */
    public function withIDValue($ID = null): Resource75 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource75($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyZonesGet
     */
    public function get(): ByProjectKeyZonesGet {
        $args = $this->getArgs();
        return new ByProjectKeyZonesGet($args['projectKey']);
    }
    /**
     * @param ZoneDraft $body
     * @return ByProjectKeyZonesPost
     */
    public function post(ZoneDraft $body): ByProjectKeyZonesPost {
        $args = $this->getArgs();
        return new ByProjectKeyZonesPost($args['projectKey'], $body);
    }


    public function update(Zone $resource)
    {
        $builder = new ZoneUpdateBuilder(function (ZoneUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
