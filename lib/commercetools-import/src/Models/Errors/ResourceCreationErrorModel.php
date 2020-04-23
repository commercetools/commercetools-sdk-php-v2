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
final class ResourceCreationErrorModel extends JsonObjectModel implements ResourceCreationError
{
    public const DISCRIMINATOR_VALUE = 'ResourceCreation';
    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?JsonObject
     */
    protected $resource;


    public function __construct(
        string $message = null,
        JsonObject $resource = null
    ) {
        $this->message = $message;
        $this->resource = $resource;
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
     * <p>The error's description.</p>
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
     * @return null|JsonObject
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->resource = JsonObjectModel::of($data);
        }

        return $this->resource;
    }


    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setResource(?JsonObject $resource): void
    {
        $this->resource = $resource;
    }
}
