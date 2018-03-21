<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Product\ProductDraft;


class Resource40 extends Resource
{
    /**
     * @return Resource41
     */
    public function keyWithKeyValue($key = null): Resource41 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource41($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource42
     */
    public function withIDValue($ID = null): Resource42 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource42($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyProductsGet
     */
    public function get(): ByProjectKeyProductsGet {
        $args = $this->getArgs();
        return new ByProjectKeyProductsGet($args['projectKey']);
    }
    /**
     * @param ProductDraft $body
     * @return ByProjectKeyProductsPost
     */
    public function post(ProductDraft $body): ByProjectKeyProductsPost {
        $args = $this->getArgs();
        return new ByProjectKeyProductsPost($args['projectKey'], $body);
    }

}
