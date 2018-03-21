<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\State\StateDraft;


class Resource63 extends Resource
{
    /**
     * @return Resource64
     */
    public function withIDValue($ID = null): Resource64 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource64($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyStatesGet
     */
    public function get(): ByProjectKeyStatesGet {
        $args = $this->getArgs();
        return new ByProjectKeyStatesGet($args['projectKey']);
    }
    /**
     * @param StateDraft $body
     * @return ByProjectKeyStatesPost
     */
    public function post(StateDraft $body): ByProjectKeyStatesPost {
        $args = $this->getArgs();
        return new ByProjectKeyStatesPost($args['projectKey'], $body);
    }

}
