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
final class ConcurrentModificationErrorModel extends JsonObjectModel implements ConcurrentModificationError
{
    public const DISCRIMINATOR_VALUE = 'ConcurrentModification';
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
     * @var ?int
     */
    protected $currentVersion;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?int $currentVersion = null,
        ?string $code = null
    ) {
        $this->message = $message;
        $this->currentVersion = $currentVersion;
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
     * @return null|int
     */
    public function getCurrentVersion()
    {
        if (is_null($this->currentVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_CURRENT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->currentVersion = (int) $data;
        }

        return $this->currentVersion;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?int $currentVersion
     */
    public function setCurrentVersion(?int $currentVersion): void
    {
        $this->currentVersion = $currentVersion;
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
