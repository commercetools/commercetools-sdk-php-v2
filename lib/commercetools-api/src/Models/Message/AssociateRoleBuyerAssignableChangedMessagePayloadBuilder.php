<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateRoleBuyerAssignableChangedMessagePayload>
 */
final class AssociateRoleBuyerAssignableChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $buyerAssignable;

    /**
     * <p>The new value of the <code>buyerAssignable</code> field of the AssociateRole.</p>
     *

     * @return null|bool
     */
    public function getBuyerAssignable()
    {
        return $this->buyerAssignable;
    }

    /**
     * @param ?bool $buyerAssignable
     * @return $this
     */
    public function withBuyerAssignable(?bool $buyerAssignable)
    {
        $this->buyerAssignable = $buyerAssignable;

        return $this;
    }


    public function build(): AssociateRoleBuyerAssignableChangedMessagePayload
    {
        return new AssociateRoleBuyerAssignableChangedMessagePayloadModel(
            $this->buyerAssignable
        );
    }

    public static function of(): AssociateRoleBuyerAssignableChangedMessagePayloadBuilder
    {
        return new self();
    }
}
