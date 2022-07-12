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
final class DiscountCodeInfoModel extends JsonObjectModel implements DiscountCodeInfo
{


    /**

     * @var ?Reference
     */
    protected $discountCode;

    /**

     * @var ?string
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $discountCode = null,
        ?string $state = null
    ) {
        $this->discountCode = $discountCode;
        $this->state = $state;

    }

    /**

     * @return null|Reference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode =  ReferenceModel::of($data);
        }

        return $this->discountCode;
    }

    /**

     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state =  (string) $data;
        }

        return $this->state;
    }


    /**
     * @param ?Reference $discountCode
     */
    public function setDiscountCode(?Reference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }



}
