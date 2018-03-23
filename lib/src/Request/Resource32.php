<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource32 extends Resource
{
    /**
     * @return Resource33
     */
    public function withIDValue($ID = null): Resource33 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource33($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyMessagesGet
     */
    public function get(): ByProjectKeyMessagesGet {
        $args = $this->getArgs();
        return new ByProjectKeyMessagesGet($args['projectKey']);
    }

}
