<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Type\TypeDraft;


class Resource70 extends Resource
{
    /**
     * @return Resource71
     */
    public function keyWithKeyValue($key = null): Resource71 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource71($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource72
     */
    public function withIDValue($ID = null): Resource72 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource72($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyTypesGet
     */
    public function get(): ByProjectKeyTypesGet {
        $args = $this->getArgs();
        return new ByProjectKeyTypesGet($args['projectKey']);
    }
    /**
     * @param TypeDraft $body
     * @return ByProjectKeyTypesPost
     */
    public function post(TypeDraft $body): ByProjectKeyTypesPost {
        $args = $this->getArgs();
        return new ByProjectKeyTypesPost($args['projectKey'], $body);
    }

}
