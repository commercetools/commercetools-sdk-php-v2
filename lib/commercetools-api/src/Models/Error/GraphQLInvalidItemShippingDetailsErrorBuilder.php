<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLInvalidItemShippingDetailsError>
 */
final class GraphQLInvalidItemShippingDetailsErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $subject;

    /**

     * @var ?string
     */
    private $itemId;

    /**
     * <p><code>&quot;LineItem&quot;</code> or <code>&quot;CustomLineItem&quot;</code></p>
     *

     * @return null|string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * <p>Unique identifier of the Line Item or Custom Line Item.</p>
     *

     * @return null|string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param ?string $subject
     * @return $this
     */
    public function withSubject(?string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @param ?string $itemId
     * @return $this
     */
    public function withItemId(?string $itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }


    public function build(): GraphQLInvalidItemShippingDetailsError
    {
        return new GraphQLInvalidItemShippingDetailsErrorModel(
            $this->subject,
            $this->itemId
        );
    }

    public static function of(): GraphQLInvalidItemShippingDetailsErrorBuilder
    {
        return new self();
    }
}
