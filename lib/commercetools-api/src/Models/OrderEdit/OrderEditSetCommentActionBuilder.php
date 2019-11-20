<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderEditSetCommentAction>
 */
final class OrderEditSetCommentActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $comment;

    /**
     * @return null|string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return $this
     */
    public function withComment(?string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    public function build(): OrderEditSetCommentAction
    {
        return new OrderEditSetCommentActionModel(
            $this->comment
        );
    }

    public static function of(): OrderEditSetCommentActionBuilder
    {
        return new self();
    }
}
