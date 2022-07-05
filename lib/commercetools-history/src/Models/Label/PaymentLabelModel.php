<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Money;
use Commercetools\History\Models\Common\MoneyModel;

/**
 * @internal
 */
final class PaymentLabelModel extends JsonObjectModel implements PaymentLabel
{

    public const DISCRIMINATOR_VALUE = 'PaymentLabel';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $key;

    /**

     * @var ?Money
     */
    protected $amountPlanned;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?Money $amountPlanned = null
    ) {
        $this->key = $key;
        $this->amountPlanned = $amountPlanned;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**

     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key =  (string) $data;
        }

        return $this->key;
    }

    /**

     * @return null|Money
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }

            $this->amountPlanned =  MoneyModel::of($data);
        }

        return $this->amountPlanned;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?Money $amountPlanned
     */
    public function setAmountPlanned(?Money $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }



}
