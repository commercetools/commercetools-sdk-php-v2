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
 * @implements Builder<GraphQLReferenceExistsError>
 */
final class GraphQLReferenceExistsErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $referencedBy;

    /**
     * <p>Type of referenced resource.</p>
     *

     * @return null|string
     */
    public function getReferencedBy()
    {
        return $this->referencedBy;
    }

    /**
     * @param ?string $referencedBy
     * @return $this
     */
    public function withReferencedBy(?string $referencedBy)
    {
        $this->referencedBy = $referencedBy;

        return $this;
    }


    public function build(): GraphQLReferenceExistsError
    {
        return new GraphQLReferenceExistsErrorModel(
            $this->referencedBy
        );
    }

    public static function of(): GraphQLReferenceExistsErrorBuilder
    {
        return new self();
    }
}
