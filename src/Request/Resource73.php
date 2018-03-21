<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Zone\ZoneDraft;


class Resource73 extends Resource
{
    /**
     * @return Resource74
     */
    public function withIDValue($ID = null): Resource74 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource74($this->getUri() . '/{ID}', $args);
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

}
