<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Channel\ChannelDraft;


class Resource8 extends Resource
{
    /**
     * @return Resource9
     */
    public function withIDValue($ID = null): Resource9 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource9($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyChannelsGet
     */
    public function get(): ByProjectKeyChannelsGet {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsGet($args['projectKey']);
    }
    /**
     * @param ChannelDraft $body
     * @return ByProjectKeyChannelsPost
     */
    public function post(ChannelDraft $body): ByProjectKeyChannelsPost {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsPost($args['projectKey'], $body);
    }

}
