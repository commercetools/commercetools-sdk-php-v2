<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLErrorModel extends JsonObjectModel implements GraphQLError
{
    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?GraphQLErrorLocationCollection
     */
    protected $locations;

    /**
     * @var ?array
     */
    protected $path;


    public function __construct(
        string $message = null,
        GraphQLErrorLocationCollection $locations = null,
        array $path = null
    ) {
        $this->message = $message;
        $this->locations = $locations;
        $this->path = $path;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(GraphQLError::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

        return $this->message;
    }

    /**
     * @return null|GraphQLErrorLocationCollection
     */
    public function getLocations()
    {
        if (is_null($this->locations)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(GraphQLError::FIELD_LOCATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->locations = GraphQLErrorLocationCollection::fromArray($data);
        }

        return $this->locations;
    }

    /**
     * @return null|array
     */
    public function getPath()
    {
        if (is_null($this->path)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(GraphQLError::FIELD_PATH);
            if (is_null($data)) {
                return null;
            }
            $this->path = $data;
        }

        return $this->path;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setLocations(?GraphQLErrorLocationCollection $locations): void
    {
        $this->locations = $locations;
    }

    public function setPath(?array $path): void
    {
        $this->path = $path;
    }
}
