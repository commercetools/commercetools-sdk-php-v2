<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ResourceNotFoundErrorModel extends JsonObjectModel implements ResourceNotFoundError
{
    public const DISCRIMINATOR_VALUE = 'ResourceNotFound';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $message;

    /**
     *
     * @var ?mixed
     */
    protected $resource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        $resource = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->resource = $resource;
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
     *
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
     *
     * @return null|mixed
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->resource = $data;
        }

        return $this->resource;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param mixed $resource
     */
    public function setResource($resource): void
    {
        $this->resource = $resource;
    }
}
