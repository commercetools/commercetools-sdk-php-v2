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
 * @implements Builder<GraphQLDuplicateEnumValuesError>
 */
final class GraphQLDuplicateEnumValuesErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $duplicates;

    /**
     * <p>Duplicate keys.</p>
     *

     * @return null|array
     */
    public function getDuplicates()
    {
        return $this->duplicates;
    }

    /**
     * @param ?array $duplicates
     * @return $this
     */
    public function withDuplicates(?array $duplicates)
    {
        $this->duplicates = $duplicates;

        return $this;
    }


    public function build(): GraphQLDuplicateEnumValuesError
    {
        return new GraphQLDuplicateEnumValuesErrorModel(
            $this->duplicates
        );
    }

    public static function of(): GraphQLDuplicateEnumValuesErrorBuilder
    {
        return new self();
    }
}
