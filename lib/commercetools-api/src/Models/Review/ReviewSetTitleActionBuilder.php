<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewSetTitleAction>
 */
final class ReviewSetTitleActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $title;

    /**
     * <p>If <code>title</code> is absent or <code>null</code>, this field will be removed if it exists.</p>.
     *
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     */
    public function withTitle(?string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function build(): ReviewSetTitleAction
    {
        return new ReviewSetTitleActionModel(
            $this->title
        );
    }

    public static function of(): ReviewSetTitleActionBuilder
    {
        return new self();
    }
}
