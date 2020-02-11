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
     * <p>If <code>text</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
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
