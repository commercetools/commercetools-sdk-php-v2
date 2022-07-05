<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeTargetCustomLineItemsChangeValue>
 */
final class ChangeTargetCustomLineItemsChangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $predicate;

    /**

     * @return null|string
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * @param ?string $predicate
     * @return $this
     */
    public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;

        return $this;
    }


    public function build(): ChangeTargetCustomLineItemsChangeValue
    {
        return new ChangeTargetCustomLineItemsChangeValueModel(
            $this->predicate
        );
    }

    public static function of(): ChangeTargetCustomLineItemsChangeValueBuilder
    {
        return new self();
    }
}
