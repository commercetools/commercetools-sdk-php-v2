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
final class SearchExactExpressionModel extends JsonObjectModel implements SearchExactExpression
{
    /**
     *
     * @var ?SearchAnyValue
     */
    protected $exact;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchAnyValue $exact = null
    ) {
        $this->exact = $exact;
    }

    /**
     *
     * @return null|SearchAnyValue
     */
    public function getExact()
    {
        if (is_null($this->exact)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXACT);
            if (is_null($data)) {
                return null;
            }

            $this->exact = SearchAnyValueModel::of($data);
        }

        return $this->exact;
    }


    /**
     * @param ?SearchAnyValue $exact
     */
    public function setExact(?SearchAnyValue $exact): void
    {
        $this->exact = $exact;
    }
}
