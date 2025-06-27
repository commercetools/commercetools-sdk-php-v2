<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectChangePriceRoundingModeActionModel extends JsonObjectModel implements ProjectChangePriceRoundingModeAction
{
    public const DISCRIMINATOR_VALUE = 'changePriceRoundingMode';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $priceRoundingMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $priceRoundingMode = null,
        ?string $action = null
    ) {
        $this->priceRoundingMode = $priceRoundingMode;
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
     * <p>Project-level default rounding mode for calculating the total prices on <a href="ctp:api:type:LineItem">LineItems</a> and <a href="ctp:api:type:CustomLineItem">CustomLineItems</a>. See <a href="ctp:api:type:CartsConfiguration">CartsConfiguration</a>.</p>
     *
     *
     * @return null|string
     */
    public function getPriceRoundingMode()
    {
        if (is_null($this->priceRoundingMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_ROUNDING_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceRoundingMode = (string) $data;
        }

        return $this->priceRoundingMode;
    }


    /**
     * @param ?string $priceRoundingMode
     */
    public function setPriceRoundingMode(?string $priceRoundingMode): void
    {
        $this->priceRoundingMode = $priceRoundingMode;
    }
}
