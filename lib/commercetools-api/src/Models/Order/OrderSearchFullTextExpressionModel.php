<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSearchFullTextExpressionModel extends JsonObjectModel implements OrderSearchFullTextExpression
{
    /**
     *
     * @var ?OrderSearchFullTextValue
     */
    protected $fullText;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderSearchFullTextValue $fullText = null
    ) {
        $this->fullText = $fullText;
    }

    /**
     *
     * @return null|OrderSearchFullTextValue
     */
    public function getFullText()
    {
        if (is_null($this->fullText)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FULL_TEXT);
            if (is_null($data)) {
                return null;
            }

            $this->fullText = OrderSearchFullTextValueModel::of($data);
        }

        return $this->fullText;
    }


    /**
     * @param ?OrderSearchFullTextValue $fullText
     */
    public function setFullText(?OrderSearchFullTextValue $fullText): void
    {
        $this->fullText = $fullText;
    }
}
