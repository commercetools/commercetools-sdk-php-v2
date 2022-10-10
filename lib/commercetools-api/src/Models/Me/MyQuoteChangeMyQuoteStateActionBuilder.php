<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyQuoteChangeMyQuoteStateAction>
 */
final class MyQuoteChangeMyQuoteStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $quoteState;

    /**
     * <p>New state to be set for the Quote.</p>
     *

     * @return null|string
     */
    public function getQuoteState()
    {
        return $this->quoteState;
    }

    /**
     * @param ?string $quoteState
     * @return $this
     */
    public function withQuoteState(?string $quoteState)
    {
        $this->quoteState = $quoteState;

        return $this;
    }


    public function build(): MyQuoteChangeMyQuoteStateAction
    {
        return new MyQuoteChangeMyQuoteStateActionModel(
            $this->quoteState
        );
    }

    public static function of(): MyQuoteChangeMyQuoteStateActionBuilder
    {
        return new self();
    }
}
