<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewSetTextAction>
 */
final class ReviewSetTextActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $text;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param ?string $text
     * @return $this
     */
    public function withText(?string $text)
    {
        $this->text = $text;

        return $this;
    }


    public function build(): ReviewSetTextAction
    {
        return new ReviewSetTextActionModel(
            $this->text
        );
    }

    public static function of(): ReviewSetTextActionBuilder
    {
        return new self();
    }
}
