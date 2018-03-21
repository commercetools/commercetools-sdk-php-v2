<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Zone\ZoneUpdate;



class Resource74 extends Resource
{
    /**
     * @return ByProjectKeyZonesByIDGet
     */
    public function get(): ByProjectKeyZonesByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyZonesByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ZoneUpdate $body
     * @return ByProjectKeyZonesByIDPost
     */
    public function post(ZoneUpdate $body): ByProjectKeyZonesByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyZonesByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyZonesByIDDelete
     */
    public function delete(): ByProjectKeyZonesByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyZonesByIDDelete($args['projectKey'], $args['ID']);
    }

}
