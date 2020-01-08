<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ReviewSetKeyAction>
 */
final class ReviewSetKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * <p>If <code>key</code> is absent or <code>null</code>, this field will be removed if it exists.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): ReviewSetKeyAction
    {
        return new ReviewSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): ReviewSetKeyActionBuilder
    {
        return new self();
    }
}
