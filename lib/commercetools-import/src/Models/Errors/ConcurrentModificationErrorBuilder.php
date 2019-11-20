<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ConcurrentModificationError>
 */
final class ConcurrentModificationErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?JsonObject
     */
    private $conflictedResource;

    /**
     * @var ?int
     */
    private $specifiedVersion;

    /**
     * @var ?int
     */
    private $currentVersion;

    /**
     * <p>The error's description.</p>.
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The conflicted resource.</p>.
     *
     * @return null|JsonObject
     */
    public function getConflictedResource()
    {
        return $this->conflictedResource;
    }

    /**
     * <p>The version specified in the failed request.</p>.
     *
     * @return null|int
     */
    public function getSpecifiedVersion()
    {
        return $this->specifiedVersion;
    }

    /**
     * <p>The current version of the resource.</p>.
     *
     * @return null|int
     */
    public function getCurrentVersion()
    {
        return $this->currentVersion;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withConflictedResource(?JsonObject $conflictedResource)
    {
        $this->conflictedResource = $conflictedResource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSpecifiedVersion(?int $specifiedVersion)
    {
        $this->specifiedVersion = $specifiedVersion;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrentVersion(?int $currentVersion)
    {
        $this->currentVersion = $currentVersion;

        return $this;
    }

    public function build(): ConcurrentModificationError
    {
        return new ConcurrentModificationErrorModel(
            $this->message,
            $this->conflictedResource,
            $this->specifiedVersion,
            $this->currentVersion
        );
    }

    public static function of(): ConcurrentModificationErrorBuilder
    {
        return new self();
    }
}
