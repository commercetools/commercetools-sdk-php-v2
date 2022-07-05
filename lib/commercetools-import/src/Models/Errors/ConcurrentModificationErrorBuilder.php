<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var ?int
     */
    private $specifiedVersion;

    /**

     * @var ?int
     */
    private $currentVersion;

    /**

     * @var null|mixed|mixed
     */
    private $conflictedResource;

    /**

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>The version specified in the failed request.</p>
     *

     * @return null|int
     */
    public function getSpecifiedVersion()
    {
        return $this->specifiedVersion;
    }

    /**
     * <p>The current version of the resource.</p>
     *

     * @return null|int
     */
    public function getCurrentVersion()
    {
        return $this->currentVersion;
    }

    /**
     * <p>The resource in conflict.</p>
     *

     * @return null|mixed
     */
    public function getConflictedResource()
    {
        return $this->conflictedResource;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?int $specifiedVersion
     * @return $this
     */
    public function withSpecifiedVersion(?int $specifiedVersion)
    {
        $this->specifiedVersion = $specifiedVersion;

        return $this;
    }

    /**
     * @param ?int $currentVersion
     * @return $this
     */
    public function withCurrentVersion(?int $currentVersion)
    {
        $this->currentVersion = $currentVersion;

        return $this;
    }

    /**
     * @param mixed $conflictedResource
     * @return $this
     */
    public function withConflictedResource($conflictedResource)
    {
        $this->conflictedResource = $conflictedResource;

        return $this;
    }


    public function build(): ConcurrentModificationError
    {
        return new ConcurrentModificationErrorModel(
            $this->message,
            $this->specifiedVersion,
            $this->currentVersion,
            $this->conflictedResource
        );
    }

    public static function of(): ConcurrentModificationErrorBuilder
    {
        return new self();
    }
}
