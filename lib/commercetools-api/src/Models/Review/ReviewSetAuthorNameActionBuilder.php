<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewSetAuthorNameAction>
 */
final class ReviewSetAuthorNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $authorName;

    /**
     * @return null|string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @return $this
     */
    public function withAuthorName(?string $authorName)
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function build(): ReviewSetAuthorNameAction
    {
        return new ReviewSetAuthorNameActionModel(
            $this->authorName
        );
    }

    public static function of(): ReviewSetAuthorNameActionBuilder
    {
        return new self();
    }
}
