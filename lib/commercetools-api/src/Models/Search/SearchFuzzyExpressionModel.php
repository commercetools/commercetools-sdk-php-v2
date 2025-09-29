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
final class SearchFuzzyExpressionModel extends JsonObjectModel implements SearchFuzzyExpression
{
    /**
     *
     * @var ?SearchFuzzyValue
     */
    protected $fuzzy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchFuzzyValue $fuzzy = null
    ) {
        $this->fuzzy = $fuzzy;
    }

    /**
     *
     * @return null|SearchFuzzyValue
     */
    public function getFuzzy()
    {
        if (is_null($this->fuzzy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FUZZY);
            if (is_null($data)) {
                return null;
            }

            $this->fuzzy = SearchFuzzyValueModel::of($data);
        }

        return $this->fuzzy;
    }


    /**
     * @param ?SearchFuzzyValue $fuzzy
     */
    public function setFuzzy(?SearchFuzzyValue $fuzzy): void
    {
        $this->fuzzy = $fuzzy;
    }
}
