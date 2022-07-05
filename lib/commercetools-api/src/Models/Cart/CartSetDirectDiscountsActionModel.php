<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetDirectDiscountsActionModel extends JsonObjectModel implements CartSetDirectDiscountsAction
{
    public const DISCRIMINATOR_VALUE = 'setDirectDiscounts';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?DirectDiscountDraftCollection
     */
    protected $discounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DirectDiscountDraftCollection $discounts = null
    ) {
        $this->discounts = $discounts;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
