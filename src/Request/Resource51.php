<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ProductType\ProductTypeDraft;


class Resource51 extends Resource
{
    /**
     * @return Resource52
     */
    public function keyWithKeyValue($key = null): Resource52 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource52($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource53
     */
    public function withIDValue($ID = null): Resource53 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource53($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyProductTypesGet
     */
    public function get(): ByProjectKeyProductTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesGet($args['projectKey']);
    }
    /**
     * @param ProductTypeDraft $body
     * @return ByProjectKeyProductTypesPost
     */
    public function post(ProductTypeDraft $body): ByProjectKeyProductTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductTypesPost($args['projectKey'], $body);
    }

}
