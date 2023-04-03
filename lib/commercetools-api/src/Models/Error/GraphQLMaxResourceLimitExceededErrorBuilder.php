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
 * @implements Builder<GraphQLMaxResourceLimitExceededError>
 */
final class GraphQLMaxResourceLimitExceededErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $exceededResource;

    /**
     * <p>Resource type that reached its maximum limit of configured elements (for example, 100 Zones per Project).</p>
     *

     * @return null|string
     */
    public function getExceededResource()
    {
        return $this->exceededResource;
    }

    /**
     * @param ?string $exceededResource
     * @return $this
     */
    public function withExceededResource(?string $exceededResource)
    {
        $this->exceededResource = $exceededResource;

        return $this;
    }


    public function build(): GraphQLMaxResourceLimitExceededError
    {
        return new GraphQLMaxResourceLimitExceededErrorModel(
            $this->exceededResource
        );
    }

    public static function of(): GraphQLMaxResourceLimitExceededErrorBuilder
    {
        return new self();
    }
}
