<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ExtensionInputModel extends JsonObjectModel implements ExtensionInput
{
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?Reference
     */
    protected $resource;

    /**
     *
     * @var ?Reference
     */
    protected $oldResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null,
        ?Reference $resource = null,
        ?Reference $oldResource = null
    ) {
        $this->action = $action;
        $this->resource = $resource;
        $this->oldResource = $oldResource;
    }

    /**
     * <p><code>Create</code> or <code>Update</code> request.</p>
     *
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Expanded reference to the resource that triggered the Extension.</p>
     *
     *
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->resource = $className::of($data);
        }

        return $this->resource;
    }

    /**
     * <p>Expanded reference to the resource as it was before the update. Only included when <a href="ctp:api:type:ExtensionAdditionalContext"><code>additionalContext.includeOldResource</code></a> is <code>true</code> on the <a href="ctp:api:type:Extension">Extension</a> and the <code>action</code> is <code>Update</code>.</p>
     *
     *
     * @return null|Reference
     */
    public function getOldResource()
    {
        if (is_null($this->oldResource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->oldResource = $className::of($data);
        }

        return $this->oldResource;
    }


    /**
     * @param ?string $action
     */
    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?Reference $oldResource
     */
    public function setOldResource(?Reference $oldResource): void
    {
        $this->oldResource = $oldResource;
    }
}
