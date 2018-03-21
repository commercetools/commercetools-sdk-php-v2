<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Extension\ExtensionDraft;


class Resource87 extends Resource
{
    /**
     * @return Resource88
     */
    public function keyWithKeyValue($key = null): Resource88 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource88($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource89
     */
    public function withIDValue($ID = null): Resource89 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource89($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyExtensionsGet
     */
    public function get(): ByProjectKeyExtensionsGet {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsGet($args['projectKey']);
    }
    /**
     * @param ExtensionDraft $body
     * @return ByProjectKeyExtensionsPost
     */
    public function post(ExtensionDraft $body): ByProjectKeyExtensionsPost {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsPost($args['projectKey'], $body);
    }

}
