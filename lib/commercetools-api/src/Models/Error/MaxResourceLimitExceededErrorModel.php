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
final class MaxResourceLimitExceededErrorModel extends JsonObjectModel implements MaxResourceLimitExceededError
{
    public const DISCRIMINATOR_VALUE = 'MaxResourceLimitExceeded';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $exceededResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?string $exceededResource = null
    ) {
        $this->message = $message;
        $this->exceededResource = $exceededResource;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * <p>supported resource type identifiers:</p>
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
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
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
