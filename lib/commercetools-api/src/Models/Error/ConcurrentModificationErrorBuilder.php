<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

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
    private $currentVersion;

    /**
     * <p><code>&quot;Object $resourceId has a different version than expected. Expected: $expectedVersion - Actual: $currentVersion.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Current version of the resource.</p>
     *

     * @return null|int
     */
    public function getCurrentVersion()
    {
        return $this->currentVersion;
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
     * @param ?int $currentVersion
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
            $this->currentVersion
        );
    }

    public static function of(): ConcurrentModificationErrorBuilder
    {
        return new self();
    }
}
