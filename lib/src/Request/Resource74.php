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
    public function withId($ID = null): Resource75 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource75($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(ZoneDraft $body = null): ByProjectKeyZonesPost {
        $args = $this->getArgs();
        return new ByProjectKeyZonesPost($args['projectKey'], $body);
    }


    public function update(Zone $zone)
    {
        $builder = new ZoneUpdateBuilder(function(ZoneUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($zone);
        if ($zone instanceof MapperAware) {
            $builder->setMapper($zone->getMapper());
        }
        return $builder;
    }

    public function delete(Zone $zone)
    {
        return $this->withId($zone->getId())->delete()->withVersion($zone->getVersion());
    }

    /**
     * @param ZoneDraft|callable $zoneDraftDraft builder function <code>
     *   function(ZoneDraft $zoneDraft): ZoneDraft {
     *     // modify $draft as needed
     *     return $zoneDraft;
     *   }
     *   </code>
     */
    public function create($zoneDraft)
    {
        if (is_callable($zoneDraft)) {
            $callback = $zoneDraft;
            $emptyDraft = $this->mapData(ZoneDraft::class, null);
            $zoneDraft = $callback($emptyDraft);
        }
        if (!$zoneDraft instanceof ZoneDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($zoneDraft);
    }
}
