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
     * @var ?SearchExactValue
     */
    protected $exact;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchExactValue $exact = null
    ) {
        $this->exact = $exact;
    }

    /**
     *
     * @return null|SearchExactValue
     */
    public function getExact()
    {
        if (is_null($this->exact)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXACT);
            if (is_null($data)) {
                return null;
            }

            $this->exact = SearchExactValueModel::of($data);
        }

        return $this->exact;
    }


    /**
     * @param ?SearchExactValue $exact
     */
    public function setExact(?SearchExactValue $exact): void
    {
        $this->exact = $exact;
    }
}
