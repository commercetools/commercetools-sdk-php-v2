<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Cart\DirectDiscountDraftCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartSetDirectDiscountsActionModel extends JsonObjectModel implements MyCartSetDirectDiscountsAction
{
    public const DISCRIMINATOR_VALUE = 'setDirectDiscounts';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?DirectDiscountDraftCollection
     */
    protected $discounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DirectDiscountDraftCollection $discounts = null,
        ?string $action = null
    ) {
        $this->discounts = $discounts;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <ul>
     * <li>If set, all existing Direct Discounts are replaced.
     * The discounts apply in the order they are added to the list.</li>
     * <li>If empty, all existing Direct Discounts are removed and all affected prices on the Cart or Order are recalculated.</li>
     * </ul>
     *
     *
     * @return null|DirectDiscountDraftCollection
     */
    public function getDiscounts()
    {
        if (is_null($this->discounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->discounts = DirectDiscountDraftCollection::fromArray($data);
        }

        return $this->discounts;
    }


    /**
     * @param ?DirectDiscountDraftCollection $discounts
     */
    public function setDiscounts(?DirectDiscountDraftCollection $discounts): void
    {
        $this->discounts = $discounts;
    }
}
