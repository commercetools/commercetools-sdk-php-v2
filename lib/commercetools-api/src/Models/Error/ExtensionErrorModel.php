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
final class ExtensionErrorModel extends JsonObjectModel implements ExtensionError
{
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
     * @var ?string
     */
    protected $extensionId;

    /**
     *
     * @var ?string
     */
    protected $extensionKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $code = null,
        ?string $message = null,
        ?string $extensionId = null,
        ?string $extensionKey = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->extensionId = $extensionId;
        $this->extensionKey = $extensionKey;
    }

    /**
     * <p>Error code caused by the Extension. For example, <code>InvalidField</code>.</p>
     *
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
     * <p>Plain text description of the error.</p>
     *
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
     * <p>Unique identifier of the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getExtensionId()
    {
        if (is_null($this->extensionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTENSION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->extensionId = (string) $data;
        }

        return $this->extensionId;
    }

    /**
     * <p>User-defined unique identifier of the Extension.</p>
     *
     *
     * @return null|string
     */
    public function getExtensionKey()
    {
        if (is_null($this->extensionKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTENSION_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->extensionKey = (string) $data;
        }

        return $this->extensionKey;
    }


    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?string $extensionId
     */
    public function setExtensionId(?string $extensionId): void
    {
        $this->extensionId = $extensionId;
    }

    /**
     * @param ?string $extensionKey
     */
    public function setExtensionKey(?string $extensionKey): void
    {
        $this->extensionKey = $extensionKey;
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
        if (preg_match(ExtensionError::FIELD_PATTERN4, $key) === 1) {
            /** @psalm-var stdClass $data */
            return JsonObjectModel::of($data);
        }

        return $data;
    }
}
