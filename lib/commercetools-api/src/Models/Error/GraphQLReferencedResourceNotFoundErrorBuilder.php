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
 * @implements Builder<GraphQLReferencedResourceNotFoundError>
 */
final class GraphQLReferencedResourceNotFoundErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $typeId;

    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * <p>Unique identifier of the referenced resource, if known.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the referenced resource, if known.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $typeId
     * @return $this
     */
    public function withTypeId(?string $typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): GraphQLReferencedResourceNotFoundError
    {
        return new GraphQLReferencedResourceNotFoundErrorModel(
            $this->typeId,
            $this->id,
            $this->key
        );
    }

    public static function of(): GraphQLReferencedResourceNotFoundErrorBuilder
    {
        return new self();
    }
}
