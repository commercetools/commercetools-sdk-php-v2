<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class CustomObjectDraftModel extends JsonObjectModel implements CustomObjectDraft
{

    /**
     * @var ?string
     */
    protected $container;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?JsonObject
     */
    protected $value;

    /**
     * @var ?int
     */
    protected $version;


    public function __construct(
        string $container = null,
        string $key = null,
        JsonObject $value = null,
        int $version = null
    ) {
        $this->container = $container;
        $this->key = $key;
        $this->value = $value;
        $this->version = $version;

    }

    /**
     * <p>A namespace to group custom objects.</p>
     *
     * @return null|string
     */
    public function getContainer()
    {
        if (is_null($this->container)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomObjectDraft::FIELD_CONTAINER);
            if (is_null($data)) {
                return null;
            }
            $this->container = (string) $data;
        }

        return $this->container;
    }

    /**
     * <p>A user-defined key that is unique within the given container.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomObjectDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(CustomObjectDraft::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = JsonObjectModel::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CustomObjectDraft::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    public function setContainer(?string $container): void
    {
        $this->container = $container;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setValue(?JsonObject $value): void
    {
        $this->value = $value;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }



}
