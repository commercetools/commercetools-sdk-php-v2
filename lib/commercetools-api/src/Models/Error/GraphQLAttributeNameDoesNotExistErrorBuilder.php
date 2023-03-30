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
 * @implements Builder<GraphQLAttributeNameDoesNotExistError>
 */
final class GraphQLAttributeNameDoesNotExistErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $invalidAttributeName;

    /**
     * <p>Non-existent Attribute name.</p>
     *

     * @return null|string
     */
    public function getInvalidAttributeName()
    {
        return $this->invalidAttributeName;
    }

    /**
     * @param ?string $invalidAttributeName
     * @return $this
     */
    public function withInvalidAttributeName(?string $invalidAttributeName)
    {
        $this->invalidAttributeName = $invalidAttributeName;

        return $this;
    }


    public function build(): GraphQLAttributeNameDoesNotExistError
    {
        return new GraphQLAttributeNameDoesNotExistErrorModel(
            $this->invalidAttributeName
        );
    }

    public static function of(): GraphQLAttributeNameDoesNotExistErrorBuilder
    {
        return new self();
    }
}
