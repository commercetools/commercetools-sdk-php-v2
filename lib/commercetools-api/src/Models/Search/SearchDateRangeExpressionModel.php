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
final class SearchDateRangeExpressionModel extends JsonObjectModel implements SearchDateRangeExpression
{
    /**
     *
     * @var ?SearchDateRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchDateRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|SearchDateRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = SearchDateRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?SearchDateRangeValue $range
     */
    public function setRange(?SearchDateRangeValue $range): void
    {
        $this->range = $range;
    }
}
