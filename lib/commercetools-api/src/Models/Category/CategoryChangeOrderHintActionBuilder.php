<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CategoryChangeOrderHintAction>
 */
final class CategoryChangeOrderHintActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $orderHint;

    /**
     * @return null|string
     */
    public function getOrderHint()
    {
        return $this->orderHint;
    }

    /**
     * @return $this
     */
    public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;

        return $this;
    }


    public function build(): CategoryChangeOrderHintAction
    {
        return new CategoryChangeOrderHintActionModel(
            $this->orderHint
        );
    }

    public static function of(): CategoryChangeOrderHintActionBuilder
    {
        return new self();
    }
}
