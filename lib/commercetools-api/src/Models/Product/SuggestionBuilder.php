<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Suggestion>
 */
final class SuggestionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $text;

    /**
     * <p>The suggested text.</p>
     *
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }


    public function build(): Suggestion
    {
        return new SuggestionModel(
            $this->text
        );
    }

    public static function of(): SuggestionBuilder
    {
        return new self();
    }
}
