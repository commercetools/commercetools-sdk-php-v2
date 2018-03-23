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
        return new Resource89($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource90
     */
    public function withIDValue($ID = null): Resource90 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource90($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    public function update(Extension $extension)
    {
        $builder = new ExtensionUpdateBuilder(function (ExtensionUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($extension);
        if ($extension instanceof MapperAware) {
            $builder->setMapper($extension->getMapper());
        }
        return $builder;
    }

    public function delete(Extension $extension)
    {
        return $this->withIDValue($extension->getId())->delete()->withVersion($extension->getVersion());
    }

    /**
     * @param ExtensionDraft|callable $extensionDraftDraft builder function <code>
     *   function (ExtensionDraft $extensionDraft): ExtensionDraft {
     *     // modify $draft as needed
     *     return $extensionDraft;
     *   }
     *   </code>
     */
    public function create($extensionDraft)
    {
        if (is_callable($extensionDraft)) {
            $callback = $extensionDraft;
            $emptyDraft = $this->mapData(ExtensionDraft::class, null);
            $extensionDraft = $callback($emptyDraft);
        }
        if (!$extensionDraft instanceof ExtensionDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($extensionDraft);
    }
}
