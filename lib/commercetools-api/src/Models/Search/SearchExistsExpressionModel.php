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
final class SearchExistsExpressionModel extends JsonObjectModel implements SearchExistsExpression
{
    /**
     *
     * @var ?SearchExistsValue
     */
    protected $exists;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchExistsValue $exists = null
    ) {
        $this->exists = $exists;
    }

    /**
     *
     * @return null|SearchExistsValue
     */
    public function getExists()
    {
        if (is_null($this->exists)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXISTS);
            if (is_null($data)) {
                return null;
            }

            $this->exists = SearchExistsValueModel::of($data);
        }

        return $this->exists;
    }


    /**
     * @param ?SearchExistsValue $exists
     */
    public function setExists(?SearchExistsValue $exists): void
    {
        $this->exists = $exists;
    }
}
