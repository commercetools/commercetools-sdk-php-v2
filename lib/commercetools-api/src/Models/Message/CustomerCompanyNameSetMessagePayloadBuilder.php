<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerCompanyNameSetMessagePayload>
 */
final class CustomerCompanyNameSetMessagePayloadBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?string
     */
    private $companyName;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCompanyName(?string $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function build(): CustomerCompanyNameSetMessagePayload
    {
        return new CustomerCompanyNameSetMessagePayloadModel(
            $this->type,
            $this->companyName
        );
    }

    public static function of(): CustomerCompanyNameSetMessagePayloadBuilder
    {
        return new self();
    }
}
