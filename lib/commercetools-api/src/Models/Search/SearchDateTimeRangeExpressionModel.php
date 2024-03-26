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
final class SearchDateTimeRangeExpressionModel extends JsonObjectModel implements SearchDateTimeRangeExpression
{
    /**
     *
     * @var ?SearchDateTimeRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchDateTimeRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|SearchDateTimeRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = SearchDateTimeRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?SearchDateTimeRangeValue $range
     */
    public function setRange(?SearchDateTimeRangeValue $range): void
    {
        $this->range = $range;
    }
}
