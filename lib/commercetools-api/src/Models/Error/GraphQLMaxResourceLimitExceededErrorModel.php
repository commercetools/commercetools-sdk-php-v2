<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLMaxResourceLimitExceededErrorModel extends JsonObjectModel implements GraphQLMaxResourceLimitExceededError
{
    public const DISCRIMINATOR_VALUE = 'MaxResourceLimitExceeded';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $exceededResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $exceededResource = null,
        ?string $code = null
    ) {
        $this->exceededResource = $exceededResource;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Resource type that reached its maximum limit of configured elements (for example, 100 Zones per Project).</p>
     *
     *
     * @return null|string
     */
    public function getExceededResource()
    {
        if (is_null($this->exceededResource)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXCEEDED_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->exceededResource = (string) $data;
        }

        return $this->exceededResource;
    }


    /**
     * @param ?string $exceededResource
     */
    public function setExceededResource(?string $exceededResource): void
    {
        $this->exceededResource = $exceededResource;
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }

        return $data;
    }
}
