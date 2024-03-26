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
final class SearchNumberRangeExpressionModel extends JsonObjectModel implements SearchNumberRangeExpression
{
    /**
     *
     * @var ?SearchNumberRangeValue
     */
    protected $range;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchNumberRangeValue $range = null
    ) {
        $this->range = $range;
    }

    /**
     *
     * @return null|SearchNumberRangeValue
     */
    public function getRange()
    {
        if (is_null($this->range)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RANGE);
            if (is_null($data)) {
                return null;
            }

            $this->range = SearchNumberRangeValueModel::of($data);
        }

        return $this->range;
    }


    /**
     * @param ?SearchNumberRangeValue $range
     */
    public function setRange(?SearchNumberRangeValue $range): void
    {
        $this->range = $range;
    }
}
