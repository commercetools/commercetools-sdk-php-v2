<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchWildCardExpressionModel extends JsonObjectModel implements SearchWildCardExpression
{
    /**
     *
     * @var ?SearchAnyValue
     */
    protected $wildcard;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchAnyValue $wildcard = null
    ) {
        $this->wildcard = $wildcard;
    }

    /**
     *
     * @return null|SearchAnyValue
     */
    public function getWildcard()
    {
        if (is_null($this->wildcard)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_WILDCARD);
            if (is_null($data)) {
                return null;
            }

            $this->wildcard = SearchAnyValueModel::of($data);
        }

        return $this->wildcard;
    }


    /**
     * @param ?SearchAnyValue $wildcard
     */
    public function setWildcard(?SearchAnyValue $wildcard): void
    {
        $this->wildcard = $wildcard;
    }
}
