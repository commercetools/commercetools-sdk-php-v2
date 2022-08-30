<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingRateModel extends JsonObjectModel implements ShippingRate
{


    /**
     *
     * @var ?Money
     */
    protected $price;

    /**
     *
     * @var ?Money
     */
    protected $freeAbove;

    /**
     *
     * @var ?bool
     */
    protected $isMatching;

    /**
     *
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $price = null,
        ?Money $freeAbove = null,
        ?bool $isMatching = null,
        ?ShippingRatePriceTierCollection $tiers = null
    ) {
        $this->price = $price;
        $this->freeAbove = $freeAbove;
        $this->isMatching = $isMatching;
        $this->tiers = $tiers;

    }

    /**
     *
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price =  MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     *
     * @return null|Money
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FREE_ABOVE);
            if (is_null($data)) {
                return null;
            }

            $this->freeAbove =  MoneyModel::of($data);
        }

        return $this->freeAbove;
    }

    /**
     * <p>Only appears in response to requests for ShippingMethods by Cart or location to mark this shipping rate as one that matches the Cart or location.</p>
     *
     *
     * @return null|bool
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching =  (bool) $data;
        }

        return $this->isMatching;
    }

    /**
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers =  ShippingRatePriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }


    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?Money $freeAbove
     */
    public function setFreeAbove(?Money $freeAbove): void
    {
        $this->freeAbove = $freeAbove;
    }

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }



}
