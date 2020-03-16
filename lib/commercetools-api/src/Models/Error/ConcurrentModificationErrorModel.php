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
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?int
     */
    protected $currentVersion;


    public function __construct(
        string $message = null,
        int $currentVersion = null
    ) {
        $this->message = $message;
        $this->currentVersion = $currentVersion;
        $this->code = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
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
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|int
     */
    public function getCurrentVersion()
    {
        if (is_null($this->currentVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ConcurrentModificationError::FIELD_CURRENT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->currentVersion = (int) $data;
        }

        return $this->currentVersion;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setCurrentVersion(?int $currentVersion): void
    {
        $this->currentVersion = $currentVersion;
    }
}
