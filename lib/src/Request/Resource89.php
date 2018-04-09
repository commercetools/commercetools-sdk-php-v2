<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Extension\Extension;
use Commercetools\Builder\ExtensionUpdateBuilder;

use Commercetools\Types\Extension\ExtensionDraft;


class Resource89 extends Resource
{
    /**
     * @return Resource90
     */
    public function withKey($key = null): Resource90 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource90($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource91
     */
    public function withId($ID = null): Resource91 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource91($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(ExtensionDraft $body = null): ByProjectKeyExtensionsPost {
        $args = $this->getArgs();
        return new ByProjectKeyExtensionsPost($args['projectKey'], $body);
    }


    /**
     * @param Extension $extension
     * @return ExtensionUpdateBuilder
     */
    public function update(Extension $extension): ExtensionUpdateBuilder
    {
        $builder = new ExtensionUpdateBuilder(function(ExtensionUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($extension);
        if ($extension instanceof MapperAware) {
            $builder->setMapper($extension->getMapper());
        }
        return $builder;
    }

    /**
     * @param Extension $extension
     * @return ByProjectKeyExtensionsByIDDelete
     */
    public function delete(Extension $extension): ByProjectKeyExtensionsByIDDelete
    {
        return $this->withId($extension->getId())->delete()->withVersion($extension->getVersion());
    }

    /**
     * @param ExtensionDraft|callable $extensionDraft builder function <code>
     *   function(ExtensionDraft $extensionDraft): ExtensionDraft {
     *     // modify $draft as needed
     *     return $extensionDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyExtensionsPost
     */
    public function create($extensionDraft): ByProjectKeyExtensionsPost
    {
        if (is_callable($extensionDraft)) {
            $callback = $extensionDraft;
            $emptyDraft = $this->mapData(ExtensionDraft::class, null);
            $extensionDraft = $callback($emptyDraft);
        }
        if (!$extensionDraft instanceof ExtensionDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($extensionDraft);
    }
}
