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
     * @var ?JsonObject
     */
    protected $conflictedResource;


    public function __construct(
        string $message = null,
        int $specifiedVersion = null,
        int $currentVersion = null,
        JsonObject $conflictedResource = null
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
            $data = $this->raw(ErrorObject::FIELD_CODE);
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
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
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
            $data = $this->raw(ConcurrentModificationError::FIELD_SPECIFIED_VERSION);
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
            $data = $this->raw(ConcurrentModificationError::FIELD_CURRENT_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->currentVersion = (int) $data;
        }

        return $this->currentVersion;
    }

    /**
     * <p>The conflicted resource.</p>
     *
     * @return null|JsonObject
     */
    public function getConflictedResource()
    {
        if (is_null($this->conflictedResource)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(ConcurrentModificationError::FIELD_CONFLICTED_RESOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->conflictedResource = JsonObjectModel::of($data);
        }

        return $this->conflictedResource;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setSpecifiedVersion(?int $specifiedVersion): void
    {
        $this->specifiedVersion = $specifiedVersion;
    }

    public function setCurrentVersion(?int $currentVersion): void
    {
        $this->currentVersion = $currentVersion;
    }

    public function setConflictedResource(?JsonObject $conflictedResource): void
    {
        $this->conflictedResource = $conflictedResource;
    }
}
