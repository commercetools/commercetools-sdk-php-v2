<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SuggestionModel extends JsonObjectModel implements Suggestion
{
    /**

     * @var ?string
     */
    protected $text;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $text = null
    ) {
        $this->text = $text;
    }

    /**
     * <p>The suggested text.</p>
     *

     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }


    /**
     * @param ?string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}
