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
final class CartFreezeCartActionModel extends JsonObjectModel implements CartFreezeCartAction
{
    public const DISCRIMINATOR_VALUE = 'freezeCart';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $strategy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $strategy = null,
        ?string $action = null
    ) {
        $this->strategy = $strategy;
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
     * <p>Strategy that determines the freezing behavior.</p>
     *
     *
     * @return null|string
     */
    public function getStrategy()
    {
        if (is_null($this->strategy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STRATEGY);
            if (is_null($data)) {
                return null;
            }
            $this->strategy = (string) $data;
        }

        return $this->strategy;
    }


    /**
     * @param ?string $strategy
     */
    public function setStrategy(?string $strategy): void
    {
        $this->strategy = $strategy;
    }
}
