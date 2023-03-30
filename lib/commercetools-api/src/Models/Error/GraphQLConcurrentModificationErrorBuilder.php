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
 * @implements Builder<GraphQLConcurrentModificationError>
 */
final class GraphQLConcurrentModificationErrorBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $currentVersion;

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
     * @param ?int $currentVersion
     * @return $this
     */
    public function withCurrentVersion(?int $currentVersion)
    {
        $this->currentVersion = $currentVersion;

        return $this;
    }


    public function build(): GraphQLConcurrentModificationError
    {
        return new GraphQLConcurrentModificationErrorModel(
            $this->currentVersion
        );
    }

    public static function of(): GraphQLConcurrentModificationErrorBuilder
    {
        return new self();
    }
}
