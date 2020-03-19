<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLError>
 */
final class GraphQLErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?GraphQLErrorLocationCollection
     */
    private $locations;

    /**
     * @var ?array
     */
    private $path;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|GraphQLErrorLocationCollection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @return null|array
     */
    public function getPath()
    {
        return $this->path;
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
    public function withLocations(?GraphQLErrorLocationCollection $locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPath(?array $path)
    {
        $this->path = $path;

        return $this;
    }


    public function build(): GraphQLError
    {
        return new GraphQLErrorModel(
            $this->message,
            $this->locations,
            $this->path
        );
    }

    public static function of(): GraphQLErrorBuilder
    {
        return new self();
    }
}
