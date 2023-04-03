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
 * @implements Builder<GraphQLExtensionNoResponseError>
 */
final class GraphQLExtensionNoResponseErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $extensionId;

    /**

     * @var ?string
     */
    private $extensionKey;

    /**
     * <p>Unique identifier of the API Extension.</p>
     *

     * @return null|string
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }

    /**
     * <p>User-defined unique identifier of the API Extension, if available.</p>
     *

     * @return null|string
     */
    public function getExtensionKey()
    {
        return $this->extensionKey;
    }

    /**
     * @param ?string $extensionId
     * @return $this
     */
    public function withExtensionId(?string $extensionId)
    {
        $this->extensionId = $extensionId;

        return $this;
    }

    /**
     * @param ?string $extensionKey
     * @return $this
     */
    public function withExtensionKey(?string $extensionKey)
    {
        $this->extensionKey = $extensionKey;

        return $this;
    }


    public function build(): GraphQLExtensionNoResponseError
    {
        return new GraphQLExtensionNoResponseErrorModel(
            $this->extensionId,
            $this->extensionKey
        );
    }

    public static function of(): GraphQLExtensionNoResponseErrorBuilder
    {
        return new self();
    }
}
