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
final class SearchFullTextExpressionModel extends JsonObjectModel implements SearchFullTextExpression
{
    /**
     *
     * @var ?SearchFullTextValue
     */
    protected $fullText;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SearchFullTextValue $fullText = null
    ) {
        $this->fullText = $fullText;
    }

    /**
     *
     * @return null|SearchFullTextValue
     */
    public function getFullText()
    {
        if (is_null($this->fullText)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FULL_TEXT);
            if (is_null($data)) {
                return null;
            }

            $this->fullText = SearchFullTextValueModel::of($data);
        }

        return $this->fullText;
    }


    /**
     * @param ?SearchFullTextValue $fullText
     */
    public function setFullText(?SearchFullTextValue $fullText): void
    {
        $this->fullText = $fullText;
    }
}
