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
final class SearchFullTextPrefixExpressionModel extends JsonObjectModel implements SearchFullTextPrefixExpression
{
    /**
     *
     * @var ?SearchFullTextPrefixValue
     */
    protected $fullTextPrefix;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchFullTextPrefixValue $fullTextPrefix = null
    ) {
        $this->fullTextPrefix = $fullTextPrefix;
    }

    /**
     *
     * @return null|SearchFullTextPrefixValue
     */
    public function getFullTextPrefix()
    {
        if (is_null($this->fullTextPrefix)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FULL_TEXT_PREFIX);
            if (is_null($data)) {
                return null;
            }

            $this->fullTextPrefix = SearchFullTextPrefixValueModel::of($data);
        }

        return $this->fullTextPrefix;
    }


    /**
     * @param ?SearchFullTextPrefixValue $fullTextPrefix
     */
    public function setFullTextPrefix(?SearchFullTextPrefixValue $fullTextPrefix): void
    {
        $this->fullTextPrefix = $fullTextPrefix;
    }
}
