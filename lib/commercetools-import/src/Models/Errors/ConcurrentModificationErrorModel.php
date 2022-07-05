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
    protected $specifiedVersion;

    /**

     * @var ?int
     */
    protected $currentVersion;

    /**

     * @var ?mixed
     */
    protected $conflictedResource;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $message = null,
        ?int $specifiedVersion = null,
        ?int $currentVersion = null,
        $conflictedResource = null
    ) {
        $this->message = $message;
        $this->specifiedVersion = $specifiedVersion;
        $this->currentVersion = $currentVersion;
        $this->conflictedResource = $conflictedResource;
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
     * <p>The version specified in the failed request.</p>
     *

     * @return null|int
     */
    public function getSpecifiedVersion()
    {
        if (is_null($this->specifiedVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_SPECIFIED_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->specifiedVersion = (int) $data;
        }

        return $this->specifiedVersion;
    }

    /**
     * <p>The current version of the resource.</p>
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
     * <p>The resource in conflict.</p>
     *

     * @return null|mixed
     */
    public function getConflictedResource()
    {
        if (is_null($this->conflictedResource)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_CONFLICTED_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->conflictedResource = $data;
        }

        return $this->conflictedResource;
    }


    /**
     * @param ?string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @param ?int $specifiedVersion
     */
    public function setSpecifiedVersion(?int $specifiedVersion): void
    {
        $this->specifiedVersion = $specifiedVersion;
    }

    /**
     * @param ?int $currentVersion
     */
    public function setCurrentVersion(?int $currentVersion): void
    {
        $this->currentVersion = $currentVersion;
    }

    /**
     * @param mixed $conflictedResource
     */
    public function setConflictedResource($conflictedResource): void
    {
        $this->conflictedResource = $conflictedResource;
    }
}
