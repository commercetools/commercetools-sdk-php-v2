<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyMessages extends Resource
{
    /**
     * @return ResourceByProjectKeyMessagesByID
     */
    public function withId($ID = null): ResourceByProjectKeyMessagesByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyMessagesByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyMessagesGet
     */
    public function get(): ByProjectKeyMessagesGet {
        $args = $this->getArgs();
        return new ByProjectKeyMessagesGet($args['projectKey']);
    }

}
