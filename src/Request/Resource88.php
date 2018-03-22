<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Extension\Extension;
use Commercetools\Builder\ExtensionUpdateBuilder;

use Commercetools\Types\Extension\ExtensionDraft;


class Resource88 extends Resource
{
    /**
     * @return Resource89
     */
    public function keyWithKeyValue($key = null): Resource89 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource89($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource90
     */
    public function withIDValue($ID = null): Resource90 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource90($this->getUri() . '/{ID}', $args);
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


    public function update(Extension $resource)
    {
        $builder = new ExtensionUpdateBuilder(function (ExtensionUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
