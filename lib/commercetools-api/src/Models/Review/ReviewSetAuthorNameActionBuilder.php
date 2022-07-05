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
 * @implements Builder<ReviewSetAuthorNameAction>
 */
final class ReviewSetAuthorNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $authorName;

    /**
     * <p>If <code>authorName</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *

     * @return null|string
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param ?string $authorName
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
