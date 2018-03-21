<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Channel\ChannelUpdate;



class Resource9 extends Resource
{
    /**
     * @return ByProjectKeyChannelsByIDGet
     */
    public function get(): ByProjectKeyChannelsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ChannelUpdate $body
     * @return ByProjectKeyChannelsByIDPost
     */
    public function post(ChannelUpdate $body): ByProjectKeyChannelsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyChannelsByIDDelete
     */
    public function delete(): ByProjectKeyChannelsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyChannelsByIDDelete($args['projectKey'], $args['ID']);
    }

}
