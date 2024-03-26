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
final class SearchPrefixExpressionModel extends JsonObjectModel implements SearchPrefixExpression
{
    /**
     *
     * @var ?SearchAnyValue
     */
    protected $prefix;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchAnyValue $prefix = null
    ) {
        $this->prefix = $prefix;
    }

    /**
     *
     * @return null|SearchAnyValue
     */
    public function getPrefix()
    {
        if (is_null($this->prefix)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREFIX);
            if (is_null($data)) {
                return null;
            }

            $this->prefix = SearchAnyValueModel::of($data);
        }

        return $this->prefix;
    }


    /**
     * @param ?SearchAnyValue $prefix
     */
    public function setPrefix(?SearchAnyValue $prefix): void
    {
        $this->prefix = $prefix;
    }
}
