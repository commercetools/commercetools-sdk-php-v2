<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Api\Models\Error\GraphQLErrorObject;
use Commercetools\Api\Models\Error\GraphQLErrorObjectBuilder;
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

     * @var null|GraphQLErrorObject|GraphQLErrorObjectBuilder
     */
    private $extensions;

    /**
     * <p>Detailed description of the error explaining the root cause of the problem and suggesting how to correct the error.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>Location within your query where the error occurred.</p>
     *

     * @return null|GraphQLErrorLocationCollection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * <p>Query fields listed in order from the root of the query response up to the field in which the error occurred. <code>path</code> is displayed in the response only if an error is associated with a particular field in the query result.</p>
     *

     * @return null|array
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * <p>Dictionary with additional information where applicable.</p>
     *

     * @return null|GraphQLErrorObject
     */
    public function getExtensions()
    {
        return $this->extensions instanceof GraphQLErrorObjectBuilder ? $this->extensions->build() : $this->extensions;
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
     * @param ?GraphQLErrorLocationCollection $locations
     * @return $this
     */
    public function withLocations(?GraphQLErrorLocationCollection $locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @param ?array $path
     * @return $this
     */
    public function withPath(?array $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param ?GraphQLErrorObject $extensions
     * @return $this
     */
    public function withExtensions(?GraphQLErrorObject $extensions)
    {
        $this->extensions = $extensions;

        return $this;
    }

    /**
     * @deprecated use withExtensions() instead
     * @return $this
     */
    public function withExtensionsBuilder(?GraphQLErrorObjectBuilder $extensions)
    {
        $this->extensions = $extensions;

        return $this;
    }

    public function build(): GraphQLError
    {
        return new GraphQLErrorModel(
            $this->message,
            $this->locations,
            $this->path,
            $this->extensions instanceof GraphQLErrorObjectBuilder ? $this->extensions->build() : $this->extensions
        );
    }

    public static function of(): GraphQLErrorBuilder
    {
        return new self();
    }
}
