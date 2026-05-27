<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ExtensionInput>
 */
final class ExtensionInputBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $action;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $oldResource;

    /**
     * <p><code>Create</code> or <code>Update</code> request.</p>
     *

     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * <p>Expanded reference to the resource that triggered the Extension.</p>
     *

     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>Expanded reference to the resource as it was before the update. Only included when <a href="ctp:api:type:ExtensionAdditionalContext"><code>additionalContext.includeOldResource</code></a> is <code>true</code> on the <a href="ctp:api:type:Extension">Extension</a> and the <code>action</code> is <code>Update</code>.</p>
     *

     * @return null|Reference
     */
    public function getOldResource()
    {
        return $this->oldResource instanceof ReferenceBuilder ? $this->oldResource->build() : $this->oldResource;
    }

    /**
     * @param ?string $action
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?Reference $oldResource
     * @return $this
     */
    public function withOldResource(?Reference $oldResource)
    {
        $this->oldResource = $oldResource;

        return $this;
    }

    /**
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withOldResource() instead
     * @return $this
     */
    public function withOldResourceBuilder(?ReferenceBuilder $oldResource)
    {
        $this->oldResource = $oldResource;

        return $this;
    }

    public function build(): ExtensionInput
    {
        return new ExtensionInputModel(
            $this->action,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->oldResource instanceof ReferenceBuilder ? $this->oldResource->build() : $this->oldResource
        );
    }

    public static function of(): ExtensionInputBuilder
    {
        return new self();
    }
}
