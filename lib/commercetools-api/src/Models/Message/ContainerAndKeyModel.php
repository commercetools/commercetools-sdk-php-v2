<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ContainerAndKeyModel extends JsonObjectModel implements ContainerAndKey
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $container;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $container = null
    ) {
        $this->key = $key;
        $this->container = $container;
    }

    /**
     * <p>User-defined identifier that is unique within the given container.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Namespace to group <a href="ctp:api:type:CustomObject">Custom Objects</a>.</p>
     *
     *
     * @return null|string
     */
    public function getContainer()
    {
        if (is_null($this->container)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTAINER);
            if (is_null($data)) {
                return null;
            }
            $this->container = (string) $data;
        }

        return $this->container;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $container
     */
    public function setContainer(?string $container): void
    {
        $this->container = $container;
    }
}
