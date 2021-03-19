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
final class PaymentInfoModel extends JsonObjectModel implements PaymentInfo
{

    /**
     * @var ?ReferenceCollection
     */
    protected $payments;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ReferenceCollection $payments = null
    ) {
        $this->payments = $payments;

    }

    /**
     * @return null|ReferenceCollection
     */
    public function getPayments()
    {
        if (is_null($this->payments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PAYMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->payments =  ReferenceCollection::fromArray($data);
        }

        return $this->payments;
    }


    /**
     * @param ?ReferenceCollection $payments
     */
    public function setPayments(?ReferenceCollection $payments): void
    {
        $this->payments = $payments;
    }



}
